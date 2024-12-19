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
                    <x-nav-link :href="'/'" :active="request()->routeIs('/')" wire:navigate>
                        {{ __('Principal') }}
                    </x-nav-link>
                    <x-nav-link :href="route('passo-a-passo')" :active="request()->routeIs('passo-a-passo')" wire:navigate>
                        {{ __('Passo a  Passo') }}
                    </x-nav-link>
                    <x-nav-link :href="route('espaço-de-perguntas-frequentes')" :active="request()->routeIs('espaço-de-perguntas-frequentes')" wire:navigate>
                        {{ __('Perguntas Frequentes') }}
                    </x-nav-link>
                    <x-nav-link :href="route('listagem-de-convenios')" :active="request()->routeIs('listagem-de-convenios')" wire:navigate>
                        {{ __('Convênios') }}
                    </x-nav-link>
                    <x-nav-link :href="route('ch-cursos')" :active="request()->routeIs('ch-cursos')" wire:navigate>
                        {{ __('Carga Horária') }}
                    </x-nav-link>
                    <x-nav-link :href="route('legislacao')" :active="request()->routeIs('legislacao')" wire:navigate>
                        {{ __('Legislação') }}
                    </x-nav-link>
                    @if (!session()->get('jwt'))
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                            {{ __('Log In') }}
                        </x-nav-link>
                    @endif
                    @session('jwt')
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @endsession
                </div>
            </div>
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 transition duration-150 ease-in-out rounded-md text-paper hover:text-ink hover:bg-paper focus:outline-none focus:bg-paper focus:text-ink">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="flex flex-col mt-3 space-y-1">
            <x-nav-link class="flex justify-center text-lg" :href="'/'" :active="request()->routeIs('/')" wire:navigate>
                {{ __('Principal') }}
            </x-nav-link>
            <x-nav-link class="flex justify-center text-lg" :href="route('passo-a-passo')" :active="request()->routeIs('passo-a-passo')" wire:navigate>
                {{ __('Passo a  Passo') }}
            </x-nav-link>
            <x-nav-link class="flex justify-center text-lg" :href="route('espaço-de-perguntas-frequentes')" :active="request()->routeIs('espaço-de-perguntas-frequentes')" wire:navigate>
                {{ __('Perguntas Frequentes') }}
            </x-nav-link>
            <x-nav-link class="flex justify-center text-lg" :href="route('listagem-de-convenios')" :active="request()->routeIs('listagem-de-convenios')" wire:navigate>
                {{ __('Convênios') }}
            </x-nav-link>
            <x-nav-link class="flex justify-center text-lg" :href="route('ch-cursos')" :active="request()->routeIs('ch-cursos')" wire:navigate>
                {{ __('Carga Horária') }}
            </x-nav-link>
            @if (!session()->get('jwt'))
                <x-nav-link class="flex justify-center text-lg" :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                    {{ __('Log In') }}
                </x-nav-link>
            @endif
        </div>
    </div>
</nav>
