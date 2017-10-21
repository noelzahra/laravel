@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <h4>{{ $question->title }}</h4>
                <div>
                    <p class="lead">
                        {{ $question->description }}
                    </p>
                    <small>
                        Submitted by {{ $question->user->name }} on {{ $question->created_at->toFormattedDateString() }}
                    </small>
                </div>
            </div>
        <div class="col-md-2"></div>
    </div>
    <hr>
    {{--display all of the answers--}}
    <div class="row mt-40">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @if($question->answers->count() > 0)
                @foreach($question->answers as $answer)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="lead">
                                {{ $answer->content }}
                            </p>
                            <small>
                                Answered by {{ $answer->user->name }}, {{ $answer->created_at->diffForHumans() }}
                            </small>
                        </div>
                    </div>
                @endforeach
            @else
                <p>There are no answers for this question yet. Please consider submitting one below.</p>
            @endif
        </div>
        <div class="col-md-2"></div>
    </div>

    {{--form to submit an answer--}}
    <div class="row mt-40">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            {{--form submits to answer.store--}}
            <form action="{{ route('answers.store') }}" method="POST">

                {{ csrf_field() }}

                <h4>Submit your own answer:</h4>
                <div class="form-group">
                    <textarea name="content" id="content" cols="30" rows="6" class="form-control">

                    </textarea>
                </div>
                <input type="hidden" value="{{ $question->id }}" name="question_id">
                <div class="form-group">
                    <button class="btn btn-primary">Submit answer</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection