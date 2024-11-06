@php
    use function Livewire\Volt\layout;

    layout('layouts.guest');
@endphp

<main class="w-screen h-screen flex flex-col lg:flex-row gap-12 xl:gap-0">
    <livewire:login.banner class="w-full lg:w-1/2 xl:w-2/3 h-1/2 lg:h-full lg:bg-center opacity-90" />

    <livewire:login.form class="w-full lg:w-1/2 xl:w-1/3 grid grid-cols-1 xl:grid-rows-4 gap-8 pb-8 xl:pb-0" title="Informe Seus Dados Institucionais" />
</main>
