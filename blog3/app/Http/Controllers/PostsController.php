<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //dd(request()->all());
        //dd(request(['title', 'body']));

        //create new post with request instance
        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');

        // //save to db
        // $post->save();

        //pass request as an array
        Post::create(request(['title', 'body']));
        //redirect
        return redirect('/');
    }
}
