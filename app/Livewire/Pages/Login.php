<?php

namespace App\Livewire\Pages;

use Illuminate\Console\View\Components\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.login')]
#[Title('Login')]
class Login extends Component
{
    public function render(): Factory|View
    {
        return view('livewire.pages.auth.login');
    }
}
