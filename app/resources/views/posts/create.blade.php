@extends('layout');

@section('content')
    <h2 class="form-title">Publish a post</h2>

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control"  placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body:</label>
            <textarea name="body" id="body" cols="30" rows="6" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Publish</button>
    </form>

    {{--  errors populated from laravel built-in validate method  --}}
    @if (count($errors))
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection