<?php

Route::group(['namespace' => 'Dashboard','middleware' => 'auth:web'], function(){

    Route::group(['middleware' => 'verified'],function (){

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

    });
});
