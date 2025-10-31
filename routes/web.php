<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\ClienteVentaController;
use App\Http\Controllers\ClienteProductoController;

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
    ->name('ventas');

Route::get('productos', [ClienteProductoController::class, 'index'])
    ->middleware(['auth', 'verified', 'revisa.cliente'])
    ->name('productos');

Route::get('productos/{user}/{producto}/detalle', [ClienteProductoController::class, 'detalle'])
    ->middleware(['auth', 'verified', 'revisa.cliente'])
    ->name('productos.detalle');

use App\Http\Controllers\ClimaController;

Route::get('/apis/externa-clima', [ClimaController::class, 'mostrar'])->name('apis.externa-clima')
    ->middleware(['auth', 'verified', 'revisa.admin']);
Route::post('/apis/externa-clima', [ClimaController::class, 'consultar'])->name('apis.externa-clima.consultar')
    ->middleware(['auth', 'verified', 'revisa.admin']);

use App\Http\Controllers\UsuarioApiController;

Route::get('/apis/interna-usuarios', [UsuarioApiController::class, 'mostrar'])->name('apis.interna-usuarios')
    ->middleware(['auth', 'verified', 'revisa.admin']);
Route::post('/apis/interna-usuarios', [UsuarioApiController::class, 'consultar'])->name('apis.interna-usuarios.consultar')
    ->middleware(['auth', 'verified', 'revisa.admin']);

use App\Http\Controllers\FakeStoreController;

Route::get('/apis/externa-store', [FakeStoreController::class, 'index'])->name('apis.externa-store')
    ->middleware(['auth', 'verified', 'revisa.admin']);
