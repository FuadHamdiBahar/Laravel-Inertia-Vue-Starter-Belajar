<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// if verify email works
// Route::inertia('/', 'Home')->middleware('verified')->name('home');
Route::inertia('/', 'Home')->name('home');

require __DIR__ . '/auth.php';
