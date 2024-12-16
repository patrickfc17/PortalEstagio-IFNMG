<aside id="default-sidebar" class="col-start-1 col-end-3 row-start-1 transition-transform -translate-x-full xl:col-end-2 row-span-12 lg:translate-x-0" aria-label="Sidebar">
    <nav class="flex flex-col h-full gap-8 px-3 py-4 overflow-y-auto bg-leaf">
        <h1 class="mt-4 text-3xl font-bold text-center text-paper">{{ config('app.name') }}</h1>
        <ul class="space-y-2 font-medium">
            @foreach ($items as $name => $icon)
                <livewire:navigation.nav-item name="{{ $name }}" icon="{{ $icon }}" />
            @endforeach
        </ul>
    </nav>
</aside>
