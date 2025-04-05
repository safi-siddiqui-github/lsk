<?php

use function Livewire\Volt\{layout, state}; ?>

<!--
 {
            "files": [
                "**/*.blade.php"
            ],
            "options": {
                "parser": "blade"
            }
        },
        {
            "files": [
                "**/*.php"
            ],
            "options": {
                "parser": "php"
            }
        }

  -->

<!-- Layout - resources/views/components/livewire/layout.blade.php -->
<x-livewire.layout>
    <!-- Children / Slot -->

    <div
        class="flex h-screen min-h-fit items-center justify-center overflow-y-scroll"
    >
        <div class="flex flex-col">
            <div class="flex">
                <div
                    class="flex flex-1 items-center justify-center gap-1 border py-1"
                >
                    <livewire:default.svg.laravel class="size-7" />
                    <p class="text-lg">Livewire</p>
                </div>
            </div>

            {{ $slot }}
        </div>
    </div>
</x-livewire.layout>
