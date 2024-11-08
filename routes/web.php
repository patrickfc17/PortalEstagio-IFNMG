<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('Principal', 'Principal')
    ->middleware('auth')
    ->name('Principal');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Volt::route('passo-a-passo', 'pages.passo-a-passo')
    ->name('passo-a-Passo');
require __DIR__ . '/auth.php';
