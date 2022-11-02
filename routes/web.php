<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::middleware('guest')->group(function(){
    Route::view('login', 'login')->name('login');
    Route::view('register', 'register')->name('register');
    Route::post('register/process', [AuthController::class, 'register'])->name('register-process');
    Route::post('login/process', [AuthController::class, 'login'])->name('login-process');
});

Route::middleware('auth')->group(function(){
    Route::get('', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
