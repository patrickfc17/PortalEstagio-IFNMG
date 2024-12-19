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
    </head>
    <body class="relative grid min-h-screen grid-cols-1 font-sans antialiased bg-paper auto-rows-[max-content_83%_max-content]">
        <livewire:layout.navigation class="row-start-1 row-end-2" />

        <main>
            {{ $slot }}
        </main>

        <livewire:navigation.footer class="w-full" />
    </body>
</html>
