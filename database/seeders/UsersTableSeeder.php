<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => Str::uuid(),
                'NIM' => 12345678,
                'NIDN' => null,
                'username' => null,
                'name' => 'Mahasiswa Abadi',
                'email' => 'mahasiswa@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'NIM' => null,
                'NIDN' => 87654321,
                'username' => null,
                'name' => 'Dosen Killer',
                'email' => 'dosen@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'NIM' => null,
                'NIDN' => null,
                'username' => 'pengajar123',
                'name' => 'Master Informatika',
                'email' => 'pengajar@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user', // Pengajar tetap "user"
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'NIM' => null,
                'NIDN' => null,
                'username' => 'admin123',
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin', // Admin role "admin"
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
