<x-layout>
    <x-content>
        <div class="flex flex-col gap-4 font-extrabold">
            <span class="text-6xl md:text-7xl">
                Paweł Płatek.
            </span>
            <span class="text-4xl md:text-6xl text-secondary">
                I build things with PHP.
            </span>
        </div>
        <div class="text-md text-secondary leading-8 italic md:w-3/4">
            I'm a backend developer with over 4 years of experience in building and managing PHP applications using Magento, WordPress, Symfony and Laravel.
        </div>
        <div class="flex flex-col md:flex-row gap-4">
            <x-buttons.link-fill href="{{ route('contact') }}">
                <x-slot:icon>
                    <x-coolicon-mail class="h-4 w-4" />
                </x-slot:icon>
                Contact
            </x-buttons.link-fill>
            <x-buttons.link-outline href="">
                <x-slot:icon>
                    <x-coolicon-download class="h-4 w-4" />
                </x-slot:icon>
                Resume
            </x-buttons.link-outline>
        </div>
    </x-content>
</x-layout>