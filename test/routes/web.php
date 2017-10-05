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

Route::get('/', function () {
    return view('welcome')->with('name', 'Scott');
});

Route::get('/contact', function () {
    $tasks = [
        "Get laravel books",
        "Read the books",
        "test coding"
    ];
    return view('contact', compact('tasks'));
});

Route::get('/about', function() {
    return view('about');
});