<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministracionController;
require __DIR__.'/auth.php';

Route::view('/', 'welcome');

Route::view('bienvenida', 'bienvenida')
    ->middleware(['auth', 'verified', 'revisa.activo'])
    ->name('bienvenida');
    
Route::get('administracion', [AdministracionController::class, 'index'])
    ->middleware(['auth', 'verified', 'revisa.admin'])
    ->name('administracion');

Route::view('profile', 'profile')
    ->middleware(['auth', 'revisa.activo'])
    ->name('profile');