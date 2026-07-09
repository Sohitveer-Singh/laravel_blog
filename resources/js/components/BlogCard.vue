<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import Badge from 'primevue/badge';
interface Props {
    title: string;
    excerpt: string;
    author: string;
    publishedAt: string;
    tags: string[];
    link: string;
}

defineProps<Props>();
</script>

<template>
    <Link
        :href="link"
        class="col-span-12 flex min-h-[250px] flex-col gap-4 rounded-lg border border-white p-5 md:col-span-6 lg:col-span-4"
    >
        <h1 class="line-clamp-2 min-h-14 text-left text-xl font-bold">
            {{ title }}
        </h1>

        <p class="line-clamp-3 h-full text-left text-sm">
            {{ excerpt }}
        </p>

        <div class="flex max-w-2xs flex-wrap items-center gap-2">
            <Badge v-for="tag in tags.slice(0, 4)" :key="tag" :value="tag" />
        </div>

        <div class="flex justify-between gap-2">
            <span class="text-sm"> By {{ author }} </span>
            <span class="text-sm"> {{ publishedAt }} </span>
        </div>
    </Link>
</template>

<style scoped></style>
