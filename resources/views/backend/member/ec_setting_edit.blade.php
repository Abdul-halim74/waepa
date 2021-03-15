@extends('layouts.master_backend')




@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit EC Number</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit EC Number</li>
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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit EC Number</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/edit_ec_number_update')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">

                 
                  <div class="form-group">

                    <input type="hidden" name="hidden_id" value="{{$ec_setting->id}}">

                    <label for="exampleInputEmail1">EC Number</label>
                    <input type="text" class="form-control" id="" name="nth" placeholder="Enter EC Number" value="{{$ec_setting->nth_ec}}">
                  </div>

                  
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="" name="title" placeholder="Enter Title" value="{{$ec_setting->title}}">
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


  @if(Session::has('status2'))

    <script type="text/javascript">
      toastr.warning("{!!Session::get('status2')!!}");
    </script>

  @endif


@endsection



