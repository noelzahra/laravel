@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10 header  mt-40">
                <h2 class="display-5">{{ isset($title) ? $title : "Contact" }}</h2>
                <p>
                    Our team will help you find answers, whether through a reference
                    document, email, phone call, or tweet. Give us a search or click the
                    in-app Help button and get the support that you need..
                </p>
                <p>
                    All of the configuration files for the Laravel framework
                    are stored in the config directory. Each option is documented,
                    so feel free to look through the files and get familiar with
                    the options available to you.
                </p>
            </div>
        <div class="col-md-1"></div>
    </div>
@endsection
