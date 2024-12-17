<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PassoAPasso extends Component
{
    #[Layout('layouts.guest')]
    #[Title('Passo a Passo')]
    public function render()
    {
        return view('livewire.pages.passo-a-passo');
    }
}
