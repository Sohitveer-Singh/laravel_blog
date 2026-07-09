<script setup lang="ts"></script>

<template>
    <header
        class="fixed h-17.5 w-full bg-white text-black dark:bg-zinc-900 dark:text-white"
    >
        <div
            class="container mx-auto flex h-full items-center justify-between px-5"
        >
            <div>
                <nav class="flex items-center gap-4">
                    <li class="list-none">
                        <a href="#">Home</a>
                    </li>
                    <li class="list-none">
                        <a href="#">Featured</a>
                    </li>
                </nav>
            </div>

            <div class="flex items-center gap-2">
                <input
                    type="text"
                    placeholder="Search"
                    class="rounded-md border border-gray-300 px-2 py-1"
                />
            </div>
        </div>
    </header>
</template>

<style scoped></style>
