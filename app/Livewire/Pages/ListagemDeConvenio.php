<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListagemDeConvenio extends Component
{
    #[Title('Convênios')]
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.listagem-de-convenio');
    }
}
