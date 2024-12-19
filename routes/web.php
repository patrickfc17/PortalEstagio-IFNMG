<?php

use App\Http\Controllers\DownloadController;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
    Volt::route('/', 'pages.pagina-inicial')
        ->name('/');

    Volt::route('passo-a-passo', 'pages.passo-a-passo')
        ->name('passo-a-passo');

    Volt::route('convenios', 'pages.listagem-de-convenio')
        ->name('listagem-de-convenios');

    Volt::route('faqs', 'pages.espaço-de-perguntas-frequentes')
        ->name('espaço-de-perguntas-frequentes');

    Volt::route('ch-cursos', 'pages.exibicao-curso')
        ->name('ch-cursos');

    Volt::route('legislacao', 'pages.legislacao')
        ->name('legislacao');

    Route::get('legislacao-download', [DownloadController::class, 'legislacao'])
        ->name('legislacao-download');

    Route::get('regulamento-download', [DownloadController::class, 'regulamento'])
        ->name('regulamento-download');
});


Volt::route('dashboard', 'pages.concedentes.dashboard')
    ->name('dashboard');


require __DIR__ . '/auth.php';

require __DIR__ . '/concedentes.php';
