<?php


Route::get('/', function () {
    return response()->redirectTo('/contact');
});

Route::resource('contact', 'ContactController', ['exept' => 'show']);
