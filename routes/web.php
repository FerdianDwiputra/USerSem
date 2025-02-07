<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\mahasiswa\DashboardController;
use App\Http\Controllers\mahasiswa\ExamController;
use App\Http\Controllers\mahasiswa\SeminarController;
use App\Http\Controllers\mahasiswa\WorkshopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// auth
Route::get('/', [SignInController::class, 'index']);
Route::post('/login', [SignInController::class, 'login']);
Route::post('/logout', [SignInController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [SignInController::class, 'forgotpassword']);
Route::post('/forgot-password', [SignInController::class, 'sendResetLink'])->name('password.link');
Route::get('/reset-password', [SignInController::class, 'resetpassword']);
Route::post('/reset-password', [SignInController::class, 'updatePassword'])->name('password.update');

//mahasiswa
// dashboard
Route::get('/m/dashboard', [DashboardController::class, 'index']);

//exams
Route::get('/m/exam', [ExamController::class, 'index'])->name('exam.index');
Route::get('/m/exam/{id}', [ExamController::class, 'detail'])->name('exam.detail');

//seminars
Route::get('/m/seminar', [SeminarController::class, 'index'])->name('seminar.index');
Route::get('/m/seminar/{id}', [SeminarController::class, 'detail'])->name('seminar.detail');

//workshops
Route::get('/m/workshop', [WorkshopController::class, 'index'])->name('workshop.index');
Route::get('/m/workshop/{id}', [WorkshopController::class, 'detail'])->name('workshop.detail');
