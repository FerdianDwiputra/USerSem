<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return view('mahasiswa.pages.exam.index',
            [
                'title' => 'Exams'
            ]);
    }

    public function detail($id)
    {
        return view('mahasiswa.pages.exam.detail',
            [
                'title' => 'Detail Exam'
            ]);
    }
}
