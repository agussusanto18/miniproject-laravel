<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth')->group(function(){
    Route::view('', 'index')->name('home');
});

Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');
Route::post('register/process', [AuthController::class, 'register'])->name('register-process');
Route::post('login/process', [AuthController::class, 'login'])->name('login-process');