<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('/img/logo.png')}}">
    <title>{{config('app.name')}} - Welcome</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">


    <style>

.content {
  max-width: 1000px;
  margin: right;
}

.backgroundImage{
    background-image: url('/public/uploads/backgrounds/maxresdefault_2.JPG');
    width: 100vh;
    height: 100vh;
}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /*
        * Globals
        */

        /* Links */
        a,
        a:focus,
        a:hover {
        color: #fff;
        }

        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        background-color: #fff;
        border: .05rem solid #fff;
        }


        /*
        * Base structure
        */

        html,
        body {
        background-image: url('/uploads/backgrounds/background.jpg');
        background-size: cover;
        height: 0%;
        background-color: #AEB6BF ;
        }

        body {
        display: -ms-flexbox;
        display: flex;
        color: #fff;
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
        max-width: 42em;
        }


        /*
        * Header
        */
        .masthead {
        margin-bottom: 2rem;
        }

        .masthead-brand {
        margin-bottom: 0;
        }

        .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
        }

        .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
        }

        @media (min-width: 48em) {
        .masthead-brand {
            float: left;
        }
        .nav-masthead {
            float: right;
        }
        }


        /*
        * Cover
        */
        .cover {
        padding: 0 1.5rem;
        }
        .cover .btn-lg {
        padding: .75rem 1.25rem;
        font-weight: 700;
        }

        .loginBtn:hover {
            color: white;
            border: solid #e67d23 1.5px;
            background-color: transparent
        }

        .loginBtn {
            background-color: #e67d23;
            color: white;

        }


        /*
        * Footer
        */
        .mastfoot {
        color: rgba(255, 255, 255, .5);
        }

    </style>
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Exam-Planet</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="/features">Features</a>
        <a class="nav-link" href="/contact">Contact</a>
      </nav>
    </div> 
  </header>
  <br><br><br><br><br><br><br><br><br>
  <div class="nav nav-masthead justify-content-center">
  <div class="content">
  <main role="main" class="inner cover">
    <h1 class="cover-heading">ABDELMALEK ESSAADI UNIVERSITY  </h1>
    <p class="lead">Welcome to ABDELMALEK ESSAADI UNIVERSITY Computer Based Testing Platform, do follow instructions and goodluck in your exams.</p>
    <p class="lead">
          @if (Route::has('login'))
                <div class="top-right links">
                  {{-- <a href="{{ url('/admin') }}" class="btn btn-lg btn-secondary mr-2">Admin Login</a> --}}
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-lg loginBtn">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-lg loginBtn">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    </p>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel">
                @component('components.who');
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
  </main>
    </div>
    </div>

  <footer class="mastfoot mt-auto">
  </footer>
</div>
</body>
</html>

