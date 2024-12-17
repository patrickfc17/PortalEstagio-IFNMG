<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ExibicaoCurso extends Component
{
    #[Layout('layouts.guest')] 
    #[Title('Exibição de Cursos')]
    public function render()
    {
        return view('livewire.pages.exibicao-curso'); 
    }
}
