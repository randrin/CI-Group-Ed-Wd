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
//Route::view('/{any}', 'index');


Auth::routes(['verify' => true]);

/** Auth **/
require(__DIR__ . DIRECTORY_SEPARATOR . 'web' .DIRECTORY_SEPARATOR . 'auth' . DIRECTORY_SEPARATOR . 'index.php');

/** Dashboard **/
require(__DIR__ . DIRECTORY_SEPARATOR . 'web' .DIRECTORY_SEPARATOR . 'dashboard' . DIRECTORY_SEPARATOR . 'index.php');

/** Site **/
require(__DIR__ . DIRECTORY_SEPARATOR . 'web' .DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR . 'index.php');


Route::get('/home', 'HomeController@index')->name('home');
