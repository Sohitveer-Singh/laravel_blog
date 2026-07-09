<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { Form } from '@inertiajs/vue3';
import { store } from '@/actions/App/Http/Controllers/Admin/BlogController';
import { dashboard } from '@/routes';
import { index } from '@/routes/blog';
import InputField from '@/components/forms/InputField.vue';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Dashboard',
                href: dashboard(),
            },
            {
                title: 'Blog',
                href: index(),
            },
        ],
    },
});
</script>

<template>
    <Head title="Dashboard" />

    <div
        class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
    >
        <Form
            class="flex flex-col gap-4"
            :action="store()"
            disableWhileProcessing
            resetOnSuccess
            #default="{ errors, processing }"
            className="inert:opacity-50 inert:pointer-events-none"
        >
            <InputField
                name="title"
                label="Title"
                placeholder="Enter title"
                :error="errors.title"
            />

            <!--            <InputField-->
            <!--                name="content"-->
            <!--                label="Content"-->
            <!--                placeholder="Enter content"-->
            <!--                :error="errors.content"-->
            <!--            />-->

            <div class="flex flex-col gap-1">
                <label for="content">Content</label>

                <Textarea
                    class="rounded-md border border-input p-2 px-2.5"
                    id="content"
                    name="content"
                    type="type"
                    rows="20"
                    placeholder="placeholder"
                />

                <div v-if="errors.content" class="text-red-500">
                    {{ errors.content }}
                </div>
            </div>

            <InputField
                name="tags"
                label="Tags"
                placeholder="Enter tags"
                :error="errors.tags"
            />

            <InputField
                name="author"
                label="Author"
                placeholder="Enter author"
                :error="errors.author"
            />
            <div>
                <select name="status" id="status">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
                <div v-if="errors.status">
                    {{ errors.status }}
                </div>
            </div>
            <button type="submit" :disabled="processing">
                {{ processing ? 'Creating...' : 'Create Blog' }}
            </button>
        </Form>
    </div>
</template>
