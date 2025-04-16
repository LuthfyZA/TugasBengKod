<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\HomeController;

// Halaman utama (Welcome)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman Login & Register
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Rute untuk Dokter
Route::prefix('dokter')->group(function () {
    // Dashboard dokter
    Route::get('/', [HomeController::class, 'dokter'])->name('dokter');
    Route::get('/dashboard', function () {
        return view('dokter.dashboard');
    })->name('dokter.dashboard');
    
    // Resource routes untuk Obat (CRUD)
    Route::resource('obat', ObatController::class);
    
    // Resource routes untuk Periksa (CRUD)
    Route::resource('periksa', PeriksaController::class);
});

// Rute untuk Pasien
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