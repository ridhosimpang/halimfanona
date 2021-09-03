<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT. Halim Fanona</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Bethany/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('Bethany/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Bethany/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Bethany/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('Bethany/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Bethany/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('Bethany/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('Bethany/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('Bethany/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Bethany/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.2.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <title>@yield('title')</title>
</head>

<body>
  <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    {{-- @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li> --}}
    {{-- @endguest --}}
</ul>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.html"><span>PT. Halim Fanona</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#profil">Profil</a></li>
            <li><a href="#contact">Contact</a></li>
           <li class="get-started">
            @auth
                <a href="{{ url('/admin') }}">Dashboard</a>
            @else
                <a href="/loginAdmin"> Login</a>
            @endauth
            </li>
            
            {{-- <li class="get-started"><a href="#about">Login</a></li> --}}
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->
@yield('container')
  <!-- ======= Hero Section ======= -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('Bethany/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('Bethany/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Bethany/assets/js/main.js')}}"></script>
</body>

</html>