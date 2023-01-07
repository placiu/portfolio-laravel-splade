@props(['text'])

@php
    $textParts = explode(' ', $text);
@endphp

<div class="font-extrabold text-4xl">
    <span>
        {{ $textParts[0] }}
    </span>
    <span class="text-accent">
        @for ($i = 1; $i < count($textParts); $i++)
            <span>{{ $textParts[$i] }}</span>
            @if($i + 1 !== count($textParts))
                <span>&nbsp;</span>
            @endif
        @endfor
        <span>.</span>
    </span>
</div>