@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->


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
              <li class="breadcrumb-item"><a href="#">Archive</a></li>
              <li class="breadcrumb-item">Publications</li>
              <li class="breadcrumb-item active">Publications Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


 <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 entries">


           

            <article class="entry">

             

              <div class="entry-img text-center">
                <img src="{{ asset('uploads/blog_image')}}/{{$blog_details->blog_image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{$blog_details->blog_heading}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">{{$blog_details->username}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">{{$blog_details->created_at}}</time></a></li>
                  

                   <li class="d-flex align-items-center"><i class="fa fa-list-alt" aria-hidden="true"></i> <a href="">Categories : 


                    <?php 
                     $cat = $blog_details->blog_categories;
                    $cat_arry= explode(',', $cat);
                    foreach($cat_arry as $val)
                    {
                      
                      $data = DB::table('blog_categories')->where('id', $val)->first();
                      /*echo "<pre>";
                      print_r($data);*/
                      //echo $data->category_name."<br>";
                      ?>
                      <span class="badge badge-pill badge-danger"> <?php echo $data->category_name." "; ?></span>

                      

                        <?php

                    }
                     ?>

                   </a></li>
                      

                </ul>


              </div>

               <div class="entry-content">

                <p>
                  {!! $blog_details->blog_content !!}
                </p>
               


              </div>

             
            </article><!-- End blog entry -->

            

         
           		<div class="card card-widget">
              
            
              <!-- /.card-body -->
           

              <div class="card-footer card-comments">
              


                @foreach($single_blog_comment as $comment_user)

                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="{{asset('uploads/member_image/member_face')}}/{{$comment_user->user_img}}" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      {{$comment_user->user_name}}
                      <span class="text-muted float-right">   {{$comment_user->entry_date}}</span>
                    </span><!-- /.username -->
                   {{$comment_user->user_comment}}
                  </div>
                  <!-- /.comment-text -->
                </div>

                @endforeach
              
              <dev class="col-md-12 d-flex justify-content-md-center justify-content-center">
                 {{$single_blog_comment->links() }}
              </dev>
                 

              </div>
              <!-- /.card-footer -->
              <div class="card-footer">
                <form action="{{url('user_frontend_comment_submit')}}" method="post">
                  @csrf

                  <input type="hidden" name="hidden_id" value="{{$blog_details->id}}">

                  <img class="img-fluid img-circle img-sm" src="{{asset('uploads/member_image/member_face')}}/{{$login_user_data->user_img}}" alt="Alt Text">
                  <!-- .img-push is used to add margin to elements next to floating images -->

                  <div class="img-push">
                    <textarea class="form-control" name="comments"></textarea>
                  </div>

                  <br>

                  <div class="text-center">

                   <input type="submit" name="submit" value="Comment" class="btn btn-warning">
                  </div>
                </form>
              </div>
              <!-- /.card-footer -->
            </div>

       

          </div><!-- End blog entries list -->

         

        </div><!-- End .row -->

      </div><!-- End .container -->

    </section><!-- End Blog Section -->


  @endsection


  
@section('js')


  @if(Session::has('status'))

    <script type="text/javascript">
      toastr.success("{!!Session::get('status')!!}");
    </script>

  @endif


@endsection