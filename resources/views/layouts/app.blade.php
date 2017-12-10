<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @yield('meta')

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" >
    <!--<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.5.2/angular.min.js"></script>-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="{{url('public/media/front/css/style.css')}}">
    
    <script type="text/javascript"  src="{{url('public/media/front/js/jquery-v2.1.3.js')}}"></script>
   
      <!-- Styles -->
   <link href="{{url('public/media/backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
 
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <script>
    var javascript_site_path='{{url('')}}/';
   </script>            
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
<!--            <div class="navbar-header">

                 Collapsed Hamburger 
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                 Branding Image 
                <a class="navbar-brand" href="{{ url('/') }}">
                    PIPL LARAVEL LIBRARY
                </a>
            </div>-->

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
<!--                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                     <li><a href="{{ url('/about-us') }}">About Us</a></li>
                     <li><a href="{{ url('/faqs') }}">FAq's</a></li>
                     <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                </ul>-->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
<!--                        <li><a href="{{ url('/login') }}">Login</a></li>-->
                        <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>My Profile</a></li>
                                 <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
<script src="{{url('public/media/backend/js/jquery-v2.1.3.js')}}" type="text/javascript"></script>
    <script src="{{url('public/media/backend/js/bootstrap.min.js')}}" type="text/javascript"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
 <script type="text/javascript"  src="{{url('public/media/front/js/jquery.validate.js')}}"></script>  
    <script type="text/javascript"  src="{{url('public/media/front/js/validation.js')}}"></script>
</body>
</html>
