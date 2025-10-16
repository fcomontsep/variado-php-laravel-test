<x-app-layout>
    @section('title', 'Productos')
    <div class="p-4 pt-20 sm:ml-64">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 pb-12">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Productos a la Venta
                        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                            Productos que has publicado, estimado cliente.
                        </p>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Nombre</th>
                            <th scope="col" class="px-6 py-3">Precio</th>
                            <th scope="col" class="px-6 py-3">Detalle</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($productos as $producto)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $producto->id }}
                                </th>
                                <td class="px-6 py-4">{{ $producto->nombre }}</td>
                                <td class="px-6 py-4">${{ number_format($producto->precio, 0, ',', '.') }}</td>
                                <td class="px-6 py-4"><a
                                        href="{{ route('productos.detalle', ['user' => $producto->user_id, 'producto' => $producto->id]) }}"
                                        class="text-blue-400 hover:underline">
                                        <i>Ver detalle</i>
                                    </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
