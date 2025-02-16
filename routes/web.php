<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\Mahasiswa\DashboardController as DMController;
use App\Http\Controllers\Mahasiswa\ExamController as EMController;
use App\Http\Controllers\Mahasiswa\SeminarController as SMController;
use App\Http\Controllers\Mahasiswa\SettingController as TMController;
use App\Http\Controllers\Mahasiswa\WorkshopController as WMController;

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
Route::get('/m/dashboard', [DMController::class, 'index'])->name('mahasiswa.dashboard.index');

//exams
Route::get('/m/exam', [EMController::class, 'index'])->name('mahasiswa.exam.index');
Route::get('/m/exam/{id}', [EMController::class, 'detail'])->name('mahasiswa.exam.detail');

//seminars
Route::get('/m/seminar', [SMController::class, 'index'])->name('mahasiswa.seminar.index');
Route::get('/m/seminar/{id}', [SMController::class, 'detail'])->name('mahasiswa.seminar.detail');

//workshops
Route::get('/m/workshop', [WMController::class, 'index'])->name('mahasiswa.workshop.index');
Route::get('/m/workshop/{id}', [WMController::class, 'detail'])->name('mahasiswa.workshop.detail');

//settings
Route::get('/m/setting', [TMController::class, 'index'])->name('mahasiswa.setting.index');
