@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 header mt-40">
        <h3 class="display-4">{{ isset($title) ? $title : "About" }}</h3>
        <p>
            The Laravel framework has a few system requirements.
            Of course, all of these requirements are satisfied by
            the Laravel Homestead virtual machine, so it's highly
            recommended that you use Homestead as your local Laravel
            development environment.
        </p>
        <p>
            However, if you are not using Homestead, you will need
            to make sure your server meets the following requirements:
        </p>
        <ul class="list-group">
            <li class="list-group">PHP >= 7.0.0</li>
            <li class="list-group">OpenSSL PHP Extension</li>
            <li class="list-group">PDO PHP Extension</li>
            <li class="list-group">Mbstring PHP Extension</li>
            <li class="list-group">Tokenizer PHP Extension</li>
            <li class="list-group">XML PHP Extension</li>
        </ul>
    </div>
    <div class="col-md-1"></div>
</div>
@endsection