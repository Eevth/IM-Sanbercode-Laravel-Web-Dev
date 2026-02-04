<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

// Route Home (/)
Route::get('/', [DashboardController::class, 'index'])->name('home');

// Route Register (GET = tampil form, POST = proses submit)
Route::get('/register', [FormController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [FormController::class, 'processRegister'])->name('register.process');

// Route Welcome
Route::get('/welcome', [FormController::class, 'showWelcome'])->name('welcome');