@extends('layouts.master_backend')




@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create EC Number</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Create EC Number</li>
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
                <h3 class="card-title">Create EC Number</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/create_ec_number_submit')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">

                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">EC Number</label>
                    <input type="text" class="form-control" id="" name="nth" placeholder="Enter EC Number">
                  </div>

                  
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="" name="title" placeholder="Enter Title">
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
        
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">EC Number List</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->


                <table class="table table-bordered">
                    
                    <tr>
                      <th>SL</th>
                      <th>EC Number</th>
                      <th>Title</th>
                      <th>Action</th>
                    </tr>

                    <?php $sl =1; ?>

                  @foreach($ec_setting_data as $single_data)
                    <tr>
                      <td><?php  echo $sl++; ?></td>
                      <td>{{$single_data->nth_ec}}</td>
                      <td>{{$single_data->title}}</td>

                      <th><a href="{{url('admin/ec_setting_data_edit')}}/{{$single_data->id}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> |

                       <a type="button" class="btn btn-danger btn-sm" onclick="deletebtn({{$single_data->id}})" title="Delete "><i class="far fa-trash-alt"></i></a></th>
                    </tr>

                @endforeach
                </table>
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


<script type="text/javascript">
  

    function deletebtn(id){
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });

      

      if(confirm("Want to delete?")) {

     

        var formData = {
              id:id
          };

         $.ajax({
            type: 'POST',
            url: "{{ url('admin/ec_setting_delete') }}",
            data: formData,
            success: function(data) {
              
                console.log(data);
               toastr.success("Delete Success");

                location.reload();
            },
            error: function(response) {
                alert(response);
                console.log(response);
            }
        });

        
      }
    }

</script>


@endsection



