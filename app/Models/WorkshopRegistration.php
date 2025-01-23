<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopRegistration extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'workshop_id', 'certificate_path'];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Workshop
    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
