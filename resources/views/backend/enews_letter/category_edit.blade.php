@extends('layouts.master_backend')




@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit E-Newsletter Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit E-Newsletter Category</li>
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
                  <h3 class="card-title">Edit E-Newsletter Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('admin/enewsletter_category_update')}}" method="post" enctype="multipart/form-data">
                	@csrf

                  <div class="card-body">

                    
                    <div class="form-group">
                      
                      <input type="hidden" name="hidden_id" value="{{$data->id}}">
                      <label for="exampleInputEmail1">Edit Category Name</label>
                      <input type="text" class="form-control" id="" name="category_name" placeholder="Eneter Category Name" value="{{$data->category_name}}">
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
