<x-app-layout>
    @section('title', 'API Externa Clima')
    <div class="p-4 pt-20 sm:ml-64">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('Prueba de sistema de APIs.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 sm:ml-64">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 pt-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Clima actual</h2>
                </div>

                <div class="mx-auto px-6 bg-white dark:bg-gray-800 rounded shadow">
                    @if ($errors->any())
                        <p class="text-red-500">{{ $errors->first() }}</p>
                    @elseif (isset($datos))
                        <p class="text-gray-700 dark:text-gray-300">
                            <strong>Ciudad:</strong> {{ $datos['name'] }}<br>
                            <strong>Temperatura:</strong> {{ $datos['main']['temp'] }} °C<br>
                            <strong>Condición:</strong> {{ $datos['weather'][0]['description'] }}<br>
                            <strong>Humedad:</strong> {{ $datos['main']['humidity'] }}%<br>
                            <strong>Viento:</strong> {{ $datos['wind']['speed'] }} m/s
                        </p>
                    @endif
                    <br>
                    <pre class="text-sm text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-800 p-4 rounded overflow-x-auto">
						{{ json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}
					</pre>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
