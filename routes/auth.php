<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthenticateController;

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Register
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    // Register

    Route::get('/login', [AuthenticateController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticateController::class, 'store']);
});
