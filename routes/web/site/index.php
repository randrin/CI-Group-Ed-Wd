<?php
Route::group(['namespace' => 'Site'], function () {
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/nos-services', 'ServicesController@index')->name('services');
    Route::get('/nos-projects', 'ProjectsController@index')->name('projects');

    /** Dossier Partials */
    require(__DIR__ . DIRECTORY_SEPARATOR . 'partials'. DIRECTORY_SEPARATOR . 'index.php');
});
