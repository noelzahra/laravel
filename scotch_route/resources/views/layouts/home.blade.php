@extends('layouts.main')

@section('content')
    <h3>{{ isset($title) ? $title : "Home" }}</h3>
    <p>
        The Laravel framework has a few system requirements.
        Of course, all of these requirements are satisfied by
        the Laravel Homestead virtual machine, so it's highly
        recommended that you use Homestead as your local Laravel
        development environment.
    </p>
@endsection