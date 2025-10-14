<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Venta;

class ClienteVentaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $ventas = Venta::whereHas('producto', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->with('producto.user')
            ->orderByDesc('created_at')
            ->get();

        return view('clientes.ventas', compact('ventas'));
    }
}