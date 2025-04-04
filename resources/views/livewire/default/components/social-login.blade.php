<?php

use function Livewire\Volt\{state};

//

?>

<div class="flex flex-wrap w-full items-center gap-2">

    <a
        href="{{route('livewire.google.login')}}"
        class="flex gap-1 items-center border px-2 py-1 rounded-full flex-1 justify-center min-w-fit">
        <livewire:default.svg.google />
        <p class="">Continue with Google</p>
    </a>

    <a
        href="{{route('livewire.github.login')}}"
        class="flex gap-1 items-center border px-2 py-1 rounded-full flex-1 justify-center min-w-fit">
        <livewire:default.svg.github />
        <p class="">Continue with Github</p>
    </a>

</div>