@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->


  @section('content')

 <br>
 <br>
 <br>
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
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{$blog_details->username}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$blog_details->created_at}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12
                      Comments</a></li>

                   <li class="d-flex align-items-center"><i class="fa fa-list-alt" aria-hidden="true"></i> <a href="blog-single.html">Categories : 


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
                  {{ $blog_details->blog_content }}
                </p>
               


              </div>

             
            </article><!-- End blog entry -->

            

         
           		<div class="card card-widget">
              
            
              <!-- /.card-body -->
              <div class="card-footer card-comments">
               
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="{{asset('frontend_assets/img/comments_img/user3-128x128.jpg')}}" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Maria Gonzales
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="{{asset('frontend_assets/img/comments_img/user5-128x128.jpg')}}" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Nora Havisham
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    The point of using Lorem Ipsum is that it hrs a morer-less
                    normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
              </div>
              <!-- /.card-footer -->
              <div class="card-footer">
                <form action="#" method="post">
                  <img class="img-fluid img-circle img-sm" src="{{asset('frontend_assets/img/comments_img/user4-128x128.jpg')}}" alt="Alt Text">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <textarea class="form-control"></textarea>
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


