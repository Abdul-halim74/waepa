@extends('layouts.master_backend')


@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Publications</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit Publications</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Publications Content</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/update_blog_action')}}" method="post" enctype="multipart/form-data">
              	@csrf

                <div class="card-body">

                  <input type="hidden"  name="hidden_id" value="{{$single_post_info->id}}">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Select Publications Category</label>

                     <?php 
                    $cat = $single_post_info->blog_categories;
                    $cat_arry= explode(',', $cat);
                    foreach($cat_arry as $val)
                    {
                      
                      $data = DB::table('blog_categories')->where('id', $val)->first();
                      /*echo "<pre>";
                      print_r($data);*/
                      //echo $data->category_name."<br>";
                      ?>
                    

                      

                        <?php

                    }
                     ?>

                      <select class="selectpicker form-control" name="blog_category[]" multiple data-live-search="true">
                        

                        <option value="">Select Category</option>

                       @foreach($all_categories as $single_blog_cat)
                        <option value="{{ $single_blog_cat->id }}"

                            @if(in_array($single_blog_cat->id, $blog_categories ))  
                              selected
                            @endif

                          >{{ $single_blog_cat->category_name }}</option> 
                          
                          <!-- here , single_blog_cat from category table and  blog_categories from blogs tabale  -->          
                       @endforeach

                      </select>

                   </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>

                    <input type="text" class="form-control" id="" name="edit_title" placeholder="Enter Blog Heading" value="{{$single_post_info->blog_heading}}">
                  </div>



                   <div class="form-group">
                    <label for="exampleInputEmail1">Excerpt</label>
                    
                    <textarea class="form-control summernote" name="exceprt" rows="10">{{$single_post_info->excerpt_text}}</textarea>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control summernote" name="edit_description" name="description" rows="10">{{$single_post_info->blog_content}}</textarea>
                  </div>


                  
                  <div class="form-group">


                    <label for="exampleInputFile">Image </label> <span>(It should at least 1024 * 768 px)</span>

                   
                    <div class="form-group">
                         <img src="{{asset('uploads/blog_image')}}/{{$single_post_info->blog_image}}" alt="not found" width="100" height="100">

                         
                        <input type="file" class="form-control" name="edit_blog_image">

                    </div>


                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 <input type="submit" name="submit" class="btn btn-primary" value="submit">
                </div>
              </form>
            </div>
            <!-- /.card -->

        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('js')

<script>
  $(function () {
    //Add text editor
    $('.summernote').summernote()
  })
</script>


  @if(Session::has('status'))

  	<script type="text/javascript">
  		toastr.success("{!!Session::get('status')!!}");
  	</script>

  @endif


@endsection



