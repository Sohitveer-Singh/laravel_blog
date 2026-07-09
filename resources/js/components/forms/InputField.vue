<script setup lang="ts">
interface Props {
    name: string;
    label: string;
    type?: string;
    placeholder?: string;
    error?: string;
}

withDefaults(defineProps<Props>(), {
    type: 'text',
    placeholder: '',
});
</script>

<template>
    <div class="flex flex-col gap-1">
        <label :for="name">{{ label }}</label>

        <input
            class="rounded-md border border-input p-2 px-2.5"
            :id="name"
            :name="name"
            :type="type"
            :placeholder="placeholder"
        />

        <div v-if="error">
            {{ error }}
        </div>
    </div>
</template>
