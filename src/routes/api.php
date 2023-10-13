<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
    ->prefix('api/core/addresses')
    ->as('core.addresses.')
    ->namespace('LaravelLiberu\RoAddresses\App\Http\Controllers')
    ->group(function () {
        Route::get('localitiesOptions', 'LocalityOptions')->name('localitiesOptions');
        Route::get('countiesOptions', 'CountyOptions')->name('countiesOptions');
        Route::get('', 'Index')->name('index');
    });
