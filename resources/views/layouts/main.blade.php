<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','HR technology')
    </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .alert.parsley {
            margin-top: 5px;
            margin-bottom: 0px;
            padding: 10px 15px 10px 15px;
        }
        .check .alert {
            margin-top: 20px;
        }
        .credit-card-box .panel-title {
            display: inline;
            font-weight: bold;
        }
        .credit-card-box .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 100%;
        }
        .credit-card-box .display-tr {
            display: table-row;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
<script>

    $(function()
    {
        $( "#q" ).autocomplete({
            source: "route('search')",
            minLength: 3,
            select: function(event, ui) {
                $('#q').val(ui.item.value);
            }
        });
    });

</script>
</head>
<body>
<div class="top-bar">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <!--Header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#topNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{route('home')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                        HR Technology
                    </a>
                </h4>
            </div>
        </div>
        <!--Items -->
        <div class="collapse navbar-collapse" id="topNavBar">

            <ul class="nav navbar-nav navbar-right">
                <div class="top-bar-right">
                    <ol class="menu">
                        <li>
                            {{ Form::open(['action' => ['DemoController@autocomplete'], 'method' => 'GET']) }}
                            {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Enter Product name'])}}
                            {{ Form::submit('Search', array('class' => 'button expand')) }}
                            {{ Form::close() }}
                        </li>
                        <li>
                            <a href="{{route('products')}}">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contacts')}}">
                                Contacts
                            </a>
                        </li>
                        <li>
                            <a href="{{route('cart.index')}}">
                                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                                </i>
                                CART
                                <span class="alert badge">
                               {{Cart::count()}}
                            </span>
                            </a>
                        </li>
                    </ol>
                </div>
            </ul>
        </div>
    </div>
</nav>
</div>
@yield('content')
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p>Coded with love by Webdevmatics for educational purpose only</p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque
                nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Follow Us</h4>
            <ul class="footer-links">
                <li><a href="https://github.com/1104028">GitHub</a></li>
                <li><a href="https://www.facebook.com/rukunujjaman.miaji">Facebook</a></li>
                <li><a href="https://twitter.com/RUKUNUJJAMAN_M?lang=en">Twitter</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>
