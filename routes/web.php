<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'revisa.tipo'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'revisa.tipo'])
    ->name('profile');

require __DIR__.'/auth.php';
