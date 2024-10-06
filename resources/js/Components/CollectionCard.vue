<script setup lang="ts">
    defineProps<{
        image: string;
        title: string;
    }>();
</script>

<template>
    <div class="flex flex-col items-center cursor-pointer">
        <img :src="image" :alt="title" />
        <span class="mt-6 text-2xl">
            {{ title }}
        </span>
    </div>
</template>

<style scoped></style>
