@props([
    'image',
    'title',
    'price',
])

<div class="flex flex-col items-center cursor-pointer">
    <img src="{{ asset($image) }}" alt="{{ $title }}">
    <span class="text-center text-xl mt-5 break-words font-thin">{{ $title }}</span>
    <span class="font-bold mt-2 mb-4 text-2xl">{{ $price }} ₽</span>
    <a class="px-9 py-2.5 bg-[#C2C2C2] rounded-full font-bold text-white cursor-pointer">В корзину</a>
</div>
