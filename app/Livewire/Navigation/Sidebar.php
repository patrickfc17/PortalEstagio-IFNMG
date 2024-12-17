<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class Sidebar extends Component
{
    public array $items = [];

    public function mount(): void
    {
        $this->items = [
            'Dashboard' => 'components.svg.dashboard',
        ];
    }

    public function render()
    {
        return view('livewire.navigation.sidebar');
    }
}