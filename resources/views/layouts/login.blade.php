<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') . (" - $title" ?? '') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('img/logo-ifnmg.png') }}" type="image/x-icon" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js?v=' . preg_replace('/[^0-9]/s', '', now())])

        <!-- Livewire -->
        @livewireStyles
        @livewireScripts
    </head>
    <body class="antialiased text-gray-900 font-ibm-plex-sans bg-paper">
        {{ $slot }}

        <x-flash-message />
    </body>
</html>
