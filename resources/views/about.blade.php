<x-layout>
    <x-content>
        <x-header text="About Me"/>
        <div class="flex flex-col space-y-6 md:w-10/12">
            <x-paragraph>My name is Paweł and my passion is web development. I love working and discovering new tools and technologies. I'm 38, living near Wrocław, Poland.</x-paragraph>
            <x-paragraph>My interest in webdev started back in primary school when I published my first website. It was an URL aggregator for recommended websites. Google wasn't so popular back then ;)</x-paragraph>
            <x-paragraph>Over the years I treated this as my hobby and a side gig, helping small, local business move to internet. It was 2016 when I decided I want to make it my full time job. I was lucky enough to get a chance at <x-link href="https://codingmice.com/" target="_blank">Coding Mice</x-link> where I'm working for over 4 years now. </x-paragraph>
        </div>
        <div class="flex flex-col md:flex-row gap-4 w-10/12">
            <x-buttons.link-outline href="{{ route('contact') }}">
                <x-slot:icon>
                    <x-icons.mail class="h-4 w-4" />
                </x-slot:icon>
                Contact
            </x-buttons.link-outline>
            <x-buttons.link-outline href="">
                <x-slot:icon>
                    <x-icons.download class="h-4 w-4" />
                </x-slot:icon>
                Resume
            </x-buttons.link-outline>
        </div>
    </x-content>
</x-layout>