<script setup lang="ts">
    import Header from '@/vue/default/components/Header.vue';
</script>

<template>
    <div class="text-sm dark:bg-black dark:text-white">
        <Header />
        <slot />
    </div>
</template>
