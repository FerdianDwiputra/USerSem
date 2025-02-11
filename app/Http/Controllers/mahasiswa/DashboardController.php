<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
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

        return view("mahasiswa.pages.dashboard.index",
            [
                "title" => "Dashboard",
                "data" => $data,
            ]);
    }
}
