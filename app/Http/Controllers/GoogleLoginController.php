<?php

namespace App\Http\Controllers;

use App\Models\Realtor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        try {
            return Socialite::driver('google')
                ->redirectUrl(route('google.callback')) // Asegurar la URL de callback
                ->redirect();
        } catch (\Exception $e) {
            Log::error('Google Redirect Error: ' . $e->getMessage());
            return redirect()->route('login')->withErrors([
                'google' => 'Error al iniciar con Google. Por favor intente nuevamente.'
            ]);
        }
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $email = $googleUser->getEmail();

            // Verificar dominio si es necesario (según tu error muestra hd=g4-technologies.com)
            if (!str_ends_with($email, '@g4-technologies.com')) {
                throw ValidationException::withMessages([
                    'email' => 'Solo se permiten cuentas de g4-technologies.com'
                ]);
            }

            // Buscar usuario en ambas tablas
            $user = User::where('email', $email)->first();
            $realtor = Realtor::where('email', $email)->first();

            if (!$user && !$realtor) {
                throw ValidationException::withMessages([
                    'email' => 'No estás autorizado para acceder al sistema.'
                ]);
            }

            // Autenticar según el tipo de usuario
            if ($user) {
                Auth::login($user);
                session()->regenerate();
                return redirect('/user-profile');
            }

            if ($realtor) {
                // Crear sesión para realtors
                session()->put('realtor', [
                    'id' => $realtor->id,
                    'name' => $realtor->name,
                    'email' => $realtor->email,
                    'is_realtor' => true
                ]);
                session()->regenerate();

                return redirect('/user-profile');
            }

        } catch (\Exception $e) {
            Log::error('Google Auth Error: ' . $e->getMessage());

            if ($e instanceof ValidationException) {
                throw $e;
            }

            return redirect()->route('login')->withErrors([
                'google' => 'Error al autenticar con Google. Por favor intente nuevamente.'
            ]);
        }
    }
}
