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
            <a href="" class="flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8l176 0 0 176c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z"/>
                </svg>
                Москва и область</a>
            <nav class="flex gap-8">
                <a href="">Доставка</a>
                <a href="">🎁Подарочный сертификат</a>
                <a href="">Обмен и возврат</a>
                <a href="">Контакты</a>
            </nav>
        </div>
        <a href="">Войти</a>
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

</body>
</html>
