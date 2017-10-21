<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

use Auth;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        //go to model to get a group of records
        //$questions = Question::all();
        $questions = Question::orderBy('id', 'desc')->paginate(5);

        //return view and group of records
        return view('questions.index', ['questions' => $questions]);
    }


    public function create()
    {
        return view('questions.create');
    }


    public function store(Request $request)
    {
        //validate form data
        $this->validate($request, [
            'title' => 'required|min:2|max:255',
        ]);

        //process data into questions table
            $question = new Question();
            $question->title = $request->title;
            $question->description = $request->description;
            $question->user()->associate(Auth::user()->id);
            //$question->save();

        //if successful redirect to show page
        if ($question->save()) {
            return redirect()->route('questions.show', $question->id);
        } else {
            return redirect()->route('questions.create');
        }
    }


    public function show($id)
    {
        //Use the model to get 1 record from the db
        $question = new Question();
        $question = $question->findOrFail($id);

        //show the view and pass the record to the view
        return view('questions.show', ['question' => $question]);
    }


    public function edit($id)
    {
        $question = Question::findOrFail($id);
        if ($question->user->id != Auth::id())
        {
            return abort(403);
        }
    }


    public function update(Request $request, $id)
    {
        $question = Question::findOrFail($id);
        if ($question->user->id != Auth::id()) {
            return abort(403);
        }

        return view('questions.update');
    }


    public function destroy($id)
    {
        //
    }
}
