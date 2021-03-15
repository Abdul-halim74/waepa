@php
  use App\Http\Controllers\CommentCountController;
@endphp

@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->
@section('css')

<style type="text/css">

.page-item.active .page-link {
     
      background-color:#ff284f !important;
      border-color:#ff284f !important;
  }

</style>

@endsection

  @section('content')


 <br>
 <br>
 <br>
 <br>
 <br>



      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Events</a></li>
              <li class="breadcrumb-item active">General Meeting</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


 <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">


            @foreach($enewsletter_data as $single_blog_info)

            <article class="entry">

             

              <div class="entry-img">
                <img src="{{ asset('uploads/general_meeting')}}/{{$single_blog_info->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{url('general_meeting_details')}}/{{$single_blog_info->id}}">{{$single_blog_info->heading}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">{{$single_blog_info->username}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">{{$single_blog_info->created_at}}</time></a></li>


                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{url('seminar_details')}}/{{$single_blog_info->id}}">

                  @php 
                    echo CommentCountController::getCommentCount4( $single_blog_info->id )
                  @endphp

                  </a></li>


                                      

                </ul>


              </div>



              <div class="entry-content">
                  <div class="row">
                <p style="font-weight: lighter; font-size: 12px;">
                  {!! $single_blog_info->excerpt !!}
                </p>

                <div class="read-more offset-md-10" style="">
                  <a href="{{url('general_meeting_details')}}/{{$single_blog_info->id}}">Read More</a>
                </div>
              </div>

            </div>

             

            </article><!-- End blog entry -->

            @endforeach
          

             {{ $enewsletter_data->links() }}

          </div><!-- End blog entries list -->

              <div class="col-lg-4">
                              <div class="sidebar">
                  
                              <h3 class="sidebar-title">Search</h3>
                  <div class="sidebar-item search-form">
                    <form action="">
                      <input type="text">
                      <button type="submit"><i class="icofont-search"></i></button>
                    </form>
                  </div><!-- End sidebar search formn-->
                  
                  
                                  
                  
                                <h3 class="sidebar-title">Recent Posts</h3>
                  
                                <div class="sidebar-item recent-posts">
                  
                                  @foreach($recent_enewsletter_data as $single_blog)
                                  <div class="post-item clearfix">
                                    <img src="{{ asset('uploads/general_meeting')}}/{{$single_blog->image}}" alt="">
                                    <h4><a href="{{url('general_meeting_details')}}/{{$single_blog->id}}">{{$single_blog->heading}}</a></h4>

                                    <time datetime="2020-01-01">{{$single_blog->created_at}}</time>
                                  </div>
                                  @endforeach
                                  
                                </div><!-- End sidebar recent posts-->
                  
                               
                  
                              </div><!-- End sidebar -->
                  
                            </div><!-- End blog sidebar -->

        </div><!-- End .row -->

      </div><!-- End .container -->

    </section><!-- End Blog Section -->


  @endsection


