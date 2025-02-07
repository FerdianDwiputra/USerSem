<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return view('pages.exam.index',
            [
                'title' => 'Exams'
            ]);
    }

    public function detail($id)
    {
        return view('pages.exam.detail',
            [
                'title' => 'Detail Exam'
            ]);
    }
}
