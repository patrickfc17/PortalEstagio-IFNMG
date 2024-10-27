# Portal Estágio IFNMG

Este é um sistema para gerenciamento do processo de estágio estabelecimento pelo regulamento de estágio regido através do Projeto Pedagógico de cada curso (PPC) no IFNMG. \
Todo o controle e geração de documentação deve e será mantido por esta aplicação e será armazenada e enviada aos devidos envolvidos em suas respectivas datas.

## Neste Projeto

- Docker
- Laravel
- Laravel Sail (Docker)
- Laravel Octane (Swoole)
- Livewire
- Flowbite

## Instalação de Dependências

Para instalar as dependências necessárias para este projeto utilize:

```sh
composer update
#ou
composer install
```

Além de adicionar as dependências para o Node.JS:

```sh
npm install
```

## Execução

Entre na documentação do **[Laravel](https://laravel.com)** e veja como utilizar o Laravel Sail. Alternativamente, adicione o seguinte alias ao seu terminal:

```sh
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```

Ou, no caso de ambientes **Windows** utilize o seguinte comando para utilizar o Sail no projeto

```sh
./vendor/bin/sail
```

Utilizarei o alias "Sail" como padrão a partir de então.

Para poder construir a imagem correspondente à este projeto do Sail utilize:

```sh
sail up --build -d

```

Logo após a inicialização do Sail, rode as _Migrations_ relativas ao projeto:

```sh
sail artisan migrate
```

Caso necessário, sete a chave de segurança utilizando:

```sh
sail artisan key:generate
```

E então, utilize este comando para inicializar o projeto:

```sh
sail composer run dev
```

E o mesmo deve estar disponível em [http://localhost](http://localhost)
