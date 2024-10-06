<script setup lang="ts"></script>

<template>
    <div class="flex flex-wrap px-28 my-10">
        <div class="w-1/2">
            <img src="/public/week_card.png" alt="weekly product" />
        </div>
        <div class="w-1/2">
            <div class="flex flex-col">
                <p class="text-xl mb-2"
                    >Коллекция <span class="text-green-600 text-xl">СБЕР 1841</span></p
                >
                <h3 class="font-bold text-2xl mb-5">Ежедневник Spark 1841</h3>
                <p class="text-xl mb-3">Стильный классический ежедневник из коллекции «1841»!</p>
                <p class="text-xl"
                    >Недатированный классический ежедневник с гибкой матовой обложкой имеет
                    максимально минималистичный дизайн. Покрытие ежедневника - Soft Touch - матовое,
                    немного припудренное, не блестит. Обложка, не образующая заломов, очень приятна
                    на ощупь. Глубокий чёрный цвет с небольшой белой вставкой – идеальное решение
                    для тех, кто любит минимализм.</p
                >
                <div class="flex flex-col mt-3">
                    <span class="text-xl">Цвет</span>
                    <div
                        class="bg-black w-[3.75rem] py-3 rounded-xl flex items-center justify-center mt-3"
                    >
                        <img src="/public/checkmark.svg" alt="checkmark" />
                    </div>
                </div>
                <div class="flex items-center justify-between mt-7">
                    <div class="gap-3 flex items-center">
                        <img src="/public/spasibo.svg" alt="spasibo" />
                        <span class="text-xl font-medium">Начислим 0 бонусов</span>
                    </div>
                    <span class="font-bold text-3xl">900 ₽</span>
                </div>
                <div class="flex justify-between gap-4 mt-8">
                    <div
                        class="flex justify-between items-center py-2 px-6 gap-4 bg-zinc-200 rounded w-1/3"
                    >
                        <div
                            class="text-green-600 text-3xl items-center justify-center text-center cursor-pointer"
                            >-</div
                        >
                        <div class="text-xl">1 шт.</div>
                        <div class="text-green-600 text-3xl items-center cursor-pointer">+</div>
                    </div>
                    <button
                        type="button"
                        class="rounded text-white bg-zinc-400 py-3.5 text-xl font-semibold w-2/3"
                    >
                        Купить
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
