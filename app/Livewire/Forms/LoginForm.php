<?php

namespace App\Livewire\Forms;

use App\Http\Requests\Auth\LoginFormRequest;
use Livewire\Form;

class LoginForm extends Form
{
    public string $email = '';

    public string $senha = '';

    protected function rules(): array
    {
        return (new LoginFormRequest())->rules();
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
