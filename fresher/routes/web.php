<?php


Route::get('/', 'TaskController@index')->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/task', 'TaskController@create')->name('create');

Route::post('/task', 'TaskController@store');

Route::get('/tasks/{id}', 'TaskController@show');

Route::delete('/tasks/{task}', 'TaskController@destroy');


