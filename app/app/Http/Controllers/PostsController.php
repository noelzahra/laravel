<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //begin at the root

class PostsController extends Controller
{
   public function index() {
       $posts = Post::all();

       return view('posts.index', compact('posts'));
   }

   public function show() {

    return view('posts.show');
   }

   public function create() {

    return view('posts.create');
   }

   public function store() {
    //dd(request(['title', 'body']));
    
    //$post = new Post;

    // $post->title = request('title');
    // $post->body = request('body');

    // $post->save();

    //server-side validation
    $this->validate(request(),[
        'title' => 'required|min:2',
        'body' => 'required'
    ]);

    //Class method
    Post::create([
        'title' => request('title'),
        'body' => request('body')
    ]);

    return redirect('/');


   }
}
