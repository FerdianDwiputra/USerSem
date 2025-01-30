<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'NIM', 'NIDN', 'name', 'email', 'password'
    ];

    public $incrementing = false;  // Nonaktifkan auto-increment
    protected $keyType = 'string'; // Set tipe primary key menjadi string

    public function seminars()
    {
        return $this->hasMany(Seminar::class, 'pemateriId');
    }

    public function workshops()
    {
        return $this->hasMany(Workshop::class, 'pemateriId');
    }

    public function exams()
    {
        return $this->hasMany(Exam::class, 'pengujiId');
    }

    public function seminarDetails()
    {
        return $this->hasMany(SeminarDetail::class, 'userId');
    }

    public function workshopDetails()
    {
        return $this->hasMany(WorkshopDetail::class, 'userId');
    }

    public function examDetails()
    {
        return $this->hasMany(ExamDetail::class, 'userId');
    }

    public static function boot()
    {
        parent::boot();

        // Logic untuk otomatis generate ID sebelum data disimpan
        static::creating(function ($user) {
            // Cari ID terakhir yang sudah ada
            $lastUser = self::latest('id')->first();

            // Tentukan ID baru
            if ($lastUser) {
                // Ambil angka dari ID terakhir, misalnya 'USR0002'
                $lastIdNumber = (int) substr($lastUser->id, 3);
                $newId = 'USR' . str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
            } else {
                // Jika belum ada user, ID pertama adalah 'USR0001'
                $newId = 'USR0001';
            }

            // Assign ID ke user yang baru
            $user->id = $newId;
        });
    }
}
