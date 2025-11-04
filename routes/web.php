<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit.index');
Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala.index');
Route::get('/gejala/bobot', [GejalaController::class, 'bobot'])->name('gejala.bobot');