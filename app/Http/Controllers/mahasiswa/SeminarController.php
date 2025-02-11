<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index()
    {
        return view('mahasiswa.pages.seminar.index',
            [
                'title' => 'Seminars'
            ]);
    }

    public function detail($id)
    {
        return view('mahasiswa.pages.seminar.detail',
            [
                'title' => 'Detail Seminar'
            ]);
    }
}
