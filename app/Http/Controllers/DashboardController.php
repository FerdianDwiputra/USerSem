<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.dashboard.index",
            [
                "title" => "Dashboard",
                'token' => session('token'), 'user' => session('user')
            ]);
    }
}
