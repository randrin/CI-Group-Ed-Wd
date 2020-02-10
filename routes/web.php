<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);
Route::group(['namespace' => 'Auth','middleware' => 'web'], function () {

    Route::get('user/logout', 'LoginController@logout')->name('logout');

    // Social Auth
    Route::get('oauth/{driver}', 'SocialAuthController@redirectToProvider')->name('social.oauth');
    Route::get('oauth/{driver}/callback', 'SocialAuthController@handleProviderCallback')->name('social.callback');

    // Reset password
    Route::get('user/change_password', 'ChangePasswordController@showChangePasswordForm')->name('user.change_password');
    Route::patch('user/change_password', 'ChangePasswordController@changePassword')->name('user.change_password');

});

Route::group(['namespace' => 'Site'], function () {
    Route::get('/about', 'AboutController@index')->name('about');
});
