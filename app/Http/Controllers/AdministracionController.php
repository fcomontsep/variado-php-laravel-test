<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Producto;
use App\Models\Venta;

class AdministracionController extends Controller
{
    public function index()
    {
        $usuarios = User::orderByDesc('id')->get();
        $productos = Producto::with('user')->orderByDesc('id')->get();
        $ventas = Venta::with('producto.user')->orderByDesc('id')->paginate(5);

        return view('administracion', compact('usuarios', 'productos', 'ventas'));
    }
}