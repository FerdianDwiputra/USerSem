<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'location', 'status'];

    public $incrementing = false;  // Nonaktifkan auto-increment
    protected $keyType = 'string'; // Set tipe primary key menjadi string

    // Relasi Many-to-Many ke User melalui Workshop_Registrations
    public function users()
    {
        return $this->belongsToMany(User::class, 'workshop_registrations')->withPivot('certificate_path')->withTimestamps();
    }

    // Relasi One-to-Many ke Workshop_Registrations
    public function registrations()
    {
        return $this->hasMany(WorkshopRegistration::class);
    }
}
