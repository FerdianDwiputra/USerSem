<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'workshopId', 'userId'
    ];

    public $incrementing = false;  // Nonaktifkan auto-increment
    protected $keyType = 'string'; // Set tipe primary key menjadi string

    public function workshop()
    {
        return $this->belongsTo(Workshop::class, 'workshopId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
