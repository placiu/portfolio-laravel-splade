@props(['title', 'progress'])

@php
    switch($progress) {
        case 1:
            $progressClass = 'w-1/12';
            break;
        case 2:
            $progressClass = 'w-2/12';
            break;
        case 3:
            $progressClass = 'w-3/12';
            break;
        case 4:
            $progressClass = 'w-4/12';
            break;
        case 5:
            $progressClass = 'w-5/12';
            break;
        case 6:
            $progressClass = 'w-6/12';
            break;
        case 7:
            $progressClass = 'w-7/12';
            break;
        case 8:
            $progressClass = 'w-8/12';
            break;
        case 9:
            $progressClass = 'w-9/12';
            break;
        case 10:
            $progressClass = 'w-10/12';
            break;
        case 11:
            $progressClass = 'w-11/12';
            break;
        case 12:
            $progressClass = 'w-12/12';
            break;
        default:
            $progressClass = '';
    }
@endphp

<div class="flex relative justify-end">
    <span class="absolute top-[6px] left-0 h-[19px] flex w-10/12 bg-darker"></span>
    <span class="absolute top-[6px] left-0 h-[19px] flex {{ $progressClass }} bg-accent"></span>
    <span class="flex w-2/12 font-extrabold text-secondary text-2xl pl-2">
        {{ $title }}
    </span>
</div>