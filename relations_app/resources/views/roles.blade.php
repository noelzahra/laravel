@extends('layouts.main')

@section('title', "$user->name Roles")

@section('content')
<h3>{{ $user->name }}</h3>
    <div class="well">
        <p>Current role: {{$user->roles}}</p>
    </div>
@endsection