<?php

use Illuminate\Support\Facades\Route;

// if verify email works
// Route::inertia('/', 'Home')->middleware('verified')->name('home');
Route::inertia('/', 'Home')->name('home');

Route::inertia('/dashboard', 'Dashboard')->middleware(['auth'])->name('dashboard');
Route::inertia('/profile', 'Profile/Edit')->middleware(['auth', 'password.confirm'])->name('profile.edit');


require __DIR__ . '/auth.php';
