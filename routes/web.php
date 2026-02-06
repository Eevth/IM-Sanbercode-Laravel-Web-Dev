<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

// Route Home (halaman utama)
Route::get('/', [DashboardController::class, 'index'])->name('home');

// Route Register
Route::get('/register', [FormController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [FormController::class, 'processRegister'])->name('register.process');

// Route Welcome (setelah submit form)
Route::get('/welcome', [FormController::class, 'showWelcome'])->name('welcome');