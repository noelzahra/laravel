<?php

Route::get('/', 'PostsController@index');

Route::get('/about', 'AboutController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

// Route::get('/posts', 'PostsController@index');

Route::post('/posts', 'PostsController@store');

Route::get('/contact', 'ContactUsController@index');