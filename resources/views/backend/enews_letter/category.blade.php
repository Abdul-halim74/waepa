@extends('layouts.master_backend')




@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>E-Newsletter Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Create E-Newsletter Category</li>
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
                <h3 class="card-title">E-Newsletter Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/create_enewsletter_category_action')}}" method="post" enctype="multipart/form-data">
              	@csrf

                <div class="card-body">

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="" name="category_name" placeholder="Eneter Category Name">
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
          	<div class="card card-success">
          		 <div class="card-header">
	                <h3 class="card-title">E-Newsletter Category List</h3>
	              </div>

	               <div class="card-body">

	               	<table class="table table-bordered">
	               		<thead>
	               			<tr>
	               				<th>Category Name</th>
	               				<th>Action</th>
	               			</tr>
	               		</thead>
	               		<tbody>

	               			@foreach($data as $single_category)
	               			<tr>
	               				<td>{{$single_category->category_name}}</td>
	               				<td><a target="_blank" href="{{url('edit_enewsletter_cat')}}/{{$single_category->id}}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt" style="color: #fff;">
	               					
                              </i></a> | <button class="btn btn-danger btn-sm" onclick="deletebtn({{$single_category->id}})"><i class="fas fa-trash" style="color: #fff;">
                              </i></button></td> 
	               			</tr>

	               			@endforeach
	               		</tbody>
	               	</table>
              
                  
                </div>

          	</div>	

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
            url: "{{ url('admin/single_enewsletter_delete') }}",
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
