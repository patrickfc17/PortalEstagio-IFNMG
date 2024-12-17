@php
    use function Livewire\Volt\layout;

    layout('layouts.guest');
@endphp

<main class="flex flex-col w-screen h-screen gap-12 lg:flex-row xl:gap-0">
    <livewire:login.banner class="w-full lg:w-1/2 xl:w-2/3 h-1/2 lg:h-full lg:bg-center opacity-90" />

    <livewire:login.form class="grid w-full grid-cols-1 gap-8 pb-8 lg:w-1/2 xl:w-1/3 xl:grid-rows-4 xl:pb-0" title="Informe Seus Dados Institucionais" />
</main>
