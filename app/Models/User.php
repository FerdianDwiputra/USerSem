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
    protected $fillable = ['name', 'email', 'password', 'role'];

    // Relasi Many-to-Many ke Exam
    public function exams()
    {
        return $this->belongsToMany(Exam::class, 'exam_results')->withPivot('score', 'status')->withTimestamps();
    }

    // Relasi Many-to-Many ke Workshop
    public function workshops()
    {
        return $this->belongsToMany(Workshop::class, 'workshop_registrations')->withPivot('certificate_path')->withTimestamps();
    }
}
