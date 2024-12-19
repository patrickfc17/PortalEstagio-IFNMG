@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-paper text-sm font-medium leading-5 text-paper focus:outline-none focus:border-ink transition duration-150 ease-in-out transition-colors'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-paper hover:text-ink hover:border-ink focus:outline-none focus:text-ink focus:border-ink transition duration-150 ease-in-out transition-colors';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
