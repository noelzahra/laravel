<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() {
        
        $tasks = Task::all();
        
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function show(Task $task) {

        //$task = Task::find($id); //passing id as an arg in show method

        return view('tasks.show', ['task' => $task]);
    }
}
