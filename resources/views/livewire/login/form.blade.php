<section class="{{ $classes }}">
    <div class="grid-col-span-1 grid-row-span-1 flex justify-center items-end">
        <h1 class="h-fit w-full xl:w-2/3 text-xl 2xl:text-3xl text-leaf font-semibold text-center">
            {{ $welcome }}
            <br />
            {{ $title }}
        </h1>
    </div>
    <form class="w-11/12 sm:w-3/5 xl:w-4/5 min-h-fit h-full lg:h-1/2 col-span-1 row-span-3 flex flex-col gap-4 2xl:gap-8 justify-center mx-auto border border-leaf px-4 lg:px-12 2xl:px-16 py-20 lg:py-0 rounded" wire:submit="login">
        @csrf

        <div x-data="{ email: '' }">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                wire:model="form.email"
                x-model.lazy="email"
                x-ref="email"
                id="email"
                class="block mt-1 w-full h-12"
                type="email"
                name="email"
                autocomplete="email"
                x-on:blur="$refs.emailError.classList.remove('hidden')"
                required
                autofocus
            />

            @error('form.email')
                <x-error-message>{{ $message }}</x-error-message>
            @else
                <x-error-message
                    class="hidden"
                    x-ref="emailError"
                    :error="'email && !email.endsWith(\'@aluno.ifnmg.edu.br\')'"
                >Esperamos que o usuário entre com um email institucional. Tente novamente</x-error-message>
            @enderror
        </div>

        <div x-data="{ password: '' }">
            <x-input-label for="password" :value="__('Senha')" />
            <x-text-input
                wire:model="form.senha"
                x-model.lazy="password"
                id="password"
                class="block mt-1 w-full h-12"
                type="password"
                name="senha"
                autocomplete="current-password"
                x-on:blur="$refs.senhaError.classList.remove('hidden')"
                required
            />

            @error('form.senha')
                <x-error-message>{{ $message }}</x-error-message>
            @else
                <x-error-message
                    class="hidden"
                    x-ref="senhaError"
                    :error="'password && password.length < 8'"
                >Por favor, insira uma senha com mais de 8 caracteres</x-error-message>
            @enderror
        </div>

        <div class="flex items-center justify-center md:justify-end">
            <x-primary-button class="ms-0 sm:ms-3" wire:click="login">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>
    </form>
</section>
