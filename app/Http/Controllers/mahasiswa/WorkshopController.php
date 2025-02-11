<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        return view('mahasiswa.pages.workshop.index',
            [
                'title' => 'Workshops'
            ]);
    }

    public function detail($id)
    {
        return view('mahasiswa.pages.workshop.detail',
            [
                'title' => 'Detail Workshop'
            ]);
    }
}
