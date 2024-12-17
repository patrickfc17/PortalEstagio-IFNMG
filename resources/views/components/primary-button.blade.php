<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2 bg-radiation border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purgatory focus:bg-gray-700 active:bg-purgatory focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
