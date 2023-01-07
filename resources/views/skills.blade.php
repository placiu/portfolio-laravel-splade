@php
    $skills = [
        'PHP' => 'w-8/12',
        'MySQL' => 'w-6/12',
        'HTML' => 'w-8/12',
        'CSS' => 'w-6/12',
        'JS' => 'w-4/12',
        'GIT' => 'w-7/12',
    ];

    $softwares = [
        ['name' => 'Laravel', 'url' => 'https://laravel.com/'],
        ['name' => 'Symfony', 'url' => 'https://symfony.com/'],
        ['name' => 'WordPress', 'url' => 'https://wordpress.com/'],
        ['name' => 'Magento', 'url' => 'https://magento.com/'],
        ['name' => 'Livewire', 'url' => ''],
        ['name' => 'Vue', 'url' => 'http://vuejs.org/'],
        ['name' => 'AlpineJS', 'url' => ''],
        ['name' => 'InertiaJS', 'url' => ''],
        ['name' => 'Splade', 'url' => ''],
        ['name' => 'Tailwind CSS', 'url' => ''],
        ['name' => 'Github', 'url' => ''],
        ['name' => 'Gitlab', 'url' => ''],
        ['name' => 'Trello', 'url' => ''],
        ['name' => 'Jira', 'url' => ''],
        ['name' => 'Asana', 'url' => ''],
        ['name' => 'Buddy.works', 'url' => ''],
        ['name' => 'macOS', 'url' => ''],
        ['name' => 'Ubuntu', 'url' => ''],
    ];
@endphp
<x-layout>
    <div class="flex flex-col w-full h-full justify-center space-y-10">
        <div class="font-sans font-extrabold">
            <span class="text-4xl text-primary">
                My
            </span>
            <span class="text-4xl text-accent">
                Stack. 
            </span>
        </div>
        <div class="flex flex-col space-y-2 font-sans text-secondary">
            @foreach ($skills as $name => $progress)
                <div class="flex relative justify-end w-3/4">
                    <span class="absolute top-[6px] left-0 h-[19px] flex w-11/12 bg-darker"></span>
                    <span class="absolute top-[6px] left-0 h-[19px] flex {{ $progress }} bg-accent"></span>
                    <span class="flex w-1/12 font-extrabold text-2xl pl-2">{{ $name }}</span>
                </div>
            @endforeach
        </div>
        <div class="font-extrabold">
            <span class="text-4xl text-primary">
                Software &
            </span>
            <span class="text-4xl text-accent">
                Frameworks. 
            </span>
        </div>
        <div class="flex gap-2 md:gap-4 font-sans text-accent flex-wrap">
            @foreach ($softwares as $software)
                <a href="{{ $software['url'] }}" class="flex w-32 justify-center md:w-auto md:px-4 py-3 bg-dark border-2 border-accent text-accent rounded-md hover:bg-accent hover:text-dark">
                    <span class="font-bold uppercase text-sm">
                        {{ $software['name']}}
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>