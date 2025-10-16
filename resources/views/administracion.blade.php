<x-app-layout>

    <div class="p-4 pt-20 sm:ml-64">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('A continuación tendrás información crucial de este sistema.') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 pb-12">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Usuarios del Sistema
                        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                            Todos los usuarios registrados en el sistema.
                        </p>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Nombre</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Tipo</th>
                            <th scope="col" class="px-6 py-3">Activo</th>
                            <th scope="col" class="px-6 py-3">Creado</th>
                            <th scope="col" class="px-6 py-3">Actualizado</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($usuarios as $usuario)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $usuario->id }}
                                </th>
                                <td class="px-6 py-4">{{ $usuario->name }}</td>
                                <td class="px-6 py-4">{{ $usuario->email }}</td>
                                <td class="px-6 py-4">{{ $usuario->tipo }}</td>
                                <td class="px-6 py-4">{{ $usuario->activo ? 'SÍ' : 'NO' }}</td>
                                <td class="px-6 py-4">{{ $usuario->created_at }}</td>
                                <td class="px-6 py-4">{{ $usuario->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6 pb-12">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Productos publicados
                        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                            En el sistema, los clientes están vendiendo los siguientes productos.
                        </p>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Nombre</th>
                            <th scope="col" class="px-6 py-3">Precio</th>
                            <th scope="col" class="px-6 py-3">Vendido Por</th>
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
                                <td class="px-6 py-4">{{ $producto->user->name }} (ID:
                                    {{ $producto->user->id }})</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Ventas Realizadas
                        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                            Sistema Integrado Marketplace registra las siguientes ventas.
                        </p>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Producto</th>
                            <th scope="col" class="px-6 py-3">Vendedor</th>
                            <th scope="col" class="px-6 py-3">Unidades Compradas</th>
                            <th scope="col" class="px-6 py-3">Costo Total</th>
                            <th scope="col" class="px-6 py-3">Fecha de Transacción</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($ventas as $venta)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $venta->id }}
                                </th>
                                <td class="px-6 py-4">{{ $venta->producto->nombre }} (ID:
                                    {{ $venta->producto->id }})</td>
                                <td class="px-6 py-4">{{ $venta->producto->user->name }} (ID:
                                    {{ $venta->producto->user->id }})</td>
                                <td class="px-6 py-4">{{ $venta->total_unidades }}</td>
                                <td class="px-6 py-4">${{ number_format($venta->total_costo, 0, ',', '.') }}</td>
                                <td class="px-6 py-4">{{ $venta->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
