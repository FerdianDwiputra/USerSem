<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name'
    ];

    public function seminars()
    {
        return $this->hasMany(Seminar::class, 'categoryId');
    }

    public function workshops()
    {
        return $this->hasMany(Workshop::class, 'categoryId');
    }

    public function exams()
    {
        return $this->hasMany(Exam::class, 'categoryId');
    }
}
