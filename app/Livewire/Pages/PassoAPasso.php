<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PassoAPasso extends Component
{
    #[Title('Passo a Passo')]
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.passo-a-passo');
    }
}
