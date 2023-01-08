@php
    $skills = [
        'PHP' => 8,
        'MySQL' => 6,
        'HTML' => 8,
        'CSS' => 6,
        'JS' => 4,
        'GIT' => 7,
    ];

    $softwares = [
        ['name' => 'Laravel', 'url' => 'https://laravel.com/'],
        ['name' => 'Symfony', 'url' => 'https://symfony.com/'],
        ['name' => 'WordPress', 'url' => 'https://wordpress.com/'],
        ['name' => 'Magento', 'url' => 'https://magento.com/'],
        ['name' => 'Livewire', 'url' => 'https://laravel-livewire.com/'],
        ['name' => 'Vue', 'url' => 'http://vuejs.org/'],
        ['name' => 'AlpineJS', 'url' => 'https://alpinejs.dev/'],
        ['name' => 'InertiaJS', 'url' => 'https://inertiajs.com/'],
        ['name' => 'Splade', 'url' => 'https://splade.dev/'],
        ['name' => 'Tailwind CSS', 'url' => 'https://tailwindcss.com/'],
        ['name' => 'Buddy.works', 'url' => 'https://buddy.works/'],
        ['name' => 'macOS', 'url' => 'https://www.apple.com/pl/macos/'],
        ['name' => 'Ubuntu', 'url' => 'https://ubuntu.com/'],
    ];
@endphp
<x-layout>
    <x-content>
        <x-header text="My Stack" />
        <div class="flex flex-col space-y-2 w-10/12">
            @foreach ($skills as $name => $progress)
                <x-progress-bar title="{{ $name }}" value="{{ $progress }}" />
            @endforeach
        </div>
        <x-header text="Software & Frameworks" />
        <div class="flex flex-wrap gap-2 md:gap-4 w-11/12">
            @foreach ($softwares as $software)
                <x-buttons.link-outline href="{{ $software['url'] }}" target="_blank">
                    {{ $software['name']}}
                </x-buttons.link-outline>
            @endforeach
        </div>
    </x-content>
</x-layout>