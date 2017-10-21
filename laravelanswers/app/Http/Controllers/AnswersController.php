<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;
use Auth;

class AnswersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        //Question.show form submit answers to store
        //validate form data
        $this->validate($request, [
           'content' => 'required | min:15',
           'question_id' => 'required | integer'
        ]);

        //saving answer into database
        $answer = new Answer();
        $answer->content = $request->content;
        $answer->user()->associate(Auth::user()->id);

        $question = Question::findOrFail($request->question_id);
        $question->answers()->save($answer);

        return redirect()->route('questions.show', $question->id);
    }


    public function edit($id)
    {
        $answer = Answer::findOrFail($id);
        if ($answer->user->id != Auth::id()){
            return abort('403');
        }

        return view('questions.edit');
    }


    public function update(Request $request, $id)
    {
        $answer = Answer::findOrFail($id);

        if ($answer->user->id != Auth::id()) {
            return abort('403');
        }

        return view('questions.update');
    }


    public function destroy($id)
    {
        //
    }
}
