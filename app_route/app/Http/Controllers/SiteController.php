<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome()
    {
        return view('layouts.home');
    }

    public function getAbout()
    {
        return view('layouts.about');
    }

    public function getContact()
    {
        return view('layouts.contact');
    }

    public function postContact(Request $request)
    {
        dd($request->all());
    }
}
