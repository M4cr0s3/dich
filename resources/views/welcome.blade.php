<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>04-10</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="bg-[#F8F9FA] px-12">
    <div class="flex justify-between py-2">
        <div class="w-1/2 flex justify-between">
            <a href="" class="flex items-center hover:underline">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8l176 0 0 176c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z"/>
                </svg>
                Москва и область</a>
            <nav class="flex gap-8">
                <a href="" class="hover:underline">Доставка</a>
                <a href="" class="hover:underline">🎁Подарочный сертификат</a>
                <a href="" class="hover:underline">Обмен и возврат</a>
                <a href="" class="hover:underline">Контакты</a>
            </nav>
        </div>
        <a href="" class="hover:underline">Войти</a>
    </div>
</div>

<div class="px-12">
    <div class="flex justify-between py-4">
        <img src="{{asset("sbershop.png")}}" alt="logo">
        <div class="flex items-center gap-6">
            <a href="">
                <img src="{{asset("loopa.png")}}" alt="Лупа">
            </a>
            <a href="">
                <img src="{{asset("cart.png")}}" alt="Корзина">
            </a>
        </div>
    </div>
</div>

<div class="bg-gradient-to-r from-[#E9E7E4] to-[#FAFBF5] px-12 pt-4">
    <div class="flex justify-between">
        <div class="flex flex-col justify-between">
            <nav class="flex flex-col font-medium gap-2">
                <a href="" class="hover:underline flex items-center text-[#642D90]">
                    <img src="{{asset("point.png")}}" class="mr-2" alt="point">
                    Коллекции</a>
                <a href="" class="hover:underline flex items-center">
                    <img src="{{asset("point.png")}}" class="opacity-0 mr-2" alt="point">
                    Гаджеты</a>
                <a href="" class="hover:underline flex items-center">
                    <img src="{{asset("point.png")}}" class="opacity-0 mr-2" alt="point">
                    Одежда</a>
                <a href="" class="hover:underline flex items-center">
                    <img src="{{asset("point.png")}}" class="opacity-0 mr-2" alt="point">
                    Аксессуары</a>
                <a href="" class="hover:underline flex items-center">
                    <img src="{{asset("point.png")}}" class="opacity-0 mr-2" alt="point">
                    Новое</a>
                <a href="" class="hover:underline flex items-center text-red-500">
                    <img src="{{asset("point.png")}}" class="opacity-0 mr-2" alt="point">
                    %
                    Sale</a>
            </nav>
            <div class="mb-14">
                <h2 class="flex flex-col uppercase font-bold text-8xl"><span class="gradient-text">Яркая</span><span class="text-[#7EABFF]">новинка</span></h2>
                <h4 class="text-lg text-[#7EABFF] tracking-wider mt-8">Спорт-шик в новом формате:<br>
                    коллекция актуальных костюмов от Сбер</h4>
                <button class="rounded-full text-white bg-gradient-to-r from-[#7EABFF] to-[#A3EE00] my-14 py-3 px-16">Купить</button>
                <div class="flex gap-4">
                    <div class="bg-[#22A038] rounded-full py-1 px-5"></div>
                    <div class="bg-white rounded-full p-1"></div>
                    <div class="bg-white rounded-full p-1"></div>
                    <div class="bg-white rounded-full p-1"></div>
                </div>
            </div>
        </div>
        <img src="{{asset("slider.png")}}" class="h-full w-full" alt="slide">
    </div>
</div>

</body>
</html>
