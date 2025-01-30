<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'seminarId', 'userId'
    ];

    public $incrementing = false;  // Nonaktifkan auto-increment
    protected $keyType = 'string'; // Set tipe primary key menjadi string

    public function seminar()
    {
        return $this->belongsTo(Seminar::class, 'seminarId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
