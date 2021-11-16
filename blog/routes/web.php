<?php
Route::get('/', 'PostController@index');
Route::get('/list', 'PostController@list');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/create', 'PostController@create');
Route::post('/recuoe', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');