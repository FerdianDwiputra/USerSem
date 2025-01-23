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
}
