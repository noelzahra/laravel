<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    @include('partials.styles')

<title>{{ config('app.name', 'Task list')}}</title>
</head>
<body>
    <div class="container mt-40">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8 text-left">
                    @yield('content')
                </div>
            <div class="col-md-2"></div>
        </div>
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