@props([ 'disabled' => false ])

<input
    @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-leaf focus:border-ink focus:ring-indigo-500 rounded-md shadow-sm']) }}
/>
