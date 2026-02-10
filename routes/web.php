
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

// Halaman Home
Route::get('/', [DashboardController::class, 'index'])->name('home');

// Halaman Form Registrasi
Route::get('/register', [FormController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [FormController::class, 'processRegister'])->name('register.process');

// Halaman Welcome setelah submit
Route::get('/welcome', [FormController::class, 'showWelcome'])->name('welcome');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login'); // ganti kalau route login beda
})->name('logout');
