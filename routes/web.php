<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Livewire\Volt\Volt;

Volt::route('/', 'pages.pagina-inicial');

Route::view('Principal', 'Principal')
    ->middleware('auth')
    ->name('Principal');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Volt::route('passo-a-passo', 'pages.passo-a-passo')
    ->name('passo-a-Passo');

Volt::route('convenios', 'pages.listagem-de-convenio')
    ->name('listagem-de-convenios');

Volt::route('faqs', 'pages.espaço-de-perguntas-frequentes')
    ->name('espaço-de-perguntas-frequentes');

Volt::route('/exibicao-curso', 'pages.exibicao-curso');

require __DIR__ . '/auth.php';

require __DIR__ . '/concedentes.php';
