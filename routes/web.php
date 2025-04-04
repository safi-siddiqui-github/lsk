<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

Volt::route('/livewire/crm', 'crm.pages.home')->name('livewire.crm.home');
