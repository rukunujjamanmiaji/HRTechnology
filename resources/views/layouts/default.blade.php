<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="ISO-8859-1">
    <title>
        Md. Rukunujjaman Maiji
    </title>

        <link href="css/contracts.css" rel="stylesheet" type="text/css" media="all"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Developer"
          content="Designed and developed by Md. Rukunujjaman Miaji , email. rukucse11@gmail.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="main-content">
    <header style="margin-bottom: 50px">
        <!-- Brand and toggle get grouped for better mobile display -->
        <nav class="navbar navbar-inverse navbar-fixed-top "
             role="navigation">
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                   <li><a href="{{route('home')}}">
                                           <i class="fa fa-home fa-lg" aria-hidden="true">
                                           </i>
                                           HR Technology
                                       </a></li>
                                <li><a href="{{ route('contacts') }}">Home</a></li>
                                <li><a href="{{ route('aboutme') }}">Aboutme</a></li>
                                <li><a href="{{ route('research') }}">Research</a></li>


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">My Resume<span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('academic') }}">Academic</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">My Portfolio<span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('web') }}">Web Development</a></li>
                                    </ul>
                                </li>


                                <li><a href="{{ route('contact') }}">Contact Me</a></li>

                                <!-- .site-navigation -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

</div>

<div class="container clearfix">
    @yield('content')
</div>
</body>
<footer id="footer" class="white-bg" role="contentinfo">
    <div class="container-fluid">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="site-info">
                        <p style="text-align: center; margin: 10px;">
                            All Content &copy 2017, Md. Rukunujjaman Miaji, All Rights Reserved &nbsp <a
                                class="btn btn-primary" href="https://www.facebook.com/rukunujjaman.miaji"
                                target="_blank"><i class="fa fa-facebook"></i></a>&nbsp <a class="btn btn-danger"
                                                                                           href="https://plus.google.com/u/0/112785827430209654242"
                                                                                           target="_blank"><i
                                class="fa fa-google-plus "></i></a>&nbsp <a class="btn btn-info"
                                                                            href="https://www.linkedin.com/in/md-rukunujjaman-miaji-b5323212a/"
                                                                            target="_blank"><i
                                class="fa fa-linkedin "></i></a>
                        </p>

                    </div><!-- close .site-info -->

                </div>
            </div>
        </div>
    </div><!-- close .container -->
</footer><!-- close #colophon -->
<script src="js/script.w3-include-HTML"></script>
</html>


