<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('bienvenida', 'bienvenida')
    ->middleware(['auth', 'verified', 'revisa.tipo'])
    ->name('bienvenida');

Route::view('profile', 'profile')
    ->middleware(['auth', 'revisa.tipo'])
    ->name('profile');

require __DIR__.'/auth.php';
