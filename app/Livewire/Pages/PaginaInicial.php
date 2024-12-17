<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class PaginaInicial extends Component
{
    #[Layout('layouts.guest')]
    #[Title('Home')]
    public function render()
    {
        return view('livewire.pages.pagina-inicial');
    }
}
