<?php

use App\Http\Controllers\CRMController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

Volt::route('/livewire/crm', 'crm.pages.home')->name('livewire.crm.home');

Route::controller(CRMController::class)->group(function () {

    Route::get('/react/crm', 'home')->name('react.crm.home');
});
