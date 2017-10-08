<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts: Open Sans and Lato -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/album.css')}}">
    </head>
    <body>

        @include('layouts.nav')

        @include('layouts.header')

        {{--  Posts  --}}
        <section class="album">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        @yield('content')
                    </div>
                    <div class="col-sm-3 offset-sm-1">
                        @include('layouts.sidebar')
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.footer')
        </div>
    </body>
</html>
