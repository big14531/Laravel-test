<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/images', 'ImageController@index');
Route::post('/images/create', ['as'=>'fileUpload','uses'=>'ImageController@store']);
