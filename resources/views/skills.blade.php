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
    <x-content>
        <x-header text="My Stack"/>
        <div class="flex flex-col space-y-2 font-sans text-secondary">
            @foreach ($skills as $name => $progress)
                <div class="flex relative justify-end w-3/4">
                    <span class="absolute top-[6px] left-0 h-[19px] flex w-11/12 bg-darker"></span>
                    <span class="absolute top-[6px] left-0 h-[19px] flex {{ $progress }} bg-accent"></span>
                    <span class="flex w-1/12 font-extrabold text-2xl pl-2">{{ $name }}</span>
                </div>
            @endforeach
        </div>
        <x-header text="Software & Frameworks"/>
        <div class="flex gap-2 md:gap-4 font-sans text-accent flex-wrap">
            @foreach ($softwares as $software)
                <x-buttons.link-outline href="{{ $software['url'] }}">
                    {{ $software['name']}}
                </x-buttons.link-outline>
            @endforeach
        </div>
    </x-content>
</x-layout>