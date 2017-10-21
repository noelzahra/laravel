@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8 header  mt-40">
                <h2 class="display-5">Ask a question</h2>
                <hr>
                <form action="{{ route('questions.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Question:</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">More information</label>
                        <textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit question">
                    </div>
                </form>
            </div>
        <div class="col-md-2"></div>
    </div>
@endsection