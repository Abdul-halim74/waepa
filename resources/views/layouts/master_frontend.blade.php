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
         <a  href="@if(isset(Auth::user()->name))  {{url('index')}} @else {{url('/')}}  @endif"><img src="{{ asset('frontend_assets/img/logo.png') }}"></a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block" style="margin: 0 auto;">
          <ul>

            <li class="active"><a href="@if(isset(Auth::user()->name))  {{url('index')}} @else {{url('/')}}  @endif">Home</a></li>

            <li class="drop-down" ><a href="{{url('about/about_us')}}">About WAEPA </a>

              <ul>

                  <li><a href="{{url('about/programs_of_waepa')}}">Launching of WAEPA</a></li>

                <li><a href="{{url('about/vission_mission')}}">Vision & Mission</a></li>
                <li><a href="{{url('about/aims_and_object')}}">Aims and Objectives</a></li>
              
               
              </ul>

            </li>


              <li class="drop-down" ><a href="">Membership</a>

              <ul>

                <li><a href="{{url('eligibility_of_membership')}}">Eligibility of Membership </a></li>
               
                <li><a href="{{url('member_registration')}}">Apply for Membership</a></li>
              </ul>

            </li>

           
            <li class="drop-down"><a href="">Members</a>
              <ul>
               
                  <li><a href="{{url('show_general_member')}}">General Members</a></li>
                <li><a href="{{url('show_life_member')}}">Life Members</a></li>
                <li><a href="{{url('show_honourable_member')}}">Honorary Members</a></li>
              
               
              </ul>
            </li>

             <li class="drop-down"><a href="">EC'S</a>
              <ul>
                <li><a href="{{url('show_ec_member')}}">Current Executive Committee</a></li>
                 <li><a href="{{url('show_former_ec_member')}}">Former Executive Committees</a></li>
              
               
              </ul>
            </li>
            
         <!--    <li><a href="#contact">Constitution</a> -->

            </li>

            <li><a href="{{url('waepatalk')}}">WAEPA Talks</a></li>
            
           <!--  <li class="drop-down"><a href="">Digital Archive</a>
              <ul>

                <li><a href="{{url('waepatalk')}}">WAEPA Talk</a></li>
                
                <li><a href="{{url('waepagallary')}}">Gallery</a></li>
                
              </ul>
            </li> -->


           


            <li class="drop-down" ><a href="">Events</a>

              <ul>

                <li><a href="{{url('frontend/seminar')}}">Seminar / Workshop </a></li>
               
                <li><a href="{{url('frontend/general_meeting')}}">General Meeting</a></li>
                <li><a href="{{url('frontend/social_events')}}">Social Events</a></li>
              </ul>

            </li>


            <li class="drop-down" ><a href="">News</a>

              <ul>

                <li><a href="{{url('frontend/enewsletter')}}">E-Newsletter</a></li>   
                <li><a href="{{ url('frontend/notice') }}">Job Circular</a></li>
             
              </ul>

            </li>


            <li class="drop-down" ><a href="">Archive</a>

              <ul>

                <li><a href="{{url('waepagallary')}}">Gallery</a></li>   
                <li><a href="{{url('archive/constitution')}}">Constitution</a></li>
                <li><a href="{{url('frontend_blog')}}">Publications</a></li>
             
              </ul>

            </li>


             
              <li><a href="{{url('contact')}}">Contact Us</a></li>

            <!--  <li><a href="{{url('frontend_blog')}}">Blog</a></li>
             <li><a href="{{url('notice')}}">Notice</a></li>
 -->
          <!--   <li><a href="{{url('contact')}}">Contact Us</a></li> -->
            <li style="@if(isset(Auth::user()->email))
              display: none;
              @endif
             "><a href="{{url('frontend/login')}}">Login</a></li>

            <li class="drop-down" style="@if(!isset(Auth::user()->email))

             display: none;
              @endif
            "><a href="">@if(isset(Auth::user()->name))  {{Auth::user()->name}}  @endif</a>
              <ul>
                <li><a href="

                @if(isset(Auth::user()->id))

                  {{url('frontend/my_profile')}}/{{Auth::user()->id}}

                @endif">Profile</a></li>
                
                <li><a href="{{url('frontend/logout')}}">Logout</a></li>
               
               
              </ul>

            </li>

              


          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
   
  </header><!-- End Header -->


   @yield('content')




     @include('layouts.frontend_footer')

@yield('js')




</body>

</html>