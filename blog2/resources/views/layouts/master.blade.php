
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/album.css" >
    <style>
    body {
    min-height: 75rem; /* Can be removed; just added for demo purposes */
    }
    
    .navbar {
        margin-bottom: 0;
    }
    
    .jumbotron {
        padding-top: 6rem;
        padding-bottom: 6rem;
        margin-bottom: 0;
        background-color: #fff;
    }
    
    .jumbotron p:last-child {
        margin-bottom: 0;
    }
    
    .jumbotron-heading {
        font-weight: 300;
    }
    
    .jumbotron .container {
        max-width: 40rem;
    }
    
    .album {
        min-height: 50rem; /* Can be removed; just added for demo purposes */
        padding-top: 3rem;
        padding-bottom: 3rem;
        background-color: #f7f7f7;
    }
    
    .card {
        float: left;
        width: 33.333%;
        padding: .75rem;
        margin-bottom: 2rem;
        border: 0;
    }
    
    .card > img {
        margin-bottom: .75rem;
    }
    
    .card-text {
        font-size: 85%;
    }
    
    footer {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }
    
    footer p {
        margin-bottom: .25rem;
    }
  </style>
  </head>

  <body>

    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    {{--  navabr  --}}
    @include('layouts.nav')

    @yield('content')

    {{--  footer  --}}
    @include('layouts.footer')

  </body>
</html>
