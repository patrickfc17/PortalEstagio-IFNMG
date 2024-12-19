<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Legislação')]
#[Layout('layouts.guest')]
class Legislacao extends Component
{
    public function render()
    {
        return view('livewire.pages.legislacao');
    }
}
