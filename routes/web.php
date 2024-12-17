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

Volt::route('listagem-de-convenio', 'pages.listagem-de-convenio')
    ->name('listagem-de-convenio');

Volt::route('espaço-de-perguntas-frequentes', 'pages.espaço-de-perguntas-frequentes')
    ->name('espaço-de-perguntas-frequentes');
require __DIR__ . '/auth.php';

require __DIR__ . '/concedentes.php';
