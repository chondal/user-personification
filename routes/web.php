<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::group(['namespace' => 'Chondal\UserPersonification\Http\Controllers'], function () {
        Route::get('/probando', 'ImpersonationsController@index');
        Route::post('/impersonations', 'ImpersonationsController@store')
            ->name('impersonations.store');

        Route::post('/impersonations/destroy', 'ImpersonationsController@destroy')
            ->name('impersonations.destroy');
    });
});
