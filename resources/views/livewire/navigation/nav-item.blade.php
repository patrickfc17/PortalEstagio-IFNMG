<li>
    <a href="{{ $link }}" class="flex items-center p-2 rounded-lg cursor-pointer hover:bg-paper active:brightness-125 text-paper group">
        @include($icon, ['class' => 'hover:h-7 hover:w-7'])

        <p class="text-xl transition duration-75 ms-3 lg:text-lg 2xl:text-xl group-hover:text-ink">{{ $name }}</p>
    </a>
</li>
