<?php

use App\Livewire\Actions\Logout;

$logout = function (Logout $logout) {
    $logout();

    $this->redirect('/', navigate: true);
};

?>

<nav x-data="{ open: false }" class="mb-0 border-b bg-leaf border-leaf">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-7">
        <div class="flex justify-between h-16">
            <div class="flex">
               <div class="flex items-center shrink-0">
                    <a href="/" wire:navigate>
                        <img src="{{ asset('img/logo.png') }}" class="block w-auto h-9" />
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="'/'" :active="request()->routeIs('Principal')" wire:navigate>
                        {{ __('Principal') }}
                    </x-nav-link>
                    <x-nav-link :href="route('passo-a-Passo')" :active="request()->routeIs('#')" wire:navigate>
                        {{ __('Passo a  Passo') }}
                    </x-nav-link>
                    <x-nav-link :href="route('espaço-de-perguntas-frequentes')" :active="request()->routeIs('#')" wire:navigate>
                        {{ __('Perguntas Frequentes') }}
                    </x-nav-link>
                    <x-nav-link :href="route('listagem-de-convenios')" :active="request()->routeIs('#')" wire:navigate>
                        {{ __('Convênios') }}
                    </x-nav-link>
                    <x-nav-link :href="route('ch-cursos')" :active="request()->routeIs('#')" wire:navigate>
                        {{ __('Carga Horária') }}
                    </x-nav-link>
                    <x-nav-link :href="route('login')" :active="request()->routeIs('#')" wire:navigate>
                        {{ __('Log In') }}
                    </x-nav-link>
                </div>
            </div>
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('Principal')" :active="request()->routeIs('Principal')" wire:navigate>
                {{ __('Principal') }}
            </x-responsive-nav-link>
            <img src="{{ asset('img/apenaslogobrancasemfundo.png') }}" class="block w-auto h-9" />
        </div>
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                    <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile')" wire:navigate>
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#" onclick="return false;">
                        {{ __('Documentos') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#" onclick="return false;">
                        {{ __('Convênios') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#" onclick="return false;">
                        {{ __('Mais') }}
                    </x-responsive-nav-link>
                    <button wire:click="logout" class="w-full text-start">
                        <x-responsive-nav-link>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </button>
                </div>
            @else
                <div class="px-4 text-gray-500">
                    {{ __('Guest User') }}
                </div>
            @endauth
        </div>
    </div>
</nav>
