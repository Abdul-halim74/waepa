@extends('layouts.master_backend')



@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Member List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item ">Member</li>
              <li class="breadcrumb-item active">Member List</li>
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
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Organization</th>
                    <th>user image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     @php $sn=1 @endphp   

                    @foreach($data as $single_data)   
                  <tr>


                    <td  class="slNo sl_no{{ $single_data->id }}" data-row_id="{{ $single_data->id }}">{{ $sn++}}</td>

                    <td>  {{$single_data->name}} </td>
                    
                    <td> {{$single_data->position}}</td>
                    <td> {{$single_data->organization}}</td>
                    <td><img src="{{asset('uploads/member_image/member_face')}}/{{$single_data->user_img}}" alt="img not found" width="100" height="100"></td>
                    <td>


                       <?php

                       if($single_data->user_table_status=='0' || $single_data->user_table_status==NULL) {
                        
                      ?>

                     <button class="btn  btn-warning btn-sm" title="Pending Authorization"> <i class='fas fa-eye' style="color: #fff;"></i></button>

                     <?php

                        }
                      ?>


                       <?php

                       if($single_data->user_table_status=='1') {
                        
                      ?>

                      <button class="btn  btn-success btn-sm" title="Authorized User"> <i class='fa fa-check' style="color: #fff;"></i></button>

                      <?php

                        }
                      ?>

                      <a type="button" title="View" style="margin: 5px;" class="btn  btn-primary btn-sm  btnEditRowWithModal"> <i class="fas fa-search" style="color: #fff;">
                              </i>
                              </a>

                         <!--  <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin: 5px;">
                             
                          </a> -->
                         
                          <a class="btn btn-info btn-sm" href="{{url('admin/member/edit')}}/{{$single_data->id}}" style="margin: 5px;" title="Edit">
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
                    <th>Name</th>
                    <th>Position</th>
                    <th>Organization</th>
                    <th>user image</th>
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

        // alert(row_id);

        var formData = {
            row_id: row_id
        };
        $.ajax({
            type: 'POST',
            url: "{{ route('admin.singleMembershow') }}",
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
            url: "{{ route('admin.singleblogdelete') }}",
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