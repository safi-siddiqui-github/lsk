<script setup lang="ts">
    import { cn } from '@/lib/utils';
    import { UserModelType } from '@/types/models';
    import { usePage } from '@inertiajs/vue3';
    import ToggleAppearance from '@/vue/default/components/ToggleAppearance.vue';

    const { auth } = usePage<{ auth: { user: UserModelType } }>().props;
</script>

<template>
    <header class="flex items-center justify-between py-2 px-4 border-b">
        <h2 class="text font-medium text-lg">
            <a :href="route('home')">Safi Siddiqui</a>
        </h2>

        <div class="flex gap-2 items-center">
            <ToggleAppearance />

            <div
                :class="
                    cn('', {
                        hidden: auth?.user,
                        flex: !auth?.user,
                    })
                "
            >
                Login
            </div>

            <div
                :class="
                    cn('', {
                        hidden: !auth?.user,
                        flex: auth?.user,
                    })
                "
            >
                logout
            </div>
        </div>
    </header>
</template>
