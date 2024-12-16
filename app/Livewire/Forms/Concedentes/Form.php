<?php

namespace App\Livewire\Forms\Concedentes;

use App\Http\Requests\Auth\LoginFormRequest;
use App\Http\Requests\Concedentes\PreCadastroFormRequest;
use Livewire\Form as LivewireForm;

class Form extends LivewireForm
{
    public string $name = '';

    public string $email = '';

    protected function rules(): array
    {
        return (new PreCadastroFormRequest())->rules();
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->validate();
    }
}
