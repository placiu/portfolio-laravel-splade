<div class="flex flex-col justify-between h-screen px-6">
    <x-navigation />

    <main class="h-full mb-auto">
        {{ $slot }}
    </main>

    <x-footer />
</div>
