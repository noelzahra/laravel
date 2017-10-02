
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
      /*
      * Globals
      */

      @media (min-width: 48em) {
        html {
          font-size: 18px;
        }
      }

      body {
        font-family: Georgia, "Times New Roman", Times, serif;
        color: #555;
      }

      h1, .h1,
      h2, .h2,
      h3, .h3,
      h4, .h4,
      h5, .h5,
      h6, .h6 {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: normal;
        color: #333;
      }


      /*
      * Override Bootstrap's default container.
      */

      .container {
        max-width: 60rem;
      }


      /*
      * Masthead for nav
      */

      .blog-masthead {
        margin-bottom: 3rem;
        background-color: #428bca;
        -webkit-box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
                box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
      }

      /* Nav links */
      .nav-link {
        position: relative;
        padding: 1rem;
        font-weight: 500;
        color: #cdddeb;
      }
      .nav-link:hover,
      .nav-link:focus {
        color: #fff;
        background-color: transparent;
      }

      /* Active state gets a caret at the bottom */
      .nav-link.active {
        color: #fff;
      }
      .nav-link.active:after {
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 0;
        margin-left: -.3rem;
        vertical-align: middle;
        content: "";
        border-right: .3rem solid transparent;
        border-bottom: .3rem solid;
        border-left: .3rem solid transparent;
      }


      /*
      * Blog name and description
      */

      .blog-header {
        padding-bottom: 1.25rem;
        margin-bottom: 2rem;
        border-bottom: .05rem solid #eee;
      }
      .blog-title {
        margin-bottom: 0;
        font-size: 2rem;
        font-weight: normal;
      }
      .blog-description {
        font-size: 1.1rem;
        color: #999;
      }

      @media (min-width: 40em) {
        .blog-title {
          font-size: 3.5rem;
        }
      }


      /*
      * Blog Create Form
      */

      .form-container {
        margin: 20px 0;
      }

      .form-container button {
        margin: 20px 0 0;
      }

      /*
      * Main column and sidebar layout
      */

      /* Sidebar modules for boxing content */
      .sidebar-module {
        padding: 1rem;
        /*margin: 0 -1rem 1rem;*/
      }
      .sidebar-module-inset {
        padding: 1rem;
        background-color: #f5f5f5;
        border-radius: .25rem;
      }
      .sidebar-module-inset p:last-child,
      .sidebar-module-inset ul:last-child,
      .sidebar-module-inset ol:last-child {
        margin-bottom: 0;
      }


      /* Pagination */
      .blog-pagination {
        margin-bottom: 4rem;
      }
      .blog-pagination > .btn {
        border-radius: 2rem;
      }


      /*
      * Blog posts
      */

      .blog-post {
        margin-bottom: 4rem;
      }
      .blog-post-title {
        margin-bottom: .25rem;
        font-size: 2.5rem;
      }
      .blog-post-meta {
        margin-bottom: 1.25rem;
        color: #999;
      }


      /*
      * Footer
      */

      .blog-footer {
        padding: 2.5rem 0;
        color: #999;
        text-align: center;
        background-color: #f9f9f9;
        border-top: .05rem solid #e5e5e5;
      }
      .blog-footer p:last-child {
        margin-bottom: 0;
      }
    </style>
  </head>

  <body>


  @include ('layouts.nav')
  
  @include ('layouts.header')

  <div class="container">
    <div class="row">
      @yield('content')
      @include('layouts.sidebar')
    </div><!-- /.row -->
  </div>

  @include('layouts.footer')

  </body>
</html>
