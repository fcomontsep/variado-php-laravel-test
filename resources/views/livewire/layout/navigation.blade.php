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

            <div x-data="{
                isDark: localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
                toggleTheme() {
                    this.isDark = !this.isDark;
                    document.documentElement.classList.toggle('dark', this.isDark);
                    localStorage.setItem('color-theme', this.isDark ? 'dark' : 'light');
                }
            }" x-init="document.documentElement.classList.toggle('dark', isDark)" class="flex items-center gap-2">
                <button @click="toggleTheme" type="button"
                    class="relative w-5 h-5 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-0 rounded-lg text-sm p-2.5">
                    <svg x-cloak :class="isDark ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                        class="absolute inset-0 w-5 h-5 transition-opacity duration-200" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>

                    <svg x-cloak :class="!isDark ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                        class="absolute inset-0 w-5 h-5 transition-opacity duration-200" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                        </path>
                    </svg>
                </button>

                <span class="hidden sm:inline text-sm text-gray-700 dark:text-gray-300"
                    x-text="isDark ? 'Modo oscuro' : 'Modo claro'"></span>
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
