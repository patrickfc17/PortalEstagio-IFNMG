<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class Footer extends Component
{
    public string $classes = '';

    public function mount(string $class = ''): void
    {
        $this->classes = $class;
    }

    public function render()
    {
        return view('livewire.navigation.footer');
    }
}
