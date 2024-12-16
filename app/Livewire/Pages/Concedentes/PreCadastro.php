<?php

namespace App\Livewire\Pages\Concedentes;

use Livewire\Attributes\Title;
use Livewire\Component;

class PreCadastro extends Component
{
    #[Title('Concedentes | Pré-Cadastro')]
    public function render()
    {
        return view('livewire.pages.concedentes.pre-cadastro');
    }
}
