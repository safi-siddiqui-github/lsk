<?php

use App\Http\Controllers\CRMController;
use App\Http\Controllers\LivewireController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Livewire App
Route::prefix('/livewire')->name('livewire.')->group(function () {

    // Livewire Default App
    Volt::route('/login', 'default.pages.login')->name('login');
    Volt::route('/register', 'default.pages.register')->name('register');

    // Password Reset
    Route::name('password.')->prefix('forgot-password')->group(function () {
        Volt::route('/email-request', 'auth.forgot.email-request')->name('request');
        Volt::route('/reset-password/{token}', 'auth.forgot.reset-password')->name('reset');
    });

    // Email Verification
    Route::name('verification.')->prefix('email-verification')->middleware('auth')->group(function () {
        Volt::route('/notice', 'auth.verification.notice')->name('notice');

        Route::controller(LivewireController::class)->group(function () {
            Route::get('/email/verify/{id}/{hash}', 'verify_email')->name('verify')->middleware('signed');
        });
    });

    Route::controller(LivewireController::class)->group(function () {
        Route::name('google.')->prefix('google')->group(function () {
            Route::get('/redirect', 'google_redirect')->name('login');
            Route::get('/callback', 'google_callback');
        });

        Route::name('github.')->prefix('github')->group(function () {
            Route::get('/redirect', 'github_redirect')->name('login');
            Route::get('/callback', 'github_callback');
        });
    });

    // Livewire CRM App
    Route::prefix('/crm')->name('crm.')->group(function () {
        Volt::route('/', 'crm.pages.home')->name('home');
    });

    // Livewire CRM App
});

// Volt::route('/livewire/crm', 'crm.pages.home')->name('livewire.crm.home');

Route::controller(CRMController::class)->group(function () {
    Route::get('/react/crm', 'home')->name('react.crm.home');
    Route::get('/vue/crm', 'home')->name('vue.crm.home');
});
