<?php

namespace App\Livewire\Pages;

use Illuminate\Console\View\Components\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
#[Layout('layouts.login')]
class Login extends Component
{
    public function render(): Factory|View
    {
        return view('livewire.pages.auth.login');
    }

    public function boot(): mixed
    {
        if (session()->get('jwt')) return to_route('/');

        return true;
    }
}
