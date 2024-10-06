<script setup lang="ts">
    defineProps<{
        image: string;
    }>();
</script>

<template>
    <a href="">
        <img :src="image" alt="banner" />
    </a>
</template>

<style scoped></style>
