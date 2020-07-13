<?php
Route::group(['namespace' => 'Site'], function () {
    Route::get('/about', 'AboutController@index')->name('groupEdWd.about');
    Route::get('/nos-services', 'ServicesController@index')->name('groupEdWd.services');
    Route::get('/nos-projects', 'ProjectsController@index')->name('groupEdWd.projects');
    Route::get('/contact-us', 'ContactController@index')->name('groupEdWd.contact-us');
    Route::post('/contact-us/send', 'ContactController@send')->name('contact-message');

    /** Dossier Partials */
    //require(__DIR__ . DIRECTORY_SEPARATOR . 'partials'. DIRECTORY_SEPARATOR . 'index.php');
});
