<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\Auth\LoginController;

// Rute untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk memproses form login
Route::post('/login', [LoginController::class, 'login']);

Route::prefix('dokter')->group(function(){
    Route::resource('obat', ObatController::class);
    Route::resource('periksa', PeriksaController::class);
});

// Halaman utama (Welcome)
Route::get('/', function () {
    return view('welcome');
});

// Halaman Login & Register (Tanpa Middleware)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Rute untuk Pasien (Tanpa Middleware)
Route::prefix('pasien')->group(function () {
    Route::get('/dashboard', function () {
        return view('pasien.dashboard');
    })->name('pasien.dashboard');

    Route::get('/periksa', function () {
        return view('pasien.periksa');
    })->name('pasien.periksa');

    Route::get('/riwayat', function () {
        return view('pasien.riwayat');
    })->name('pasien.riwayat');
});

// Rute untuk Dokter (Tanpa Middleware)
Route::prefix('dokter')->group(function () {
    Route::get('/dashboard', function () {
        return view('dokter.dashboard');
    })->name('dokter.dashboard');

    Route::get('/periksa', function () {
        return view('dokter.periksa');
    })->name('dokter.periksa');

    Route::get('/obat', function () {
        return view('dokter.obat');
    })->name('dokter.obat');

    
});