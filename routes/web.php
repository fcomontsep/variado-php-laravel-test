<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('bienvenida', 'bienvenida')
    ->middleware(['auth', 'verified', 'revisa.activo'])
    ->name('bienvenida');
    
Route::view('administracion', 'administracion')
    ->middleware(['auth', 'verified', 'revisa.admin'])
    ->name('administracion');

Route::view('profile', 'profile')
    ->middleware(['auth', 'revisa.activo'])
    ->name('profile');

require __DIR__.'/auth.php';
