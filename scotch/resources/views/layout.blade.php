<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.head')
        @include('partials.styles')
    </head>
    <body>
        @include('partials.nav')
        <div class="container">
            @yield('content')
            @include('partials.footer')
        </div>
         
        @include('partials.scripts')
    </body>
</html>
