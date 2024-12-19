<?php

namespace App\Livewire\Login;

use App\Livewire\Forms\LoginForm;
use App\Services\Contracts\IAPIService;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Console\View\Components\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

use function Livewire\Volt\form;

class Form extends Component
{
    public string $welcome = '';

    public string $title = '';

    public bool $error = false;

    public string $classes = '';

    public LoginForm $form;

    private IAPIService $api;

    public function boot(IAPIService $apiService): void
    {
        $this->api = $apiService;
    }

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
        $this->form->validate();

        try {
            $res = $this->api->post('/auth/login', $this->form->all());
            $body = json_decode($res->getBody()->getContents());

            $jwt = $body->data
                ->access_token;

            session()->push('jwt', $jwt);

            $this->welcome = 'Sucesso! Redirecionando...';
            $this->title = '';
            $this->error = false;
        } catch (RequestException) {
            $this->welcome = 'Este Usuário Não Está Cadastrado No Sistema.';
            $this->title = 'Por favor, Contate o Suporte.';
            $this->error = true;
        }
    }
}
