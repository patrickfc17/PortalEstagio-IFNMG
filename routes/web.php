<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'pages.pagina-inicial');

Route::view('dashboard', 'dashboard')
    ->middleware('auth')
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Volt::route('/exibicao-curso', 'pages.exibicao-curso');

require __DIR__ . '/auth.php';
