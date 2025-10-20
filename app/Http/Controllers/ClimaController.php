<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ClimaController extends Controller
{
    public function mostrar()
    {
        $ciudad = 'Santiago,cl';
        $apiKey = env('OPENWEATHER_API_KEY');

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $ciudad,
            'appid' => $apiKey,
            'units' => 'metric',
            'lang' => 'es',
        ]);

        if ($response->successful()) {
            $datos = $response->json();
            return view('apis.externa-clima', compact('datos'));
        } else {
            return view('apis.externa-clima')->withErrors(['error' => 'No se pudo obtener el clima']);
        }
    }
}