<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;
        $slug = str_slug($request->title);
        
        //$count = Post::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")->count();
        
        $latestSlug = Post::whereRaw( "slug RLIKE '^{$slug}(-[0-9]*)?$'")
                        ->latest('id')
                        ->pluck('slug');

        $post->slug = $latestSlug ? "{$slug}-{$count}" : $slug;

        // $index = 1;
        // while (Post::whereSlug($post->slug)->exists()) {
        //     $post->slug = str_slug($request->title) . '-' . $index++;
        // }

        $post->save();

        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return Post::whereSlug($slug)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
