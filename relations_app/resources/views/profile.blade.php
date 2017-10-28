@extends('layouts.main')
@section('title', "User profile: $user->name")

@section('content')
    <h3>{{ $user->name }}</h3>
    @foreach($user->posts as $post)
        <div class="well">
            <h4>{{$post->title}}</h4>
            <p>{{$post->content}}</p>
            <small>{{$post->created_at->toFormattedDateString()}}</small>
        </div>
    @endforeach
@endsection