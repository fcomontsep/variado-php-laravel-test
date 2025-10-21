<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioApiController extends Controller
{
    public function mostrar()
    {
        return view('apis.interna-usuarios');
    }

    public function consultar(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
        ]);

        $correo = $request->input('correo');
        $usuario = User::where('email', $correo)->first();

        if ($usuario) {
            return view('apis.interna-usuarios', compact('usuario', 'correo'));
        } else {
            return back()->withErrors(['error' => 'No se encontró ningún usuario con ese correo.'])->withInput();
        }
    }
}
