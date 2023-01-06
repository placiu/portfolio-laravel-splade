<div class="min-h-screen">
    <x-navigation />

    <!-- Page Heading -->
    @if(isset($header))
        <header class="">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="">
                    {{ $header }}
                </h2>
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
