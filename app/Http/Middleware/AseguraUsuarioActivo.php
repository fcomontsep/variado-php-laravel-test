<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AseguraUsuarioActivo
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Si el usuario está autenticado y su activo es 0 o false
        if ($user && !$user->activo) {
            Auth::logout(); // Cierra sesión
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->withErrors([
                'tipo' => 'Tu cuenta ha sido desactivada o modificada.',
            ]);
        }

        return $next($request);
    }
}
