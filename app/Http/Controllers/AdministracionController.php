<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Producto;
use App\Models\Venta;

class AdministracionController extends Controller
{
    public function index()
    {
        $usuarios = User::orderByDesc('id')->paginate(5, ['*'], 'usuarios');
        $productos = Producto::with('user')->orderByDesc('id')->paginate(5, ['*'], 'productos');
        $ventas = Venta::with('producto.user')->orderByDesc('id')->paginate(5, ['*'], 'ventas');


        return view('administracion', compact('usuarios', 'productos', 'ventas'));
    }
}