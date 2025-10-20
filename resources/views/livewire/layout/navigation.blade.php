<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>
<nav x-data="{ open: false }"
    class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end sm:ms-0 ms-10">
                <a href="{{ route('bienvenida') }}" class="flex ms-2 md:me-24">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Sistema
                        Integrado Marketplace</span>
                </a>
            </div>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('images/sistema-perfil-blanco.jpg') }}"
                        alt="Foto de perfil">
                </button>

                <div x-show="open" @click.outside="open = false"
                    class="absolute right-0 z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                    style="display: none;">
                    <div class="px-4 py-3">
                        <p class="text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                            {{ auth()->user()->email }}</p>
                    </div>
                    <ul class="py-1">
                        <li class="px-3 py-2">
                            <x-dark-mode-toggle />
                        </li>
                        <li>
                            <a href="{{ route('profile') }}" wire:navigate
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                                Ver Perfil
                            </a>
                        </li>
                        <li>
                            <button wire:click="logout"
                                class="w-full text-start px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                                Cerrar Sesión
                            </button>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</nav>
