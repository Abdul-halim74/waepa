@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

  @section('content')



<br>
<br>
 <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">

         
          <div class="col-lg-12">

          	<h2 class="text-center">Life Members</h2> <br>
            <div class="row">

          <?php   $data_aos_delay=100;   ?>

              @foreach($member_register_data as $single_member_data)

                <?php  $data_aos_delay= $data_aos_delay + 100;?>

                <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="<?php echo $data_aos_delay; ?>">
                  <div class="pic">
                    <a href="{{url('single_member_profile')}}/{{$single_member_data->id}}">

                      <img src="{{ asset('uploads/member_image/member_face') }}/{{$single_member_data->user_img}}" class="img-fluid" alt="">

                    </a>
                    </div>
                  <div class="member-info">
                     <a href="{{url('single_member_profile')}}/{{$single_member_data->id}}"> <h4>{{$single_member_data->name}}</h4> </a>
                    <span>{{$single_member_data->designation_from_waepa}} </span>
                    <p>{{$single_member_data->position}} </p>

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
    </section><!-- End Team Section -->

  @endsection