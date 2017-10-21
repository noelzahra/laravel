@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-40">
            <div class="jumbotron text-center">
                <h2>Ask a Question</h2>
                <p class="lead">
                    Ask any question you want to know about Laravel and we will get answers fro you!
                </p>
                <button class="btn btn-lg btn-primary">Ask a question</button>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <div class="title mt-40">
                <h3>Recent questions</h3>
            </div>
            <ol class="list-group">
            @foreach($array as $key => $value)
                <li class="list-group-item">
                    {{ $key . ' is ' . $value }}
                </li>
            @endforeach
            </ol>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection