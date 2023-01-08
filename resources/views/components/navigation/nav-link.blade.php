@props(['active'])

@php
$activeClasses = ($active ?? false)
    ? 'bg-accent px-2'
    : 'hover:bg-accent px-2';
@endphp

<Link {{ $attributes->merge(['class' => 'inline-flex space-x-2 items-center px-1 pt-1 text-xs font-mono leading-5 text-white']) }}>
    <span class="text-accent">{</span>
    <span {{ $attributes->merge(['class' => $activeClasses]) }}>
        {{ $slot }}
    </span>
    <span class="text-accent">}</span>
</Link>
