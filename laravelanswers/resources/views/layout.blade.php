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

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">

                @include('partials.footer')

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@include('partials.scripts')
</body>
</html>