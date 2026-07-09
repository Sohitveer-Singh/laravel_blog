<script setup lang="ts">
// import Check from '@primeicons/vue/check';
import BlogCard from '@/components/BlogCard.vue';
import BlogLayout from '@/layouts/BlogLayout.vue';

defineOptions({
    layout: BlogLayout,
});

const posts = [
    {
        id: 1,
        title: 'How To Deploy Laravel on Fedora VPS',
        excerpt: 'This is a sample blog post preview...',
        author: 'Sohitveer Singh',
        publishedAt: '2 July 2026',
        tags: ['Featured', 'Linux', 'Laravel', 'PHP'],
        link: '/blog/how-to-deploy-laravel-on-fedora-vps',
    },
    {
        id: 2,
        title: 'Getting Started with Vue 3',
        excerpt: 'Learn the Composition API and Inertia...',
        author: 'Sohitveer Singh',
        publishedAt: '1 July 2026',
        tags: ['Vue', 'Inertia', 'Frontend'],
        link: '/blog/getting-started-with-vue-3',
    },
];
</script>

<template>
    <div class="pt-17.5">
        <div class="container mx-auto mt-5 grid grid-cols-12 gap-4 px-5 py-5">
            <BlogCard
                v-for="post in posts"
                :key="post.id"
                :title="post.title"
                :excerpt="post.excerpt"
                :author="post.author"
                :published-at="post.publishedAt"
                :tags="post.tags"
                :link="post.link"
            />

            <!--       Fill Layout Temporary Start     -->
            <BlogCard
                v-for="post in posts"
                :key="post.id"
                :title="post.title"
                :excerpt="post.excerpt"
                :author="post.author"
                :published-at="post.publishedAt"
                :tags="post.tags"
                :link="post.link"
            />
            <BlogCard
                v-for="post in posts"
                :key="post.id"
                :title="post.title"
                :excerpt="post.excerpt"
                :author="post.author"
                :published-at="post.publishedAt"
                :tags="post.tags"
                :link="post.link"
            />
            <BlogCard
                v-for="post in posts"
                :key="post.id"
                :title="post.title"
                :excerpt="post.excerpt"
                :author="post.author"
                :published-at="post.publishedAt"
                :tags="post.tags"
                :link="post.link"
            />
            <BlogCard
                v-for="post in posts"
                :key="post.id"
                :title="post.title"
                :excerpt="post.excerpt"
                :author="post.author"
                :published-at="post.publishedAt"
                :tags="post.tags"
                :link="post.link"
            />
            <BlogCard
                v-for="post in posts"
                :key="post.id"
                :title="post.title"
                :excerpt="post.excerpt"
                :author="post.author"
                :published-at="post.publishedAt"
                :tags="post.tags"
                :link="post.link"
            />
            <BlogCard
                v-for="post in posts"
                :key="post.id"
                :title="post.title"
                :excerpt="post.excerpt"
                :author="post.author"
                :published-at="post.publishedAt"
                :tags="post.tags"
                :link="post.link"
            />
            <!--       Fill Layout Temporary End    -->
        </div>
    </div>
</template>
