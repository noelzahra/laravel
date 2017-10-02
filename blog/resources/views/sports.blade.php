<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
            }

            .list ul {
                list-style: none;
                padding: 0;
            }

            .list ul li {
                text-align: left;
                font-size: 1.6rem;
                line-height: 2rem;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="list">
                    <ul>
                        <li>
                            User: <?= $name ?> 
                        </li>
                        <li>
                            Booked sports: <?= $sports ?>
                        </li>
                    </ul>
                </div>


                <div class="links">
                    <a href="/">Home</a>
                    <a href="members">Members</a>
                    <a href="sports">Sports</a>
                    <a href="tasks">Tasks</a>
                    <a href="activity">Activity</a>
                </div>
            </div>
        </div>
    </body>
</html>
