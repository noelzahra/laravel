@extends('layouts.main');

@section('content')
    <h3>{{ isset($title) ? $title : "About section" }}</h3>
    <p>
        The Laravel framework has a few system requirements.
        Of course, all of these requirements are satisfied by
        the Laravel Homestead virtual machine, so it's highly
        recommended that you use Homestead as your local Laravel
        development environment.
    </p>
    <p>
        Accessors and mutators allow you to format Eloquent
        attribute values when you retrieve or set them on model
        instances. For example, you may want to use the Laravel
        encrypter to encrypt a value while it is stored in the
        database, and then automatically decrypt the attribute
        when you access it on an Eloquent model.
    </p>
@endsection