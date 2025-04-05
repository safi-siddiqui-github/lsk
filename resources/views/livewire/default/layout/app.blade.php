<?php

use function Livewire\Volt\{layout, state};

?>

<!-- Layout - resources/views/components/livewire/layout.blade.php -->
<x-livewire.layout>
    <!-- Header - resources/views/livewire/default/components/header.blade.php -->
    <livewire:default.components.header />

    <!-- Children / Slot -->
    {{ $slot }}
</x-livewire.layout>
