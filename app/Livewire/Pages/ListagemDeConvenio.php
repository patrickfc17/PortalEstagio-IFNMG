<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ListagemDeConvenio extends Component
{
   
    #[Title('Lista de Convenios')]
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.listagem-de-convenio');
    }
}
