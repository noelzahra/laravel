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

// namespace: imports Task class
use App\Task;

Route::get('/', function () {
    return view('welcome', [
            'name' => 'Scott',
            'age' => 10
    ]);
});


Route::get('/members', function () {
    return view('members')->with('name', 'Pierre');
});

//Controller for tasks view
Route::get('/tasks', 'TasksController@index');

//Controller for task detail show
Route::get('/tasks/{task}', 'TasksController@show');

/*
//Route for tasks view
Route::get('/tasks', function() {
    //$tasks = DB::table('tasks')->latest()->get();
    //$tasks = App\Task::all();
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});
*/

/*
//Route for task detail show
Route::get('/tasks/{task}', function($id) {
    //$task = DB::table('tasks')->find($id);
    $task = App\Task::find($id);
    Task::incomplete()->get();
    return view('tasks.show', compact('task'));
});
*/

Route::get('/sports', function() {
    $name = 'Ruth';
    $sports = 'yoga';

    return view('sports', compact('name', 'sports'));
});


Route::get('/activity', function() {
    $activities = [
        'Running',
        'Cycling',
        'Kayaking',
        'Paragliding',
        'Diving'
    ];

    return view('activity', compact('activities'));
});