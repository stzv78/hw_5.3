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

Route::get('/', 'PageController@index');

Route::get('/list', 'PageController@listContacts');

Route::post('/add', 'PageController@add');

Route::get('/edit/{id}', 'PageController@edit');

Route::get('/delete/{id}', 'PageController@delete');