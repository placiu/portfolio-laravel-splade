@props(['active'])

@php
$activeClasses = ($active ?? false)
    ? 'bg-accent px-2'
    : 'hover:bg-accent px-2';

@endphp


<Link {{ $attributes->merge(['class' => 'flex justify-center space-x-2 py-2 text-base font-mono text-white']) }}>
    <span class="hidden md:visible text-accent">{</span>
    <span class="text-2xl md:text-base {{ $activeClasses }}">
        {{ $slot }}
    </span>
    <span class="hidden md:visible text-accent">}</span>
</Link>