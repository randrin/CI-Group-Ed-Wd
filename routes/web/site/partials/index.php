<?php

Route::group(['namespace' => 'Partials'], function(){
    Route::get('/nos-faqs', 'FaqController@index')->name('groupEdWd.faq');
});
