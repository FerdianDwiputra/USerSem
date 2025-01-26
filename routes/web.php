<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignInController;

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
Route::resource('/', SignInController::class);
Route::get('/lupa-kata-sandi', [SignInController::class, 'lupaKataSandi']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
