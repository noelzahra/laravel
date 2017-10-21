@extends('layout')

@section('content')

    <div class="container">
        <h3>{{ $user->name }}'s Profile</h3>
        <p class="lead">
            See what {{ $user->name }} has been up to on this site.
        </p>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h4>Questions</h4>
                @foreach($user->questions as $question)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>{{ $question->title }}</h4>
                            <p>
                                {{ $question->description }}
                            </p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{ route('questions.show', $question->id) }}" class="btn btn-link">
                                View question
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h4>Answers</h4>
                @foreach($user->answers as $answer)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $answer->question->title }}
                        </div>
                        <div class="panel-body">
                            <p>
                                {{ $answer->content }}
                            </p>
                            <small>
                                Created by: {{ $user->name }} on {{ $answer->created_at->toFormattedDateString() }}
                            </small>
                        </div>

                        <div class="panel-footer">
                            <a href="{{ route('questions.show', $answer->question->id) }}" class="btn btn-link" >
                                Show answers for this question
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection