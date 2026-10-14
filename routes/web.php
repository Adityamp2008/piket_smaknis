<?php

use App\Http\Controllers\Guru\GuruController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ==== INI UNTUK PENGATURAN LOGIN ====

// ==== AKHIR DARI PENGATURAN LOGIN ====




// ==== INI UNTUK PENGATURAN ADMIN ====

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.Admin.dashboard');
    })->name('dashboard');
});

// ==== AKHIR DARI PENGATURAN ADMIN ====




// ===== INI UNTUK PENGATURAN GURU ====
Route::get('/guru/dahsboard', [GuruController::class, 'index'])->name('guru.dashboard');

// ===== INI UNTUK PENGATURAN GURU ====
