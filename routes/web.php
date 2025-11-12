<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Tambahkan route-CRUD untuk penyakit, gejala, bobot, dll
});

Route::middleware(['auth'])->group(function () {
    // Semua user (termasuk admin) yang sudah login bisa ke sini
    Route::get('/', [UserController::class, 'index'])->name('dashboard.index');
    // Route konsul user biasa
    Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit.index');
    Route::get('/penyakit/bobot', [PenyakitController::class, 'bobot'])->name('penyakit.bobot');
    Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala.index');
    Route::get('/gejala/bobot', [GejalaController::class, 'bobot'])->name('gejala.bobot');

    Route::get('/calculate', [CalculateController::class, 'index'])->name('calculate.index');
    Route::post('/calculate', [CalculateController::class, 'calculate'])->name('calculate.deteksi'); 
});