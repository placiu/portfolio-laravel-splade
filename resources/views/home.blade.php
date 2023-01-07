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
            <a href="{{ route('contact') }}" class="flex space-x-2 w-40 justify-center py-4 bg-accent text-dark rounded">
                <x-coolicon-mail class="h-5 w-5 text-dark" stroke="currentColor" fill="none" viewBox="0 0 24 24" />
                <span class="font-bold uppercase text-sm">
                    Contact
                </span>
            </a>
            <a href="" class="flex space-x-2 w-40 justify-center py-4 bg-dark border border-accent text-accent rounded">
                <x-coolicon-download class="h-5 w-5 text-accent" stroke="currentColor" fill="none" viewBox="0 0 24 24" />
                <span class="font-bold uppercase text-sm">
                    Resume
                </span>
            </a>
        </div>
    </x-content>
</x-layout>