@extends('layout')

@section('content')
    <div class="col-md-2"></div>
        <div class="col-md-8 header">
            <h2 class="display-5">{{ isset($title) ? $title : "About" }}</h2>
        </div>
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
            <ul>
                <li>PHP >= 7.0.0</li>
                <li>OpenSSL PHP Extension</li>
                <li>PDO PHP Extension</li>
                <li>Mbstring PHP Extension</li>
                <li>Tokenizer PHP Extension</li>
                <li>XML PHP Extension</li>
            </ul>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection