<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PageController extends Controller
{
    public function home()
    {
        $array = [
            'Name' => 'Scott',
            'Surname' => 'Zahra',
            'Age' => 9,
            'School' => 'Rabat'
        ];

        return view('welcome', ['array' => $array]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact()
    {
        return view('contact');
    }

    public function profile($id)
    {
        //eager loading answers
        $user = User::with(['questions', 'answers', 'answers.question'])->find($id);
        return view('profile', ['user' => $user]);
    }
}
