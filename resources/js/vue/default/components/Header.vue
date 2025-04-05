<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';

const { auth } = usePage<{ auth: { user: UserModelType } }>().props;

</script>

<template>

<header className='flex items-center justify-between py-2 px-4 border-b'>
    <h2 className="text font-medium text-lg">
        <a :href="route('home')">Safi Siddiqui</a>
    </h2>

    <div className="flex gap-2 items-center">
        <ToggleAppearance />

        <div
            className={cn('', {
                hidden: auth?.user,
                flex: !auth?.user,
            })}
        >
            Login
        </div>

        <div
            className={cn('', {
                hidden: !auth?.user,
                flex: auth?.user,
            })}
        >
            logout
        </div>

    </div>

</header>

    
    <div class="relative">
        <header class="flex items-center justify-between border-b border-slate-500 px-2 py-1 sm:px-4 sm:py-2 sm:pr-6">
            <NormalLink :href="route('home')" addClasses="text-lg tracking-tight">LVSK</NormalLink>

            <nav class="flex items-center">
                <NormalButton addClasses="active:outline outline-1 outline-slate-700 active:rounded sm:hidden" @click="toggleOpenMenu">
                    <Menu class="size-5" />
                </NormalButton>
            </nav>

            <nav class="hidden items-center gap-2 sm:flex">
                <nav class="hidden sm:flex">
                    <NormalLink
                        v-for="(navItem, index) in navMenu"
                        :href="navItem.href"
                        addClasses="flex items-center gap-2 hover:outline outline-1 outline-slate-700 rounded"
                        :key="`NavMenu-${index}`"
                    >
                        <component :is="navItem.icon" class="size-5" />
                        <p class="hidden md:inline-block">{{ navItem.title }}</p>
                    </NormalLink>
                </nav>

                <MainToggleAppearance />

                <div :class="cn('', { hidden: auth?.user, flex: !auth?.user })">
                    <PrimaryLink href="route('login')">Login</PrimaryLink>
                </div>

                <div :class="cn('', { hidden: !auth?.user, flex: auth?.user })">
                    <PrimaryLogout />
                </div>
            </nav>
        </header>

        <section
            :class="
                cn('absolute right-0 top-0 flex h-screen justify-end overflow-hidden bg-black/10 sm:hidden', {
                    'w-0': openMenu == false,
                    'w-full': openMenu == true,
                })
            "
        >
            <div
                :class="
                    cn('flex h-screen flex-col overflow-hidden border-l border-slate-500 bg-white delay-100 duration-100 animate-in dark:bg-black', {
                        'w-0 slide-in-from-left': openMenu == false,
                        'w-full max-w-72 slide-in-from-right': openMenu == true,
                    })
                "
            >
                <div class="flex items-center justify-between border-b border-slate-500 p-2">
                    <MainToggleAppearance />

                    <NormalButton addClasses="active:outline outline-2 active:rounded" @click="toggleOpenMenu">
                        <CircleX class="size-5" />
                    </NormalButton>
                </div>

                <div class="flex flex-col gap-6 p-2">
                    <nav class="flex flex-col gap-4">
                        <EmphasizeText>LRSVES Menu</EmphasizeText>

                        <div class="flex flex-col gap-1">
                            <NormalLink
                                v-for="(navItem, index) in navMenu"
                                :href="navItem.href"
                                addClasses="flex items-center gap-2 text-lg"
                                :key="`NavMenu-${index}`"
                            >
                                <component :is="navItem.icon" class="size-5" />
                                <p class="">{{ navItem.title }}</p>
                            </NormalLink>
                        </div>
                    </nav>

                    <div class="flex flex-col items-center gap-2">
                        <EmphasizeText>LRSVES Members</EmphasizeText>
                        <p :class="cn('text-center', { hidden: auth?.user, flex: !auth?.user })">
                            Join and become our member at LRSVES. Sign in with your account to have exclusive deals and much more.
                        </p>
                        <div :class="cn('flex-wrap items-center gap-2', { hidden: auth?.user, flex: !auth?.user })">
                            <PrimaryLink :href="route('login')">Login</PrimaryLink>
                            <SecondaryLink :href="route('home')">Register</SecondaryLink>
                        </div>
                        <p :class="cn('text-center', { hidden: !auth?.user, flex: auth?.user })">Welcome {auth?.user?.name ?? 'User'}</p>

                        <div :class="cn('', { hidden: !auth?.user, flex: auth?.user })">
                            <PrimaryLogout />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
