@extends('layouts.master_backend')




@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vision & Mission</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Vision & Mission</li>
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
                <h3 class="card-title">Vision & Mission</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/vision_mission_submit')}}" method="post" enctype="multipart/form-data">
              	@csrf

                <div class="card-body">

              
                   <div class="form-group">
                    <label for="exampleInputEmail1">Vision</label>

                    <textarea class="form-control summernote" name="vision"  rows="10">{{$vision_mission_data->vision}}</textarea>

                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Mission</label>
                    
                    <textarea class="form-control summernote" name="mission"  rows="10">{{$vision_mission_data->mission}}</textarea>

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



