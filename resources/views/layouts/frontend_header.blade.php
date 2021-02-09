<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bethany Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend_assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend_assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend_assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend_assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend_assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.2.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="{{ url('/') }}"><span>WAEPA</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="#about">About</a></li>
           
            <li class="drop-down"><a href="">Member</a>
              <ul>
                <li><a href="{{url('show_ec_member')}}">EC Member</a></li>
                
                <li><a href="{{url('show_life_member')}}">Life Member</a></li>
                <li><a href="{{url('show_general_member')}}">General Member</a></li>
               
              </ul>
            </li>
            <li><a href="#contact">Constitution</a>

            </li>
            
            <li class="drop-down"><a href="">Digital Archive</a>
              <ul>

                <li><a href="{{url('')}}">WAEPA Talk</a></li>
                
                <li><a href="{{url('')}}">Gallery</a></li>
                
              </ul>
            </li>

             <li><a href="{{url('member_registration')}}">Member Registration</a></li>
             <li><a href="{{url('blog')}}">Blog</a></li>

            <li><a href="{{url('contact')}}">Contact Us</a></li>

            
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->