<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes - CV BIMA TECHNOLOGIES
|--------------------------------------------------------------------------
*/

// ================= PUBLIC ROUTES =================
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/kerjasama', [PageController::class, 'kerjasama'])->name('kerjasama');
Route::get('/organisasi', [PageController::class, 'organisasi'])->name('organisasi');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// ================= AUTH ROUTES =================
Route::get('/login', [AuthController::class, 'login'])->name('login');

// ================= DASHBOARD ROUTES =================
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dokumen', [DashboardController::class, 'dokumen'])->name('dashboard.dokumen');
});
