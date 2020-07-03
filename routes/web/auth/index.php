<?php
    Route::group(['namespace' => 'Auth','middleware' => 'web'], function () {
    Route::get('user/logout', 'LoginController@logout')->name('logout');

    // Social Auth
    Route::get('oauth/{driver}', 'SocialAuthController@redirectToProvider')->name('social.oauth');
    Route::get('oauth/{driver}/callback', 'SocialAuthController@handleProviderCallback')->name('social.callback');

    // Reset password
    //Route::get('user/change_password', 'ChangePasswordController@showChangePasswordForm')->name('user.change_password');
    //Route::patch('user/change_password', 'ChangePasswordController@changePassword')->name('user.change_password');

    //Change Password Routes
    Route::get('change/password', 'ChangePasswordController@formChangePassword')->name('groupEdWd.formChangePassword');
    Route::post('change_password', 'ChangePasswordController@changePassword')->name('groupEdWd.changePassword');
});
