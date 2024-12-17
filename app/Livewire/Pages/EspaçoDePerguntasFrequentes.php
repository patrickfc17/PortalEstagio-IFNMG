<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class EspaçoDePerguntasFrequentes extends Component
{
    #[Title('FAQs')]
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.espaço-de-perguntas-frequentes');
    }
}
