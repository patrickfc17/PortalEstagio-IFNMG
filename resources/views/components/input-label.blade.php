@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-purgatory text-lg 2xl:text-xl']) }}>
    {{ $value ?? $slot }}
</label>
