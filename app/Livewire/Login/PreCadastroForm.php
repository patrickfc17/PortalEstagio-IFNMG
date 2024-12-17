<?php

namespace App\Livewire\Login;

use App\Livewire\Forms\Concedentes\Form;
use Livewire\Component;

use function Livewire\Volt\form;

class PreCadastroForm extends Component
{
    public Form $form;

    public function mount(): void
    {
        form(Form::class);
    }

    public function render()
    {
        return view('livewire.login.pre-cadastro-form');
    }

    public function register(): void
    {
        $this->form->authenticate();
    }
}
