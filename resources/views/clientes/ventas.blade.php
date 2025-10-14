<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido al Panel de Ventas Realizadas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Ventas que has realizado, estimado cliente.") }}
                </div>
            </div>
        </div>
    </div>
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Ventas --}}
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <h3 class="text-lg font-bold mb-4">Ventas registradas</h3>
                        <ul>
                            @foreach ($ventas as $venta)
                                <br>
                                <li class>
                                    <strong>ID:</strong> {{ $venta->id }}<br>
                                    <strong>Producto:</strong> {{ $venta->producto->nombre }} (ID: {{ $venta->producto->id }})<br>
                                    <strong>Unidades compradas:</strong> {{ $venta->total_unidades }}<br>
                                    <strong>Total:</strong> ${{ number_format($venta->total_costo, 0, ',', '.') }}<br>
                                    <strong>Fecha de transacción:</strong> {{ $venta->created_at->format('d/m/Y H:i') }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
