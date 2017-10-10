@extends('layout')

    @section ('content')
    @foreach($posts as $post)
       @include('posts.post')
    @endforeach
       
       <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">older</a>
        <a class="btn btn-outline-secondary disabled" href="#">newer</a>
       </nav>
    @endsection