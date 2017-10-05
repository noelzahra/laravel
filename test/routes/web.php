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
    $name = 'Scott';
    //php built-in func: compact('name') for ['name' => $name]
    return view('welcome', [ 'name' => $name ]); 
});

// Route::get('/contact', function(){
//     $tasks = [
//         'Start reading Laravel book',
//         'Do the laracsts tutorial',
//         'Code some test laravel apps',
//         'Enjoy the results'
//     ];
//     return view('contact', compact('tasks'));
// });

//Populate Tasks collection from db
Route::get('/tasks', function() {
    $tasks = DB::table('tasks')->latest()->get();

    return view('tasks.index', ['tasks' => $tasks]);
});

//Get one task by id
Route::get('/tasks/{task}', function($id) {
    $task = DB::table('tasks')->find($id);

    return view('tasks.show', ['task' => $task]);
});

Route::get('/about', function() {
    return view('about');
});