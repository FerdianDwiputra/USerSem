<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'NIM' => 'nullable|integer',
            'NIDN' => 'nullable|integer',
            'username' => 'nullable|string|unique:users',
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,user',
        ]);

        // Generate custom ID in format USR0001, USR0002, etc.
        $lastUser = User::orderBy('id', 'desc')->first();
        $newIdNumber = $lastUser ? ((int)substr($lastUser->id, 3)) + 1 : 1;
        $newId = 'USR' . str_pad($newIdNumber, 4, '0', STR_PAD_LEFT);

        $user = User::create([
            'NIM' => $request->NIM,
            'NIDN' => $request->NIDN,
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }
}
