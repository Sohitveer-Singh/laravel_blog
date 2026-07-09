<script setup lang="ts">
import BlogShell from '@/components/BlogShell.vue';
import { Toaster } from '@/components/ui/sonner';
</script>

<template>
    <BlogShell>
        <slot />
        <Toaster />
    </BlogShell>
</template>

<style scoped></style>
