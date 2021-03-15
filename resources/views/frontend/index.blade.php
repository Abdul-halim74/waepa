
@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->
@section('css')



<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="{{asset('frontend_assets/css/default.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('frontend_assets/css/nivo-slider.css')}}" type="text/css" media="screen" />

<style type="text/css">
  .carousel_btn{

    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 15px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px;
    border-radius: 25px;
    transition: 0.5s;
    margin-top: 10px;
   
    color: #fff;
   background: #ff284f;

  }

  .carousel_btn:hover{
    color: #fff !important;
    border: 1px solid #fff;
  }


 


</style>

@endsection


  @section('content')





<div id="wrapper" style="margin-top: 82px;">
    <div class="slider-wrapper theme-default">

      <div id="slider" class="nivoSlider"> 

         @php
                $sliders = DB::table('slider')->where('status', 1)->get();


             @endphp

           @foreach($sliders as $key => $single_slider)

            <img src="{{ asset($single_slider->img) }}" data-thumb="{{ asset($single_slider->img) }}" alt="" title="{{$single_slider->title}}" data-transition="slideInLeft"/> 


          @endforeach  
        
      </div>

    </div>
</div>


  <main id="main">

 

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="padding: 0px 0px !important;">
      <div class="container">

        <div class="row content">

        <div class="col-lg-5">
            <div class="section-title" data-aos="fade-right">
              <h2 style="font-size: 32px;">About Us</h2>

              <p><b>WAEPA BANGLAESH </b> – THE VOICE OF WOMEN TECHNICAL
PROFESSIONALS</p>
            </div>

          </div>

          <div class="col-lg-7 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">


            <h3><b style="color: #ff284f">V</b>ision</h3>
            <p>
             To succeed as the Apex Body and Voice of Women Technical Professionals
of Bangladesh.

            </p>

             <h3><b style="color: #ff284f">M</b>ission</h3>
            <p>
              
             To improve, promote and empower the professional arena of Women
Architects, Engineers and Planners as well as to ensure emancipation of
career women in nation building and networking with national and
international programmes and projects.


            </p>

           
            <p class="font-italic">
             
            </p>


          </div>

          <div class="text-center" style="margin: 0 auto;">
           
             <a class="carousel_btn" href="{{url('about/about_us')}}">Read More </a>
              <br>
           <br>
          
           </div>

          

        </div>

      </div>
    </section><!-- End About Section -->

   <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" style="padding: 4px 0;">
      
      @php
       $advertisment = DB::table('advertisement')->select('title', 'img')->where('status', '1')->orderBy('id', 'desc')->first();
      @endphp
      @if($advertisment !='')

        <img src="{{asset( $advertisment->img)}}" alt="Not Found" width="100%" height="300px">
       
      @else

      @endif

    </section><!-- End Counts Section -->





    <!-- ======= Testimonials Section ======= -->
   <!--  <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Testimonials</h2>
              <p>Magnam dolores commodi suscipit uisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('frontend_assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('frontend_assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('frontend_assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('frontend_assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('frontend_assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>

            </div>
          </div>
        </div>

      </div>

     <div class="text-center custom_margin_top">

      <a href="{{url('show_testimonial') }}" class="show_all">Show All</a>

    </div>

    </section> --><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>EC Member</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

             <?php   $data_aos_delay=100;   ?>

               @foreach($member_register_data as $single_member_data)

                 <?php  $data_aos_delay= $data_aos_delay + 100;?>

                <div class="col-lg-6 mt-4 mt-lg-0 ">
                  <div class="member" data-aos="zoom-in" data-aos-delay="<?php echo $data_aos_delay; ?>">
                    <div class="pic">
                      <a href="{{url('single_member_profile')}}/{{$single_member_data->id}}">

                        <img src="{{ asset('uploads/member_image/member_face') }}/{{$single_member_data->user_img}}" class="img-fluid" alt="">

                      </a>
                      </div>
                    <div class="member-info">
                       <a href="{{url('single_member_profile')}}/{{$single_member_data->id}}"> <h4>{{$single_member_data->name}}</h4> </a>
                      <span>{{$single_member_data->designation_from_waepa}} </span>
                      <p>{{$single_member_data->position}}</p>

                      <p><b>Phone : </b><a href="tel:{{$single_member_data->mobile}}">{{$single_member_data->mobile}}</a></p>
                     <p><b>Email : </b> {{$single_member_data->email}}</p>

                    </div>
                  </div>
              </div>
                @endforeach
             

            </div>

          </div>
        </div>

      </div>

      <br>
       <div class="text-center custom_margin_top">
      
          <a href="{{url('show_ec_member') }}" class="show_all">Show All</a>

      </div>


    </section><!-- End Team Section -->

    <!-- ======= Notice Section ======= -->
    <section id="notice" class="notice section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Job Circular</h2>
              <p>WAEPA Job Circular</p>
            </div>
          </div>
          <div class="col-lg-8">
          
          @php
          $notices =DB::select(DB::raw("SELECT * FROM `notice` where status=1 ORDER BY id DESC limit 10"));
          @endphp

          @foreach($notices  as $notice)


              <a target="_blank" href="{{ url('frontend_notice_details', $notice->id)}}">{{$notice->title}}</a> <br>
              <hr>
             

   @endforeach

          </div>
        </div>

      </div>

      <br>
       <div class="text-center custom_margin_top">
      
          <a href="{{url('frontend/notice') }}" class="show_all">Show All</a>

      </div>


    </section><!-- End Notice Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact Us</h2>

             
                <div class="info">

                 <h3><b  style="color: #ff284f">C</b>ontact <b style="color: #ff284f">P</b>erson 1</h3> <hr>

               <b>Name : </b> <span>  Ar. Selina Afroza </span> <br>

     <b>Designation : </b>            
 <ul>
   <li>President WAEPA</li>
   <hr>
   <li>President WAEPA
Head of Architecture Department
Shanto-Mariam University of Creative Technology
(SMUCT), Uttara, Dhaka.</li>
 <hr>

<li>Chairman at Archetype Limited, Dhaka.</li>
<hr>

<li>Former Additional Chief Architect at Department of Architecture,
Ministry of Housing and Public Works, Government of people's
Republic of Bangladesh, Dhaka.</li>



 </ul>

<b>Contact 1: </b> <span>(T): +8802 8316504</span> <br>

<b>Contact 2: </b> <span>(M): +880 1711677741</span><br>
<b>Email : </b> <span>selinaafroza@yahoo.com</span><br>



                </div>


                <br>
                <br>

                <div class="info">
                 <h3><b  style="color: #ff284f">C</b>ontact <b style="color: #ff284f">P</b>erson 2</h3> <hr>

<b>Name : </b> <span> Ar. Sultana Zakia Rahman</span>
 <b>Designation : </b>    
 <ul>
   <li>General Secretary
Assistant Professor,
State University of Bangladesh,
House-3/1, Apt.-E2, Road-10, Dhanmondi, Dhaka.</li>

 </ul>

<b>Contact : </b> <span> (M): +880 1711686082 </span> <br>

<b>Email : </b> <span> reetarahman07@gmail.com </span>

                </div>
           
             
            


            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
        

            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3652.1615970198673!2d90.38051591498117!3d23.741616184593795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRoad%20no%204%2C%20House%20no.%2011%2C%20Dhanmondi%20R%2FA%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1613735595905!5m2!1sen!2sbd" frameborder="0" allowfullscreen></iframe>

            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location: WAEPA Office</h4>
              <p>Road no 4, House no. 11, Dhanmondi R/A, Dhaka.</p>
            </div>


             <form action="{{url('contact_action')}}" method="post"  >
              @csrf

              
              <br>
              <div class="form-row">
              

                <div class="col-md-6 form-group">


                  <label>Name : </label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  required="" />
                
                </div>
                <div class="col-md-6 form-group">
                   <label>Email : </label>

                  <input type="email" class="form-control" required="" name="email" id="email" placeholder="Your Email" />
                 
                </div>
              </div>
              <div class="form-group">
                  <label>Subject : </label>

                <input type="text" class="form-control" required="" name="subject" id="subject" placeholder="Subject"  />
               
              </div>
              <div class="form-group">
                 <label>Message : </label>

                <textarea class="form-control" name="message" rows="5" required="" placeholder="Message"></textarea>
               
              </div>
            
              <div class="text-center"><button type="submit" name="submit" class="submit_btn">Send Message</button></div>
            </form>

          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  @endsection

  
@section('js')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script type="text/javascript" src="{{asset('frontend_assets/js/jquery.nivo.slider.js')}}"></script>

<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  @if(Session::has('status'))

    <script type="text/javascript">
      toastr.success("{!!Session::get('status')!!}");
    </script>

  @endif


@endsection