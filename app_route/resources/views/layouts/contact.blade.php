@extends('layouts.main')
@section('title', 'Contact us')

@section('content')
    <div class="content">
        <h3>Contact Form</h3>
        <form method="POST" action="{{ route('contact') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="mesage">Message</label>
                <textarea name="mesage" id="message" cols="60" rows="5" placeholder="Please leave a message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" id="submit" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection