<x-app-layout>
    @section('title', 'Fake Store API')

    <div class="p-4 pt-20 sm:ml-64">
        <h1 class="text-2xl font-bold mb-6 dark:text-white">Productos desde FakeStoreAPI</h1>

        @if ($errors->any())
            <div class="text-red-500 mb-4">{{ $errors->first('error') }}</div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($productos ?? [] as $producto)
                <div class="bg-white dark:bg-gray-800 dark:text-white rounded shadow p-4">
                    <img src="{{ $producto['image'] }}" alt="{{ $producto['title'] }}"
                        class="w-20 h-48 object-contain mb-4">
                    <h2 class="text-lg font-semibold">{{ $producto['title'] }}</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">
                        {{ Str::limit($producto['description'], 100) }}</p>
                    <p class="font-bold text-blue-600">${{ $producto['price'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
