<script setup lang="ts">
    import {
        Banner,
        CollectionCard,
        EntranceCard,
        Footer,
        SectionHeader,
        WeeklyProduct,
    } from '../Components';
</script>

<template>
    <div class="bg-[#F8F9FA] px-12">
        <div class="flex justify-between py-2">
            <div class="w-1/2 flex justify-between">
                <a href="" class="flex items-center hover:underline">
                    <svg
                        class="w-4 h-4 mr-2"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                    >
                        <path
                            d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8l176 0 0 176c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z"
                        />
                    </svg>
                    Москва и область</a
                >
                <nav class="flex gap-8">
                    <a href="" class="hover:underline">Доставка</a>
                    <a href="" class="flex gap-2 hover:underline">
                        <img src="/public/certificate.svg" alt="" />
                        <span>Подарочный сертификат</span>
                    </a>
                    <a href="" class="hover:underline">Обмен и возврат</a>
                    <a href="" class="hover:underline">Контакты</a>
                </nav>
            </div>
            <a href="" class="hover:underline">Войти</a>
        </div>
    </div>

    <div class="px-12">
        <div class="flex justify-between py-4">
            <a href="">
                <img src="/public/sbershop.svg" alt="logo" />
            </a>
            <div class="flex items-center gap-6">
                <a href="">
                    <img src="/public/magnifier.png" alt="magnifier" />
                </a>
                <a href="">
                    <img src="/public/cart.png" alt="cart" />
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-r from-[#E9E7E4] to-[#FAFBF5] px-12 pt-4">
        <div class="flex justify-between">
            <div class="flex flex-col justify-between ml-10">
                <nav class="flex flex-col font-medium gap-2">
                    <div class="flex">
                        <img src="/public/point.png" class="mr-2 absolute left-14" alt="point" />
                        <a href="" class="hover:underline flex items-center text-[#642D90]"
                            >Коллекции</a
                        >
                    </div>
                    <div class="flex">
                        <img
                            src="/public/point.png"
                            class="mr-2 absolute left-14 hidden"
                            alt="point"
                        />
                        <a href="" class="hover:underline flex items-center">Гаджеты</a>
                    </div>
                    <div class="flex">
                        <img
                            src="/public/point.png"
                            class="mr-2 absolute left-14 hidden"
                            alt="point"
                        />
                        <a href="" class="hover:underline flex items-center">Одежда</a>
                    </div>
                    <div class="flex">
                        <img
                            src="/public/point.png"
                            class="mr-2 absolute left-14 hidden"
                            alt="point"
                        />
                        <a href="" class="hover:underline flex items-center">Аксессуары</a>
                    </div>
                    <div class="flex">
                        <img
                            src="/public/point.png"
                            class="mr-2 absolute left-14 hidden"
                            alt="point"
                        />
                        <a href="" class="hover:underline flex items-center">Новое</a>
                    </div>
                    <div class="flex">
                        <img
                            src="/public/point.png"
                            class="mr-2 absolute left-14 hidden"
                            alt="point"
                        />
                        <a href="" class="hover:underline flex items-center text-red-500">% Sale</a>
                    </div>
                </nav>
                <div class="mb-14">
                    <h2 class="flex flex-col uppercase font-bold text-8xl"
                        ><span class="gradient-text">Яркая</span
                        ><span class="text-[#7EABFF]">новинка</span></h2
                    >
                    <h4 class="text-lg text-[#7EABFF] tracking-wider mt-8"
                        >Спорт-шик в новом формате:<br />
                        коллекция актуальных костюмов от Сбер</h4
                    >
                    <button
                        class="rounded-full text-white bg-gradient-to-r from-[#7EABFF] to-[#A3EE00] my-14 py-3 px-16"
                    >
                        Купить
                    </button>
                    <div class="flex gap-4">
                        <div class="bg-[#22A038] rounded-full py-1 px-5"></div>
                        <div class="bg-white rounded-full p-1"></div>
                        <div class="bg-white rounded-full p-1"></div>
                        <div class="bg-white rounded-full p-1"></div>
                    </div>
                </div>
            </div>
            <img src="/public/slider.png" class="w-2/3" alt="slide" />
        </div>
    </div>

    <div class="container max-w-7xl mx-auto mt-12">
        <div class="flex justify-between gap-8">
            <CollectionCard title="Коллекция 180" image="collection_180.png" />
            <CollectionCard title="Коллекция СБЕРкот" image="collection_sbercat.png" />
            <CollectionCard title="Коллекция Градиент" image="collection_gradient.png" />
        </div>

        <SectionHeader icon="star.svg" title="Новые поступления" />

        <div class="grid grid-cols-3 gap-5 mt-7">
            <EntranceCard
                image="rozetka.png"
                title="Умная розетка модель SBDV-00123"
                price="1290"
            />
            <EntranceCard image="smart_button.png" title="Умная кнопка" price="1590" />
            <EntranceCard image="smart_open.png" title="Умный датчик открытия" price="1590" />
            <EntranceCard
                image="rozetka.png"
                title="Умная розетка модель SBDV-00123"
                price="1290"
            />
            <EntranceCard image="smart_button.png" title="Умная кнопка" price="1590" />
            <EntranceCard image="smart_open.png" title="Умный датчик открытия" price="1590" />
        </div>

        <div class="mt-10">
            <Banner image="banner.png" />
        </div>

        <SectionHeader icon="lightning.svg" title="Товар недели" />

        <WeeklyProduct />
    </div>

    <div class="mb-10 bg-zinc-200 h-[1px] container mx-auto max-w-7xl"></div>

    <Footer />
</template>

<style scoped></style>
