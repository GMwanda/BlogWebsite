@props(['author', 'size'])

@php

    $imageSize = match ($size ?? null) {
        'sm' => 'w-7 h-7',
        'md' => 'w-10 h-10',
        'md' => 'w-13 h-13',
        default => 'w-10 h-10',
    };

@endphp

<img class="{{ $imageSize }} rounded-full mr-3" src="{{ $author->profile_photo_url }}" alt="{{ $author->name }}">
<span class="mr-1 text-sm">{{ $author->name }} </span>
