@extends('layouts.master_backend')


@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit Blog</li>
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
                <h3 class="card-title">Blog Content</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/update_blog_action')}}" method="post" enctype="multipart/form-data">
              	@csrf

                <div class="card-body">

                  <input type="hidden"  name="hidden_id" value="{{$single_post_info->id}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>

                    <input type="text" class="form-control" id="" name="edit_title" placeholder="Enter Blog Heading" value="{{$single_post_info->blog_heading}}">
                  </div>


                   <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="edit_description" name="description" rows="10">{{$single_post_info->blog_content}}</textarea>
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



  @if(Session::has('status'))

  	<script type="text/javascript">
  		toastr.success("{!!Session::get('status')!!}");
  	</script>

  @endif


@endsection



