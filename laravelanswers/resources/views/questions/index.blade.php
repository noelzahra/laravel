@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Recent questions</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
        @foreach($questions as $question)
            <div class="well">
                <h4>{{ $question->title }}</h4>
                <p>
                    {{ $question->description }}
                </p>
                <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary btn-sm">View details</a>
            </div>
        @endforeach
            {{ $questions->links() }}
        </div>
    </div>
@endsection