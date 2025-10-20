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
                <div class="px-6 pt-6 pb-6">
                    <form method="POST" action="{{ route('apis.externa-clima.consultar') }}"
                        class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                        @csrf
                        <input type="text" name="ciudad" value="{{ old('ciudad', $ciudad ?? '') }}"
                            placeholder="Ciudad, país"
                            class="w-full sm:w-64 px-4 py-2 rounded border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                            Consultar clima
                        </button>
                    </form>
                    @if (isset($datos))
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
                            <pre class="text-sm text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-900 p-4 rounded overflow-x-auto">
							{{ json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}
						</pre>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="mt-4 px-4 py-2 bg-red-100 border border-red-400 text-red-700 rounded">
                            {{ $errors->first() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
</x-app-layout>
