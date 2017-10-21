<?php

//Routes are registered in order they appear

Route::get('/', 'SiteController@getHome');
Route::get('about/{username}', 'SiteController@getAboutWithUser');

Route::get('about-us', 'SiteController@getAbout')->name('about');
Route::get('contact-us', 'SiteController@getContact')->name('contact');

Route::post('contact-us', [
    'as' => 'contact',
    'uses' => 'SiteController@postContact'
]);

Route::get('@{username}', function ($username){
    dd($username);
});

//passing a type - type? means it's not always required
Route::get('users/{type?}', [
    'as' => 'users', function($type = null) {
        if(is_null($type)) {
            dd("All the users");
        } else {
            dd("Users of type: $type");
        }
}]);


Route::get('{category}/{post_slug}', function($category, $post_slug) {
    dd($category, $post_slug);
})->name('post');

Route::get('login', function(){
    dd("Reached login page");
});

//Dashboard Routes group
Route::group([
    'namespace' => 'Dashboard',
    'prefix' => 'dashboard',
    'middleware' => 'auth'
], function() {
    Route::get('/', function(){
        dd("Reached dashboard home");
    });
//    Route::get('/', 'DashboardController@getHome');
//    Route::resource('users', 'DashboardController@getUsers');
//    Route::resource('posts', 'DashboardController@getPosts');
});


/*
 * Middleware - makes sure that requests
 * don't get to routes unless middleware
 * is run first
 * Middleware auth
 * */

