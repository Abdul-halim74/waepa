@extends('layouts.master_backend')




@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit  Seminar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit Seminar</li>
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
                <h3 class="card-title">Edit Content</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/seminar_update')}}" method="post" enctype="multipart/form-data">

              	@csrf

                <div class="card-body">

                  <input type="hidden" name="hidden_id" value="{{$data->id}}">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="" name="title" value="{{$data->heading}}" placeholder="Enter E-Newsletter Heading">
                  </div>


                   <div class="form-group">

                      <label for="exampleInputEmail1">Excerpt</label>

                      <textarea class="form-control summernote" name="excerpt" rows="10">{!!$data->excerpt!!}</textarea>

                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control summernote"  name="description" rows="10">{!!$data->content!!}</textarea>
                  </div>


                  
                  <div class="form-group">
                    <label for="exampleInputFile">Image </label> <span>(It should at least 1024 * 768 px)</span>

                    <div class="form-group">
                     <img src="{{asset('uploads/seminar')}}/{{$data->image}}" height="100" width="100">
                        <input type="file" class="form-control" name="image">
                       
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



