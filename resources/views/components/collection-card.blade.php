@props([
    'image',
    'title'
])

<div class="flex flex-col items-center cursor-pointer">
    <img src="{{ asset($image) }}" alt="{{ $title }}">
    <span class="mt-6 text-2xl">
        {{ $title }}
    </span>
</div>
