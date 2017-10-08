<?php

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@Store');