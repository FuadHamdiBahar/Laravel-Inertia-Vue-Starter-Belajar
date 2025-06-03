<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['password.confirm'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'updateInfo'])->name('profile.info');
});


// if verify email works
// Route::inertia('/', 'Home')->middleware('verified')->name('home');
Route::inertia('/', 'Home')->name('home');
require __DIR__ . '/auth.php';
