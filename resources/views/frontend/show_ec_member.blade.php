@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

@section('css')

<style type="text/css">
  
    button.control {
          margin-top: 10px;
        }


</style>
@endsection

  @section('content')




<br>
<br>


  <section id="team" class="team">
     
    <div class="container"> <!--section heading-->
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center">
          <h2><span  style="color: #ff284f">EC</span> Member </h2>
          </div>
        </div>
      </div>
   
    
      <div class="mixit-wrapper text-center"> <!--start mixit-wrapper--> 
        <div class="controls">

            <button type="button" class="control" data-filter="all">ALL</button>

          <?php
            $ec_setting_data = DB::table('ec_setting')->orderBy('id','DESC')->limit(10)->get();

            foreach ($ec_setting_data as $key => $value) {
             
          ?>

        

          <button type="button" class="control"  onclick="my_func(id);" data-filter=".{{$value->nth_ec}}" id="{{$value->title}}">{{$value->nth_ec}}</button>
         
          

          <?php

            }
          ?>
         

          <br>
          <br>

        </div>

        <h3 class="ec_committe_waepa"></h3>

        <br>

        <div class="container-mixit" data-ref="mixitup-container">

          <div class="row">
            
                @foreach($member_register_data as $single_member_data)
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="item {{$single_member_data->ec_setting_number}}" data-ref="mixitup-target">
                      <div class="member" data-aos="zoom-in" data-aos-delay="">
                            <div class="pic">
                              <a href="{{url('single_member_profile')}}/{{$single_member_data->member_user_id}}">

                                <img src="{{ asset('uploads/member_image/member_face') }}/{{$single_member_data->user_img}}" class="img-fluid" alt="">

                              </a>
                              </div>

                              <div class="member-info">
                               <a href="{{url('single_member_profile')}}/{{$single_member_data->member_user_id}}"> <h4>{{$single_member_data->name}}</h4> </a>
                              <span>{{$single_member_data->designation_from_waepa}} </span>
                              <p>{{$single_member_data->position}} </p>

                               <p><b>Phone : </b><a href="tel:{{$single_member_data->mobile}}">{{$single_member_data->mobile}}</a></p>
                               <p><b>Email : </b> {{$single_member_data->email}}</p>
                          </div>

                          </div>
                    </div>

                </div>

                @endforeach


               
         
          </div>
        </div>
      </div>  <!--end mixit-wrapper--> 

       </div>  <!--section heading-->
  </section>  <!--end portfolio section-->




  @endsection



  @section('js')


  <script type="text/javascript" src="{{ asset('frontend_assets/js/mixitup.min.js') }}"></script>


  <script type="text/javascript">
    function my_func(id){
      // alert(id);


       $(".ec_committe_waepa").html(id);
    }
  </script>

  @endsection