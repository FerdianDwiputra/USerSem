<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'pemateriId', 'categoryId', 'name', 'start_time', 'link'
    ];

    public function pemateri()
    {
        return $this->belongsTo(User::class, 'pemateriId');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function details()
    {
        return $this->hasMany(SeminarDetail::class, 'seminarId');
    }
}
