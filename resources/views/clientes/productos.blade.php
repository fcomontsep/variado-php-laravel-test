<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido al Panel de Productos Publicados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Productos que has publicado, estimado cliente.') }}
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{-- Productos --}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <h3 class="text-lg font-bold mb-4">Productos en venta</h3>
                    <ul>
                        @foreach ($productos as $producto)
                            <br>
                            <li>
                                <strong>ID:</strong> {{ $producto->id }}<br>
                                <strong>Nombre:</strong> {{ $producto->nombre }}<br>
                                <strong>Precio:</strong> ${{ number_format($producto->precio, 0, ',', '.') }}<br>
                                <a href="{{ route('productos.detalle', ['user' => $producto->user_id, 'producto' => $producto->id]) }}"
                                    class="text-blue-400 hover:underline">
                                    <i>Ver detalle del producto</i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
