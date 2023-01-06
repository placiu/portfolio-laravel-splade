<x-splade-data default="{ open: false }">
    <nav class="">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between h-16">
                <div class="flex w-full justify-between">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-logo class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>

                        <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                            {{ __('About Me') }}
                        </x-nav-link>

                        <x-nav-link href="{{ route('skills') }}" :active="request()->routeIs('skills')">
                            {{ __('Skills') }}
                        </x-nav-link>

                        <x-nav-link href="{{ route('sandbox') }}" :active="request()->routeIs('sandbox')">
                            {{ __('Sandbox') }}
                        </x-nav-link>

                        <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                            {{ __('Contact') }}
                        </x-nav-link>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="data.open = ! data.open" class="inline-flex items-center justify-center p-2 rounded-md text-primary hover:text-primary hover:bg-darker focus:outline-none focus:bg-darker focus:primary transition">
                        <x-coolicon-hamburger v-bind:class="{'hidden': data.open, 'inline-flex': ! data.open }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" />
                        <x-coolicon-close-big v-bind:class="{'hidden': ! data.open, 'inline-flex': data.open }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" />
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div v-bind:class="{'block': data.open, 'hidden': ! data.open }" class="sm:hidden">
            <div class="flex flex-col justify-center pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                    {{ __('About Me') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('skills') }}" :active="request()->routeIs('skills')">
                    {{ __('Skills') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('sandbox') }}" :active="request()->routeIs('sandbox')">
                    {{ __('Sandbox') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </nav>
</x-splade-data>
