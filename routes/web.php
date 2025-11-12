<?php

use App\Http\Controllers\CalculateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit.index');
Route::get('/penyakit/bobot', [PenyakitController::class, 'bobot'])->name('penyakit.bobot');
Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala.index');
Route::get('/gejala/bobot', [GejalaController::class, 'bobot'])->name('gejala.bobot');


Route::get('/calculate', [CalculateController::class, 'index'])->name('calculate.index');
Route::post('/calculate', [CalculateController::class, 'calculate'])->name('calculate.deteksi');