<?php


Route::get('/', function () {
    return response()->redirectTo('/contact');
});

//Route::get('contact/message/{id}','ContactController@message');

Route::resource('contact', 'ContactController', ['except' => 'show']);
