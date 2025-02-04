<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Data acara
        $data = [
            'ujian' => 5,
            'seminar' => 3,
            'workshop' => 4
        ];

        return view("pages.dashboard.index",
            [
                "title" => "Dashboard",
                "data" => $data,
            ]);
    }
}
