<x-splade-data default="{ open: false }">
    <nav class="container relative flex flex-col grow mx-auto px-4 md:px-8 lg:px-12">
        <!-- Primary Navigation Menu -->
        <div class="flex w-full justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <x-logo class="block h-9 w-auto" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-navigation.nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-navigation.nav-link>

                <x-navigation.nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-navigation.nav-link>

                <x-navigation.nav-link href="{{ route('skills') }}" :active="request()->routeIs('skills')">
                    {{ __('Skills') }}
                </x-navigation.nav-link>

                <x-navigation.nav-link href="{{ route('sandbox') }}" :active="request()->routeIs('sandbox')">
                    {{ __('Sandbox') }}
                </x-navigation.nav-link>

                <x-navigation.nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-navigation.nav-link>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="data.open = ! data.open" class="inline-flex items-center justify-center p-2 rounded-md text-primary hover:text-primary hover:bg-darker focus:outline-none focus:bg-darker focus:primary transition">
                    <x-icons.hamburger v-bind:class="{'hidden': data.open, 'inline-flex w-6 h-6': ! data.open }" />
                    <x-icons.close v-bind:class="{'hidden': ! data.open, 'inline-flex w-6 h-6': data.open }" />
                </button>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div v-bind:class="{'block': data.open, 'hidden': ! data.open }" class="sm:hidden absolute top-16 right-0 w-full h-full z-10">
            <div class="flex flex-col justify-center pt-2 pb-10 space-y-1 bg-dark border-b-4 border-accent">
                <x-navigation.nav-link-responsive href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-navigation.nav-link-responsive>

                <x-navigation.nav-link-responsive href="{{ route('about') }}" :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-navigation.nav-link-responsive>

                <x-navigation.nav-link-responsive href="{{ route('skills') }}" :active="request()->routeIs('skills')">
                    {{ __('Skills') }}
                </x-navigation.nav-link-responsive>

                <x-navigation.nav-link-responsive href="{{ route('sandbox') }}" :active="request()->routeIs('sandbox')">
                    {{ __('Sandbox') }}
                </x-navigation.nav-link-responsive>

                <x-navigation.nav-link-responsive href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-navigation.nav-link-responsive>
            </div>
        </div>
    </nav>
</x-splade-data>
