<?php

use App\Livewire\Pages\Concedentes\PreCadastro;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')
    ->prefix('concedentes')
    ->group(function () {
        Volt::route('pre-cadastro', PreCadastro::class)
            ->name('concedentes.pre-cadastro');
    });
