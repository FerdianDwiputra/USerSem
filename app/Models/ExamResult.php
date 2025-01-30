<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'exam_id', 'score', 'status'];

    public $incrementing = false;  // Nonaktifkan auto-increment
    protected $keyType = 'string'; // Set tipe primary key menjadi string

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Exam
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
