<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Home</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset ('markups/img/favicon.ico') }}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset ('markups/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset ('markups/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('markups/css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('markups/css/nouislider.css') }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset ('markups/css/jquery.fancybox.css') }}" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="{{ asset ('markups/css/theme-color/default-theme.css') }}" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="{{ asset ('markups/css/style.css') }}" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="aa-price-range">  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    1-900-523-3564
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@markups.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                    @if(!session('user'))
                      <a href="{{route('register')}}" class="aa-register">Register</a>
                      <a href="{{route('login')}}" class="aa-login">Login</a>
                    @else
                      <a href="{{route('logout')}}" class="aa-login">Logout</a>
                    @endif
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  @include('site.includes.navbar')
  <!-- End menu section -->

  @yield('content')

  <!-- Footer -->
  @include('site.includes.footer')
  <!-- / Footer -->

 
  
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="{{ asset('markups/js/jquery.min.js') }}"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('markups/js/bootstrap.js') }}"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="{{ asset('markups/js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ asset('markups/js/nouislider.js') }}"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="{{ asset('markups/js/jquery.mixitup.js') }}"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="{{ asset('markups/js/jquery.fancybox.pack.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ asset('markups/js/custom.js') }}"></script> 

  </body>
</html>