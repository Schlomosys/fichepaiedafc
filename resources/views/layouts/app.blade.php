<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    #loader{
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 120px;
        height: 120px;
        margin: -76px 0 0 -76px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
      }
      
      @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
      }
      
      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
      
      /* Add animation to "page content" */
      .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
      }
      
      @-webkit-keyframes animatebottom {
        from { bottom:-100px; opacity:0 } 
        to { bottom:0px; opacity:1 }
      }
      
      @keyframes animatebottom { 
        from{ bottom:-100px; opacity:0 } 
        to{ bottom:0; opacity:1 }
      }
      
      #myDiv {
        display: none;
        text-align: center;
      }
      </style>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"/>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

<!-- Styles -->

    <!--Color Picker-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
    
   <!--SHARE-->
   <script src="https://kit.fontawesome.com/5846046699.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
      <!--  <nav class="navbar fixed-top navbar-light bg-light">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png" alt="Company Logo">
            <div class="menu-toggle" id="mobile-menu">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
            <ul class="nav no-search">
              <li class="nav-item"><a href="#">Home</a></li>
              <li class="nav-item"><a href="#">About</a></li>
              <li class="nav-item"><a href="#">Work</a></li>
              <li class="nav-item"><a href="#">Careers</a></li>
              <li class="nav-item"><a href="#">Contact Us</a></li>
              <i class="fas fa-search" id="search-icon"></i>
              <input class="search-input" type="text" placeholder="Search..">
            </ul>
          </nav>-->
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>--}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Remove the container if you want to extend the Footer to full width. -->


    <footer class="text-white text-center text-lg-start" style="background-color: #f7901b; height:50%;">
      <!-- Grid container -->
      <div class="container p-3">
        <!--Grid row-->
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <img class="photocouv" alt="100x100" src="{{ asset("uploads/images/daflogo.png") }}" data-holder-rendered="true" style=" height:100px; width:250px;"></a>
             
            </div>
          <!--Grid column-->
          {{--<div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4"></h5>
  
            <p>
                Dedras ONG
                BP 215 Parakou
                Sinagourou 3
                Route de Cotonou
                République du Bénin
            </p>
  
            <p>
              
            </p>
  
            <div class="mt-4">
              <!-- Facebook -->
              <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-facebook-f"></i></a>
              <!-- Dribbble -->
              <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-dribbble"></i></a>
              <!-- Twitter -->
              <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-twitter"></i></a>
              <!-- Google + -->
              <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-google-plus-g"></i></a>
              <!-- Linkedin -->
            </div>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <!--<h5 class="text-uppercase mb-4 pb-1">Search something</h5>
  
            <div class="form-outline form-white mb-4">
              <input type="text" id="formControlLg" class="form-control form-control-lg">
              <label class="form-label" for="formControlLg" style="margin-left: 0px;">Search</label>
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 48.8px;"></div><div class="form-notch-trailing"></div></div></div>-->
  
            <ul class="fa-ul" style="margin-left: 1.65em;">
              <li class="mb-3">
                <span class=""></span><span class="ms-2">Contact</span>
              </li>
              <li class="mb-3">
                <span class=""><i class="fas fa-envelope"></i></span><span class="ms-2" style="padding-left: 10px;"> info@dedras.org</span>
              </li>
              <li class="mb-3">
                <span class=""><i class="fas fa-phone"></i></span><span class="ms-2" style="padding-left: 10px;">+229 9585 1708</span>
              </li>
              <li class="mb-3">
                <span class=""><i class="fas fa-phone"></i></span><span class="ms-2" style="padding-left: 10px;"> +229 9737 2972</span>
              </li>
            </ul>
          </div>
          <!--Grid column-->
           <!--Grid column-->
        <div class="col">
            <h5 class="text-uppercase">HEURES D'OUVERTURE</h5>
  
            <table class="table text-center text-white">
              <tbody class="font-weight-normal">
                <tr>
                  <td>Lun - Ven:</td>
                  <td>8h-30 - 12h-30</td>
                  <td>15h-00 - 18h-30</td>
                </tr>
                
              </tbody>
            </table>
          </div>
  
          <!--Grid column-->
          
          <!--Grid column-->
        </div>--}}
    </div>
        <!--Grid row-->
      
      <!-- Grid container -->
      
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="">DEDRAS ONG</a>
      </div>
      
      <!-- Copyright -->
    </footer>
    
  
  <!-- End of .container -->
</html>
