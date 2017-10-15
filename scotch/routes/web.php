<?php

Route::get('/', function () {

    $users = factory(App\User::class, 5)->make();
    return view('layouts.home', ['users' => $users]);
});

Route::get('/about', function(){

    return view('layouts.about');
});

Route::get('/contact', function() {

    return view('layouts.contact');
});