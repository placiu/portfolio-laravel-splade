<div class="flex flex-col justify-between min-h-screen w-full">
    <x-navigation />

    <main class="container flex grow mx-auto py-12 px-8 md:px-24 lg:px-48">
        {{ $slot }}
    </main>

    <x-footer />
</div>
