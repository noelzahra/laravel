<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('home', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', ['task' => $task]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:255'
        ]);
        
        $task = Task::create([
            'name' => $request->name
        ]);

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
