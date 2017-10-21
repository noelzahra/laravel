<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
<head>
@include('partials.head')
@include('partials.styles')
</head>
<body>
@include('partials.nav')

<div class="container mt-40">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @yield('content')
        </div>
        <div class="col-md-3"></div>
    </div>
    @include('partials.footer')
</div>
@include('partials.scripts')
</body>
</html>