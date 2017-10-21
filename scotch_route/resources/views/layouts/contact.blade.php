@extends('layouts.main')

@section('content')
    <div class="content">
            <h3>Contact Form</h3>
        <form method="POST" action="{{ route('contact') }}">
                {!! csrf_field() !!}
            <div>
                <lable>Name</lable>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label>Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="submit">Send</button>
            </div>
        </form>
@endsection