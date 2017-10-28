<?php

use App\User;
use App\Address;
use App\Post;
use App\Role;

Route::get('/', function(){

    //create new user
    $user = factory(User::class)->create();

    //create new address
    $address = new Address([
        'country' => 'USA',
        'zip'     => '12339'
    ]);

    //link the two
        $user->address()->save($address);

    //dump
    $user->load('address');
        dd($user);
})->name('index');

Route::get('has-many', function() {
    //create a user
    $user = factory(User::class)->create();

    //create multiple posts
    $posts = factory(Post::class, 5)->create();

    //link them together
    $user->posts()->saveMany($posts);

    //dump
    $user->load('posts');

    dd($user);

});

Route::get('has-many-tips', function(){
    //create user
    $user = factory(User::class)->create();

    //create post
    $post = factory(Post::class)->create();

    //assocaite post with author (user method)
    $post->author()->associate($user);
    $post->save();

    dd($post->author->id, $post->author->name, $post->author->email);
});

Route::get('user/{id}', function($id){
    //create user
    $user = User::with('posts')->find($id);

    return view('profile', ['user' => $user]);

});

Route::get('roles', function(){
    $user = User::first();
    $role = Role::create(['name' => 'admin']);

    //assign rle to user
    $user->roles()->attach($role->id);

    $user->load('roles');

    return view('roles', ['user'=> $user]);
});