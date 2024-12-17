<?php

namespace App\Livewire\Navigation;

use Illuminate\Console\View\Components\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class NavItem extends Component
{
    public string $icon = '';
    public string $name = '';
    public string $link = '';

    public function mount(string $icon, string $name, string $link = '#'): void
    {
        $this->icon = $icon;
        $this->name = $name;
        $this->link = $link;
    }

    public function render(): Factory|View
    {
        return view('livewire.navigation.nav-item');
    }
}
