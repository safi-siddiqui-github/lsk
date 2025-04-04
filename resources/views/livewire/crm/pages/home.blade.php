<?php

use function Livewire\Volt\{layout, state};

layout('livewire.crm.layouts.app-layout');

$add = function () {
    dd('haha');
};

?>

<div>
    Livewire CRM APP

    <button wire:click="add">Do this</button>
</div>