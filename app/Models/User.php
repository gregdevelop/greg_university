<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class User extends Authenticatable
{
    use Notifiable;

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'last_name',
        'position',
        'company_id',
        'level',
        'email',
        'password',
        'remember_pw',
        'location',
        'use_gitime',
        'phone',
        'business_phone',
        'profile_picture',
        'qr_code_path',
        'business_card_path',
        'remember_token',
        'birthday',
        'hire_date',
        'trial_period',
        'performance_review',
        'tenure',
        'type_of_contract',
        'end_date',
        'hourly_rate',
        'hours_per_week',
        'weekly_rate',
        'biweekly_salary',
        'monthly_salary',
        'annual_salary',
        'payment_method',
        'last_rate_increase',
        'contract_signed',
        'handbook_signed',
        'tax_type_delivered',
        'id_with_photo',
        'emergency_contact_name',
        'emergency_contact_phone',
        'personal_email',
        'job_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function where($column, $operator = null, $value = null)
    {
        $instance = new static; // voy a crear una instancia de la clase actual
        return $instance->newQuery()->where($column, $operator, $value); // voy a retornar una nueva consulta  ahora que lo dices  hay un error entonces en el operador porque no tienesentido usar el operador cuando en mi base de datos tengo estos roles y estas usando el operador para hacer clock out de todos
    }

    public function getPayrollForDate(Carbon $date)
    {
        return Payroll::whereDate('start_date', '<=', $date)
            ->whereDate('end_date', '>=', $date)
            ->first();
    }

    /**
     * Get the role that owns the user.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin()
    {
        return $this->role->id === 1;
    }

    public function isHHSSManager()
    {
        return $this->role->id === 2;
    }

    public function isBULeader()
    {
        return $this->role->id === 3;
    }

    public function isEmployee()
    {
        return $this->role->id === 4;
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // app/Models/User.php

    public function timeLogs()
    {
        return $this->hasMany(TimeLog::class, 'employee_id');
    }

    public function generateQrCode()
    {
        $vCard = "BEGIN:VCARD\n"
            . "VERSION:3.0\n"
            . "FN:{$this->name} {$this->last_name}\n"
            . "TITLE:{$this->position}\n"
            . "EMAIL:{$this->email}\n"
            . "TEL:{$this->phone}\n"
            . "END:VCARD";

        // Generar código QR y guardarlo en el storage
        $fileName = "qr_codes/qr_{$this->id}.png";
       $qrCode = QrCode::format('png')->size(300)->generate($vCard);

       Storage::disk('public')->put($fileName, $qrCode);

        // Guardar la ruta en la base de datos
        $this->update(['qr_code_path' => $fileName]);

        return asset("storage/{$fileName}");
    }

    public function generateBusinessCard()
    {
        $pdf = Pdf::loadView('pdf.business_card', ['user' => $this]);

        // Guardar el PDF en storage
        $fileName = "business_cards/business_card_{$this->id}.pdf";
        Storage::disk('public')->put($fileName, $pdf->output());

        // Guardar la ruta en la base de datos
        $this->update(['business_card_path' => $fileName]);

        return asset("storage/{$fileName}");
    }

    public function workSchedules()
    {
        return $this->hasMany(WorkSchedule::class);
    }

    public function actionLogs()
    {
        return $this->hasMany(ActionLog::class);
    }

    public static function getUpcomingBirthdays(Carbon $today, int $maxDays): Collection
    {
        return self::query()
            ->whereNotNull('birthday')
            ->where('birthday', '!=', '1900-01-01') // opcional, por si necesitas filtrar fechas inválidas
            ->get()
            ->map(function ($user) use ($today, $maxDays) {
                // Usar la fecha de cumpleaños original
                $birthDate = Carbon::parse($user->birthday);

                // Calcular el próximo cumpleaños
                $nextBirthday = self::calculateNextBirthday($birthDate, $today)->startOfDay();
                $todayMidnight = $today->copy()->startOfDay();

                // Calcular los días restantes
                $daysUntil = $todayMidnight->diffInDays($nextBirthday, false);

                if ($daysUntil >= 0 && $daysUntil <= $maxDays) {
                    return [
                        'id' => $user->id,
                        'name' => $user->name . ' ' . $user->last_name,
                        'position' => $user->position,
                        'birth_date' => $birthDate->year(now()->year)->format('Y-m-d'), // solo para mostrar
                        'next_birthday' => $nextBirthday->format('Y-m-d'),
                        'days_until_birthday' => $daysUntil,
                    ];
                }

                return null;
            })

            ->filter()
            ->values();

    }

    private static function calculateNextBirthday($dateOfBirth, Carbon $referenceDate): Carbon
    {
        $birthday = Carbon::parse($dateOfBirth)->startOfDay();
        $referenceDate = $referenceDate->copy()->startOfDay();

        $next = Carbon::createFromDate($referenceDate->year, $birthday->month, $birthday->day)->startOfDay();

        return $next->isPast() ? $next->addYear()->startOfDay() : $next;
    }

    public static function getManagerByUsingEmployee($userId)
    {
        // Obtener el usuario
        $user = User::find($userId);

        // Si el usuario no existe, devolver null
        if (!$user) {
            return null;
        }

        // Obtener la compañía a la que pertenece el usuario
        $company = $user->company;

        // Si no pertenece a ninguna compañía, devolver null
        if (!$company) {
            return null;
        }

        // Devolver el usuario que es manager de esta compañía
        return User::find($company->manager_id);
    }

    public static function getEmployeesByUsingManager($managerId)
    {
        // Buscar compañías donde el usuario es manager
        $company = Company::where('manager_id', $managerId)->first();

        // Si no es manager de ninguna compañía, devolver colección vacía
        if (!$company) {
            return collect();
        }

        // Devolver todos los usuarios que pertenecen a esta compañía
        return User::where('company_id', $company->id)->get();
    }
}
