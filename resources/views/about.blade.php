<x-layout>
    <div class="flex flex-col w-full h-full justify-center space-y-14">
        <x-header text="About Me"/>
        <div class="font-sans">
            <div class="flex flex-col space-y-6 text-secondary leading-8 md:w-3/4 italic text-sm md:text-base">
                <p>My name is Paweł and my passion is web development. I love working and discovering new tools and technologies. I’m 38, living near Wrocław, Poland.</p>
                <p>My interest in webdev started back in primary school when I published my first website. It was an URL aggregator for recommended websites. Google wasn’t so popular back then ;)</p>
                <p>Over the years I treated this as my hobby and a side gig, helping small, local business move to internet. It was 2016 when I decided I want to make it my full time job. I was lucky enough to get a chance at <a href="https://codingmice.com/" class="text-accent" target="_blank">Coding Mice</a> where I’m working for over 4 years now. </p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-4 font-sans">
            <a href="{{ route('contact') }}" class="flex space-x-2 w-40 justify-center py-4 bg-dark border border-accent text-accent rounded">
                <x-coolicon-mail class="h-5 w-5 text-accent" stroke="currentColor" fill="none" viewBox="0 0 24 24" />
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