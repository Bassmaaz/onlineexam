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
        height: %;
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
        <a class="nav-link " href="/">Home</a>
        <a class="nav-link" href="/features">Features</a>
        <a class="nav-link active" href="/contact">Contact</a>
      </nav>
    </div> 
  </header>
  <br><br><br>
  <main class="contentcontainer" id="mainContent" tabindex="-1" aria-label="Easy LMS Main content">
        <div class="row">
            <div class="column medium-7">
                <article>
                    <div class="card card--1">
                        <div class="card__body cmscontent">
                        <span style="color: black;">
                                                        <h1>Contact us</h1>                            <div class="intro">
                                <p><strong>Questions, bug reports, complaints, and compliments &mdash; we&rsquo;re here for it all. Our support team is ready to help you 😀.</strong></p>                            </div>
                            
<p>We know everything. Just ask, we&rsquo;ll answer. Are you not registered for an Exam-Planet account (yet)? Please fill in the contact form and submit your question. Are you already registered for the plan? Please sign in.</p>
<p>Do you prefer to contact one of our consultants? Sign in and start a chat with us. This way, we can tailor your support experience.</p>
<h3>I need to report a bug</h3>
<p>Send us an Email. Please provide us with all the information about the bug you&rsquo;ve found. We can take a look at it together, and if possible, fix it right away. If not, we will make a bug report and update you when it&rsquo;s resolved.</p>
<h3>I want to give feedback</h3>
<p>Are you happy or unhappy with our service and want to give us actionable feedback? We embrace positive and negative feedback with open arms. Please send us everything you want in an Email.</p>
<h2>Other questions</h2>
<p>Do you have questions different from those listed above? Please send us an Email. We are happy to help you 😀.</p>                        </div>
                    </div>
                </article>
                </span>
            </div>

            <div class="column medium-5">
                    <section class="card card--1">
        <div class="card card--1 offset-top-1 medium-offset-top-2">
            <div class="card__body">
            <span style="color: black;">
                <div class="card__title">
                    <h3>Contact us</h3>
                </div>
                <p>
                    Email us: <a href="mailto:examplanet@gmail.com" style="color: red;">examplanet@gmail.com</a>                </p>
            </div>
        </div>
       </span>
    </section>
            </div>
    </main>
