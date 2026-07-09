<script setup lang="ts">
import BlogFooter from '@/components/BlogFooter.vue';
import BlogHeader from '@/components/BlogHeader.vue';
</script>

<template>
    <div class="flex min-h-screen w-full flex-col">
        <BlogHeader />
        <slot />
        <BlogFooter />
    </div>
</template>

<style scoped></style>
