<?php

use App\Task;


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
// Route::get('/tasks', function() {
//     //$tasks = DB::table('tasks')->latest()->get();
//     $tasks = Task::all(); //eloquent method

//     return view('tasks.index', ['tasks' => $tasks]);
// });



// //Get one task by id
// Route::get('/tasks/{task}', function($id) {
//     //$task = DB::table('tasks')->find($id);

//     $task = Task::find($id);
//     return view('tasks.show', ['task' => $task]);
// });

//Passing views from Controller

Route::get('/', 'HomeController@index');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/about', 'AboutController@index');