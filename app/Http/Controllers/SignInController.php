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
        $request->validate([
            'credential' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('NIM', $request->credential)
            ->orWhere('NIDN', $request->credential)
            ->orWhere('username', $request->credential)
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $role = $user->role;
        $token = $user->createToken('auth_token')->plainTextToken;

        return redirect('/dashboard/token')->with(['token' => $token, 'user' => $user]);
    }

    public function lupaKataSandi()
    {
        return view("pages.auth.lupaKataSandi");
    }
}
