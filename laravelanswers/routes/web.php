<?php


Route::get('/', 'PageController@home')->name('index');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/contact', 'PageController@contact');

Route::post('/contact', 'PageController@submitContact');

Route::resource('questions', 'QuestionController');

Route::resource('answers', 'AnswersController', ['except' =>['index', 'create', 'show']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{user}', 'PageController@profile')->name('profile');
