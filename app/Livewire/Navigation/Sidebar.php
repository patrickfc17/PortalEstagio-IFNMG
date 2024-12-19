<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class Sidebar extends Component
{
    public array $items = [];

    public function mount(): void
    {
        $this->items = [
            'Dashboard' => [
                'route' => 'dashboard',
                'icon' => 'components.svg.dashboard'
            ],
            'Log Out' => [
                'route' => 'logout',
                'icon' => 'components.svg.home'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.navigation.sidebar');
    }
}
