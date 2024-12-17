<?php

namespace App\Livewire\Login;

use Illuminate\Console\View\Components\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Banner extends Component
{
    public string $classes = '';

    public function mount(string $class): void
    {
        $this->classes = $class;
    }

    public function render(): Factory|View
    {
        return view('livewire.login.banner');
    }
}
