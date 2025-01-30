<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignInController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.auth.signIn');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'credential' => 'required',
            'password' => 'required',
        ]);

        // Cari user berdasarkan NIM, NIDN, atau username
        $user = User::where('NIM', $request->credential)
            ->orWhere('NIDN', $request->credential)
            ->orWhere('username', $request->credential)
            ->first();

        // Cek apakah user ditemukan dan password cocok
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Login user
        Auth::login($user);

        // Kembalikan response atau redirect
        return redirect('/dashboard');
    }

    public function lupaKataSandi()
    {
        return view("pages.auth.lupaKataSandi");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
