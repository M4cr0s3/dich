@props([
    'icon',
    'title'
])

<div class="flex gap-3 items-center justify-center border-b pb-4 mt-11">
    <img src="{{ asset($icon) }}" alt="{{ $icon }}">
    <h2 class="font-bold text-3xl">{{ $title }}</h2>
</div>
