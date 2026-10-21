<?php

use App\Http\Controllers\Guru\GuruController;
use App\Http\Controllers\Admin\GuruController as AdminGuruController;
use App\Http\Controllers\Admin\JadwalController as AdminJadwalPiketController;
use App\Http\Controllers\Admin\PetugasController as AdminPetugasController;
use App\Http\Controllers\Admin\KelasController as AdminKelasController;
use App\Http\Controllers\Admin\JurusanController as AdminJurusanController;
use App\Http\Controllers\Admin\AbsensiGuruController as AdminAbsensiguruController;



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
    Route::resource('guru', AdminGuruController::class);
    Route::resource('jadwal_pikets', AdminJadwalPiketController::class);
    Route::resource('petugas', AdminPetugasController::class);
    Route::resource('kelas', AdminKelasController::class);
    Route::resource('jurusan', AdminJurusanController::class);
    Route::resource('absensiguru', AdminAbsensiGuruController::class);
});

// ==== AKHIR DARI PENGATURAN ADMIN ====




// ===== INI UNTUK PENGATURAN GURU ====
Route::get('/guru/dahsboard', [GuruController::class, 'index'])->name('guru.dashboard');

// ===== INI UNTUK PENGATURAN GURU ====
