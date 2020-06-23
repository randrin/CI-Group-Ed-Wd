<?php

Route::group(['namespace' => 'Partials'], function(){
    //Change Password Routes
    Route::get('change/password', 'ChangePasswordController@formChangePassword')->name('groupEdWd.formChangePassword');
    Route::post('change_password', 'ChangePasswordController@changePassword')->name('groupEdWd.changePassword');
});
