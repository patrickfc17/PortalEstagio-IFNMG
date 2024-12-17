@props(['error' => ''])

<p
    x-show="{{ $error }}"
    {{ $attributes->merge(['class' => 'text-hellfire text-sm text-justify']) }}
>
    {{ $slot }}
</p>
