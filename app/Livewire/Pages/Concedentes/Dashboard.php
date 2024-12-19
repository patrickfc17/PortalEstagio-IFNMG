<?php

namespace App\Livewire\Pages\Concedentes;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    #[Title('Dashboard')]
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.pages.concedentes.dashboard');
    }
}
