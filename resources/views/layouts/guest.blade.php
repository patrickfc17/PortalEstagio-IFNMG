<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="relative grid min-h-screen grid-cols-1 font-sans antialiased bg-paper auto-rows-[minmax(5%,_max-content)_85%_minmax(10%,_max-content)]">
        <livewire:layout.navigation class="row-start-1 row-end-2" />

        <main>
            {{ $slot }}
        </main>

        <livewire:navigation.footer class="w-full" />
    </body>
</html>
