<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return  "Api Url V1";
});

Route::get('/api/v1/urls/{id?}', 'UrlController@index')->where('id', '[0-9]+');
Route::post('/api/v1/urls', 'UrlController@create');
Route::put('/api/v1/urls/{id}', 'UrlController@update')->where('id', '[0-9]+');
Route::delete('/api/v1/urls/{id}', 'UrlController@delete')->where('id', '[0-9]+');