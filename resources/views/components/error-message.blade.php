@props(['error' => ''])

<p
    x-show="{{ $error }}"
    {{ $attributes->merge(['class' => 'text-grade text-sm text-justify']) }}
>
    {{ $slot }}
</p>
