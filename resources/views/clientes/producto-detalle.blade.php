<x-app-layout>
    <div class="p-4 pt-20 sm:ml-64">

    <div class="space-y-6 max-w-7xl mx-auto sm:px-6 lg:px-8">

        {{-- Datos del producto --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
            <h3 class="text-lg font-bold mb-4">Información del producto</h3>
            <p><strong>ID:</strong> {{ $producto->id }}</p>
            <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
            <p><strong>Precio:</strong> ${{ number_format($producto->precio, 0, ',', '.') }}</p>
        </div>

        {{-- Ventas asociadas --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
            <h3 class="text-lg font-bold mb-4">Ventas de este producto</h3>

            @forelse ($producto->ventas as $venta)
                <div>
                    <br>
                    <p><strong>ID Venta:</strong> {{ $venta->id }}</p>
                    <p><strong>Unidades compradas:</strong> {{ $venta->total_unidades }}</p>
                    <p><strong>Total:</strong> ${{ number_format($venta->total_costo, 0, ',', '.') }}</p>
                    <p><strong>Fecha de transacción:</strong> {{ $venta->created_at->format('d/m/Y H:i') }}</p>
                </div>
            @empty
                <p>No hay ventas registradas para este producto.</p>
            @endforelse
        </div>
    </div>
    </div>
</x-app-layout>
