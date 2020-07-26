<?php

Route::group(['namespace' => 'Partials'], function(){
    Route::get('/profil/{username}', 'ProfilController@index')->name('groupEdWd.profil');
    Route::get('/nos-faqs', 'FaqController@index')->name('groupEdWd.faq');
});
