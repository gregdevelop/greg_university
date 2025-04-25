<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class Realtor extends Model
{
    use HasFactory;

    protected $table = 'realtors';

    protected $fillable = [
        'name',
        'last_name',
        'position',
        'email',
        'hire_date',
        'date_of_birth',
        'email_verified_at',
        'password',
        'email_personal',
        'office_phone',
        'cell_phone',
        'status',
        'created_at',
        'updated_at',
    ];

    public static function getUpcomingBirthdays(Carbon $today, int $maxDays): Collection
    {
        return self::query()
            ->select('id', 'name', 'last_name', 'position', 'date_of_birth')
            ->whereNotNull('date_of_birth')
            ->where('date_of_birth', '!=', '1900-01-01')
            ->get()
            ->map(function ($realtor) use ($today, $maxDays) {
                // Obtén la fecha original del cumpleaños, sin cambiar el año
                $birthDate = Carbon::parse($realtor->date_of_birth);

                // Calcula el próximo cumpleaños en base al cumpleaños actual (sin cambiar el año)
                $nextBirthday = self::calculateNextBirthday($birthDate, $today);
                $nextBirthday = $nextBirthday->startOfDay();
                $todayMidnight = $today->copy()->startOfDay();

                // Calcula los días restantes hasta el próximo cumpleaños
                $daysUntil = $todayMidnight->diffInDays($nextBirthday, false);

                // Si el cumpleaños está dentro del rango de días (0 hasta maxDays), inclúyelo
                if ($daysUntil >= 0 && $daysUntil <= $maxDays) {
                    return [
                        'id' => $realtor->id,
                        'name' => $realtor->name . ' ' . $realtor->last_name,
                        'last_name' => $realtor->last_name,
                        'position' => $realtor->position,
                        // Muestra la fecha de cumpleaños con el año actual, pero sin cambiar la fecha original para el cálculo
                        'birth_date' => $birthDate->year(now()->year)->format('Y-m-d'),
                        'next_birthday' => $nextBirthday->format('Y-m-d'),
                        'days_until_birthday' => $daysUntil, // 0 = today
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

    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

    protected $hidden = [
        'password',
    ];
}
