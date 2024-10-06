<script setup lang="ts">
    defineProps<{
        icon: string;
        title: string;
    }>();
</script>

<template>
    <div class="flex gap-3 items-center justify-center border-b pb-4 mt-11">
        <img :src="icon" :alt="title" />
        <h2 class="font-bold text-3xl">
            {{ title }}
        </h2>
    </div>
</template>

<style scoped></style>
