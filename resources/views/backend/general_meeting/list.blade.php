@extends('layouts.master_backend')



@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Meeting List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item"><a href="#">General Meeting</a></li>
              <li class="breadcrumb-item active">General Meeting List</li>
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
                <h3 class="card-title">General Meeting List</h3>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Title</th>
                     

                      <th>Short Description</th>
                      <th>General Meeting Image</th>
                     
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      @php $sn=1 @endphp  
                 @foreach($data as $single_data)

                  <tr>
                    
                    <td class="slNo sl_no{{ $single_data->id }}" data-row_id="{{ $single_data->id }}">{{ $sn++}}</td>
                    <td>{{$single_data->heading}}
                    </td>

                    

                    <td>{!!$single_data->excerpt!!}</td>

                    <td> <img src="{{asset('uploads/general_meeting')}}/{{$single_data->image}}" alt="not found" height="100" width="100"></td>

                    <td class="project-actions text-right">

                      <a type="button" style="margin: 5px;" class="btn  btn-primary btn-sm  btnEditRowWithModal"> <i class="fas fa-search" style="color: #fff;">
                              </i>
                              </a>

                         <!--  <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin: 5px;">
                             
                          </a> -->
                         
                          <a class="btn btn-info btn-sm" href="{{url('admin/general_meeting/edit')}}/{{$single_data->id}}" style="margin: 5px;">
                              <i class="fas fa-pencil-alt" style="color: #fff;">
                              </i>
                             
                          </a>
                          
                          <a type="button" onclick="deletebtn({{$single_data->id}})" class="btn btn-danger btn-sm"  style="margin: 5px;">
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
                  
                    <th>Description</th>
                    <th>General Meeting Image</th>
                   
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
    $(".btnEditRowWithModal").click(function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        e.preventDefault();
        var row_id = $(this).closest('tr').find('.slNo').data('row_id');
        var formData = {
            row_id: row_id
        };
        $.ajax({
            type: 'POST',
            url: "{{ url('admin/single_general_meeting_show') }}",
            data: formData,
            success: function(data) {
                $('.view-modal-sm .modal-content').html(data.html);
                $('.view-modal-sm').modal('show');
                console.log(data);
            },
            error: function(response) {
                alert(response);
                console.log(response);
            }
        });
    }); // end -:- Edit Event Using Modal.


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
            url: "{{ url('admin/single_general_meeting_delete') }}",
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