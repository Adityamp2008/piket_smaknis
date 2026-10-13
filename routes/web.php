<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru\GuruController;

Route::get('/', function () {
    return view('welcome');
});


//==== INI UNTUK PENGATURAN LOGIN ====



//==== AKHIR DARI PENGATURAN LOGIN ====








//==== INI UNTUK PENGATURAN ADMIN ====


//==== AKHIR DARI PENGATURAN ADMIN ====








//===== INI UNTUK PENGATURAN GURU ====
Route::get('/guru/dahsboard', [GuruController::class, 'index'])->name('guru.dashboard');


//===== INI UNTUK PENGATURAN GURU ====