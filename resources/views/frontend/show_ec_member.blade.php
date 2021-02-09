@extends('layouts.frontend_header')



<br>
<br>
 <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">

         
          <div class="col-lg-12">

          	<h2 class="text-center">EC Members</h2>
            <br>
            <div class="row">


              <div class="col-lg-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><a href="{{url('single_member_profile')}}"><img src="{{ asset('frontend_assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></a></div>
                  <div class="member-info">
                    <a href="{{url('single_member_profile')}}"><h4>Walter White</h4></a>
                    <span>Chief Executive Officer</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="{{ asset('frontend_assets/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="{{ asset('frontend_assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="{{ asset('frontend_assets/img/team/team-4.jpg') }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

@extends('layouts.frontend_footer')