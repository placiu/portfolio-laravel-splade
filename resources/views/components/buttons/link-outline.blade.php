<a {{ $attributes }} class="flex w-32 space-x-2 justify-center items-center md:w-auto md:px-4 py-3 bg-dark border-2 border-accent text-accent rounded-md hover:outline hover:outline-offset-2 hover:outline-4 hover:outline-darker">
    @if(isset($icon))
        {{ $icon }}
    @endif
    <span class="font-bold uppercase text-sm">
        {{ $slot }}
    </span>
</a>