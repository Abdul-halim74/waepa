@extends('layouts.master_backend')


@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item"><a href="#">Slider</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">



        

        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">


              <div class="card-header">
                <h3 class="card-title">Create Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
           <br>

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('success'))
            <span class="text-info"> {{ session()->get('success') }}</span>
        @endif

             <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">

            @csrf
              
            

                  <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Name : </label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="" name="name" value=""  placeholder="Slider Name">
                      </div>
                  </div>

                  <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Title : </label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="" name="title" value=""  placeholder="Slider Title">
                      </div>
                  </div>

                  <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Link : </label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="" name="link" value=""  placeholder="Url Link">
                      </div>
                  </div>

                  <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Image : </label>
                      <div class="col-lg-9">
                        <input type="file" class="form-control" id="" name="img" value=""  placeholder="Image">
                      </div>
                  </div>


            
                 
                  <div class="form-group row" style="margin-left: 16px;">

                     <input type="submit" name="submit" class="btn btn-primary" >

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



