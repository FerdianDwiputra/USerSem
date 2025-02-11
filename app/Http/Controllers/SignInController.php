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
        return view('auth.signIn');
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
            // return response()->json(['message' => 'Invalid credentials'], 401);
            return redirect()->back()->with('error', 'Invalid credentials');
        }

        // Login user
        Auth::login($user);

        // Kembalikan response atau redirect
        if($user->NIM) {
            return redirect('/m/dashboard');
        } else if ($user->NIDN) {
            return redirect('/d/dashboard');
        } else if ($user->role == 'admin') {
            return redirect('/dashboard');
        } else {
            return redirect('/s/dashboard');
        }
    }

    public function forgotpassword()
    {
        return view("auth.forgotPassword");
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'credential' => 'required'
        ]);

        // Cari user berdasarkan credential (NIM, NIDN, Username)
        $user = User::where('NIM', $request->credential)
            ->orWhere('NIDN', $request->credential)
            ->orWhere('username', $request->credential)
            ->first();

        if (!$user) {
            return back()->withErrors(['credential' => 'Data tidak ditemukan.']);
        }

        // Generate token reset password
        $token = Str::random(60);

        // Simpan token ke database
        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        // Kirim email reset password (atau tampilkan link reset secara langsung)
        Mail::raw("Gunakan link ini untuk mengatur ulang password: " . url("/reset-password/{$user->id}?token={$token}"), function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Reset Password');
        });

        return back()->with('status', 'Link reset password telah dikirim ke email Anda.');
    }

    public function resetpassword()
    {
        return view("auth.resetPassword");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
