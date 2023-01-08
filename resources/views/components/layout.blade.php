<div class="flex flex-col justify-between min-h-screen w-full">
    <x-navigation.navigation />

    <main class="container flex grow mx-auto px-8 md:px-24 lg:px-48 py-12">
        {{ $slot }}
    </main>

    <x-footer />
</div>
