@extends('layout')

@section('content')
    <h2>{{$post->title}}</h2>
    <div class="row">
        {{$post->created_at->toFormattedDateString()}}
    </div>
    <div class="row">
         <p>{{$post->body}}</p>
    </div>
@endsection