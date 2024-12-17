<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') . ($title ? " - $title" : '') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('img/logo-ifnmg.png') }}" type="image/x-icon" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Livewire -->
        @livewireStyles
        @livewireScripts
    </head>
    <body class="grid min-h-screen grid-cols-8 antialiased grid-rows-12 min-w-screen font-ibm-plex-sans bg-paper">
        <livewire:navigation.sidebar />

        <main class="col-span-12 col-start-1 row-start-1 xl:col-span-7 lg:col-start-3 xl:col-start-2 row-span-10 lg:col-span-8">
            {{ $slot }}

            <x-flash-message />
        </main>

        <livewire:navigation.footer class="col-span-12 col-start-1 row-span-2 lg:col-start-3 lg:col-span-8 xl:col-start-2 row-start-11 xl:col-span-7" />
    </body>
</html>
