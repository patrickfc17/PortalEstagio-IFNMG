<?php

namespace App\Livewire\Login;

use App\Livewire\Forms\Concedentes\Form;
use App\Services\Contracts\IAPIService;
use GuzzleHttp\Exception\RequestException;
use Livewire\Component;

use function Livewire\Volt\form;

class PreCadastroForm extends Component
{
    public Form $form;

    private IAPIService $api;

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

    public function boot(IAPIService $apiService): void
    {
        $this->api = $apiService;
    }

    public function login(): void
    {
        $this->form->validate();

        try {
            $res = $this->api->post('/auth/login', $this->form->all());
            $body = json_decode($res->getBody()->getContents());

            $jwt = $body->data
                ->access_token;

            session()->push('jwt', $jwt);
            $this->dispatch('token-set', ['jwt' => $jwt]);
        } catch (RequestException) {}
    }
}
