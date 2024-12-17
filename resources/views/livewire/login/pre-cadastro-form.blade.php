<form class="w-[99.7%] mb-[0.3%] md:mb-[0.2%] rounded-lg h-[90%] bg-paper flex flex-col items-center justify-center gap-8" wire:submit="register">
    <div x-data="{ name: '' }" class="w-3/5">
        <x-input-label for="name" :value="__('Nome')" />
        <x-text-input
            wire:model="form.name"
            x-model.lazy="name"
            x-ref="name"
            x-on:blur="$refs.nameError.classList.remove('hidden')"
            id="name"
            class="block w-full h-12 mt-1"
            type="text"
            name="name"
            autocomplete="name"
            required
            autofocus
        />

        @error('form.email')
            <x-error-message>{{ $message }}</x-error-message>
        @else
            <x-error-message
                class="hidden"
                x-ref="nameError"
                :error="'!name'"
            >O campo "Nome" deve estar preenchido para a realização deste cadastro. Por favor, tente novamente</x-error-message>
        @enderror
    </div>
    <div x-data="{ email: '' }" class="w-3/5">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input
            wire:model="form.email"
            x-model.lazy="email"
            x-ref="email"
            id="email"
            class="block w-full h-12 mt-1"
            type="email"
            name="email"
            autocomplete="email"
            x-on:blur="$refs.emailError.classList.remove('hidden')"
            required
        />

        @error('form.email')
            <x-error-message>{{ $message }}</x-error-message>
        @else
            <x-error-message
                class="hidden"
                x-ref="emailError"
                :error="'email && !email.match(/^[a-zA-Z0-9.]+@[a-zA-Z.]+\.[a-zA-Z]{2,}$/)'"
            >Esperamos que o usuário entre com um email válido. Tente novamente</x-error-message>
        @enderror
    </div>
    <div class="flex items-center justify-center md:justify-end">
        <x-primary-button class="ms-0 sm:ms-3">
            {{ __('Entrar') }}
        </x-primary-button>
    </div>
</form>

