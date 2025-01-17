<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'exam_date', 'status'];

    // Relasi Many-to-Many ke User melalui Exam_Results
    public function users()
    {
        return $this->belongsToMany(User::class, 'exam_results')->withPivot('score', 'status')->withTimestamps();
    }

    // Relasi One-to-Many ke Exam_Results
    public function examResults()
    {
        return $this->hasMany(ExamResult::class);
    }
}
