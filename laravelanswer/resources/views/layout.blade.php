<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    @include('partials.head')
    @include('partials.styles')
    </head>
    <body>
    @include('partials.nav')
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
            <div class="row">
                <div class="col md-2"></div>
                <div class="col-md-8 text-center">
                    @include('partials.footer')
                </div>
                <div class="col md-2"></div>
            </div>
        </div>
    </body>
</html>
