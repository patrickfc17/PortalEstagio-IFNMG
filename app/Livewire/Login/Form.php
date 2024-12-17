<?php

namespace App\Livewire\Login;

use App\Livewire\Forms\LoginForm;
use Illuminate\Console\View\Components\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

use function Livewire\Volt\form;

class Form extends Component
{
    public string $welcome = '';

    public string $title = '';

    public string $classes = '';

    public LoginForm $form;

    public function mount(string $title, string $class = '', bool $omitWelcome = false): void
    {
        !$omitWelcome && $this->welcome = 'Bem-Vindo!';
        $this->title = $title;
        $this->classes = $class;

        form(LoginForm::class);
    }

    public function render(): Factory|View
    {
        return view('livewire.login.form');
    }

    public function login(): void
    {
        $this->validate();
    }
}
