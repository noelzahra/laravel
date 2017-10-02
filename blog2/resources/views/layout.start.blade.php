<!doctype html>
<html>
    <head>
        <title>Laravel blog 2</title>

        <style>
            .container{
                width: 900px;
                margin: 10px auto;
                font-family: 'Helvetica', Arial, sans-serif;
                font-size: 2rem;
                color: #a4c311;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')

            @yield('footer')
        </div>
    </body>
</html>