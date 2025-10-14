<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Producto;
use App\Models\Venta;

class AdministracionController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $productos = Producto::with('user')->get();
        $ventas = Venta::with('producto.user')->get();

        return view('administracion', compact('usuarios', 'productos', 'ventas'));
    }
}