<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AseguraUsuarioAdmin
{
    public function handle(Request $request, Closure $next)
    {
       // Verificada la autenticación, se ve el tipo.
        if (Auth::user()->tipo !== 'Administrador') {
            return redirect()->route('bienvenida');
        }
        return $next($request);
    }
}
