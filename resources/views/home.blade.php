<x-layout>
    <div class="flex flex-col w-full h-full justify-center space-y-14">
        <div class="flex flex-col space-y-4 font-sans font-extrabold">
            <span class="text-6xl md:text-7xl">
                Paweł Płatek.
            </span>
            <span class="text-4xl md:text-6xl text-secondary">
                I build things with PHP.
            </span>
        </div>
        <div class="flex font-sans">
            <span class="text-md md:text-base text-secondary md:w-3/4 leading-8 italic">
                I'm a backend developer with over 4 years of experience in building and managing PHP applications using Magento, WordPress, Symfony and Laravel.
            </span>
        </div>
        <div class="flex flex-col md:flex-row gap-4 font-sans">
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
    </div>
</x-layout>