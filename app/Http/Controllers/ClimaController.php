<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClimaController extends Controller
{
    public function mostrar()
    {
        return view('apis.externa-clima');
    }

    public function consultar(Request $request)
    {
        $request->validate([
            'ciudad' => 'required|string|max:100',
        ]);

        $ciudad = $request->input('ciudad');
        $apiKey = env('OPENWEATHER_API_KEY');

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $ciudad,
            'appid' => $apiKey,
            'units' => 'metric',
            'lang' => 'es',
        ]);

        if ($response->successful()) {
            $datos = $response->json();
            return view('apis.externa-clima', compact('datos', 'ciudad'));
        } else {
            return back()->withErrors(['error' => 'No se pudo obtener el clima para esa ciudad.']);
        }
    }
}
