@props(['title', 'value'])

@php
    $width = 'w-' . $value . '/12';
@endphp

<div class="flex relative justify-end">
    <span class="absolute top-[6px] left-0 h-[19px] flex w-10/12 bg-darker"></span>
    <span class="absolute top-[6px] left-0 h-[19px] flex {{ $width }} bg-accent"></span>
    <span class="flex w-2/12 font-extrabold text-secondary text-2xl pl-2">
        {{ $title }}
    </span>
</div>