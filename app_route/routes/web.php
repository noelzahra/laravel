<?php


Route::get('/', 'SiteController@getHome')->name('home');
Route::get('/about-us', 'SiteController@getAbout')->name('about');


Route::get('/contact-us', 'SiteController@getContact')->name('contact');
Route::post('/contact-us', 'SiteController@postContact');


Route::get('users/{type?}', function ($type = null){
    if (is_null($type)) {
        dd('all the users');
    } else {
        dd('All the users of type: ' . $type);
    }
});


Route::get('{category}/{post}', function($category, $post) {
    dd($category, $post);
});

//Named routes
