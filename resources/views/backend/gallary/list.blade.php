@extends('layouts.master_backend')



@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallary List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item ">Gallary</li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Gallary List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                  
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                   <?php $sl=1; ?> 
                 @foreach($data as $single_data)   
                  <tr>

                    <td  class="slNo sl_no" data-row_id="{{$single_data->id}}"><?php  echo $sl++; ?></td>

                   
                    <td> {{$single_data->title}}</td>
                    <td> {!!$single_data->content!!}</td>
                    <td><img src="{{asset('uploads/gallary')}}/{{$single_data->img}}" height="100" width="100" alt="not found"></td>

                    <td>

                         <!--  <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin: 5px;">
                             
                          </a> -->
                         
                          <a class="btn btn-info btn-sm" href="{{url('admin/gallary_edit')}}/{{$single_data->id}}" style="margin: 5px;" title="Edit">
                              <i class="fas fa-pencil-alt" style="color: #fff;">
                              </i>
                             
                          </a>
                          
                          <a type="button" title="Delete" onclick="deletebtn({{$single_data->id}})" class="btn btn-danger btn-sm"  style="margin: 5px;">
                              <i class="fas fa-trash" style="color: #fff;">
                              </i>

                          </a>
                        </td>
                  </tr>

                  @endforeach
                 
               
         
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>Sl</th>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Image</th>
                    
                      <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


          
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- start -:- Edit Modal -->
<div class="modal inmodal fade view-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>
<!-- end -:- Edit Modal -->

  @endsection


  @section('js')

  <script type="text/javascript">
  	// start -:- Edit Event Using Modal. 
   

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
            url: "{{ url('admin/single_gallary_delete') }}",
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