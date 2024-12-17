<section class="flex flex-col items-center justify-end w-4/5 mb-12 rounded-lg shadow-lg h-3/6 bg-leaf">
    <section class="p-4 text-paper">
        <h1 class="text-3xl font-bold tracking-wide text-center @error('title') text-grade @enderror">{{ $title }}</h1>

        @isset($subtitle)
            <h2 class="text-2xl font-semibold tracking-wide text-center">{{ $subtitle }}</h2>
        @endisset
    </section>
    {{ $slot }}
</section>
