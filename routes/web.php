<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\ClienteVentaController;

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

Route::get('ventas', [ClienteVentaController::class, 'index'])
    ->middleware(['auth', 'verified', 'revisa.cliente'])
    ->name('ventas.cliente');