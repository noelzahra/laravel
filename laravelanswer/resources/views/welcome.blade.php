@extends('layout')

@section('content')
<div class="col md-2"></div>
    <div class="col-md-8 text-center">
        <div class="title mt-40">
            {{ isset($title) ? $title : 'Hello' }}
        </div>
    </div>
<div class="col md-2"></div>
@endsection