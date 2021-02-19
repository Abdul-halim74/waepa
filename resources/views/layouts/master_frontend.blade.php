<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WAEPA Bangladesh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('layouts.frontend_top_link')

     @yield('css')

  <!-- =======================================================
  * Template Name: Bethany - v2.2.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
   
      <div class="header-container d-flex align-items-center">

        <div class="logo">
         <a  href="{{ url('/') }}"><img src="{{ asset('frontend_assets/img/logo.png') }}"></a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block" style="margin: 0 auto;">
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

                <li><a href="{{url('waepatalk')}}">WAEPA Talk</a></li>
                
                <li><a href="{{url('waepagallary')}}">Gallery</a></li>
                
              </ul>
            </li>

             <li><a href="{{url('member_registration')}}">Member Registration</a></li>
             <li><a href="{{url('blog')}}">Blog</a></li>
             <li><a href="{{url('notice')}}">Notice</a></li>

            <li><a href="{{url('contact')}}">Contact Us</a></li>
            <li><a href="{{url('frontend/login')}}">Login / Sign Up</a></li>

            
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
   
  </header><!-- End Header -->


   @yield('content')




     @include('layouts.frontend_footer')

@yield('js')




</body>

</html>