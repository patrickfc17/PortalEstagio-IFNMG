@props([ 'disabled' => false ])

<input
    @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-radiation focus:border-purgatory focus:ring-indigo-500 rounded-md shadow-sm']) }}
/>
