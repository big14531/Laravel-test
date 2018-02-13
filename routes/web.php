<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/show', 'HomeController@show');
Route::get('/images', 'ImageController@index');
Route::post('/images/create', ['as'=>'fileUpload','uses'=>'ImageController@store']);
