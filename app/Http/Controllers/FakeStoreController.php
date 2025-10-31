<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class FakeStoreController extends Controller
{
    public function index()
    {
        $response = Http::get('https://fakestoreapi.com/products');

        if ($response->successful()) {
            $productos = $response->json();
            return view('apis.externa-store', compact('productos'));
        }

        return view('apis.externa-store')->withErrors(['error' => 'No se pudo obtener la lista de productos.']);
    }
}
