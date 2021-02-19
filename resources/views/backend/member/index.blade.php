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
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($data as $single_data)   
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>

                   @endforeach
               
         
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
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
            url: "{{ route('admin.singleblogshow') }}",
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