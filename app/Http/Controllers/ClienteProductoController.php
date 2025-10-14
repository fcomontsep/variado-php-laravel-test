<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class ClienteProductoController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $productos = Producto::where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->get();

        return view('clientes.productos', compact('productos'));
    }

    public function detalle($userId, $productoId)
    {
        $user = Auth::user();

        $producto = Producto::where('id', $productoId)
            ->where('user_id', $userId)
            ->with('user', 'ventas')
            ->first();

        if (! $producto || $producto->user_id !== $user->id) {
            abort(404);
        }

        return view('clientes.producto-detalle', compact('producto'));
    }
}
