@extends('layouts.master_backend')



@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Blog List</li>
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
                <h3 class="card-title">Blog List</h3>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Blog Categories</th>

                    <th>Description</th>
                    <th>Blog Image</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 @php $sn=1 @endphp 	
                 @foreach($all_blog_info as $single_blog)

                  <tr>
                  	
                    <td class="slNo sl_no{{ $single_blog->id }}" data-row_id="{{ $single_blog->id }}">{{ $sn++}}</td>
                    <td>{{$single_blog->blog_heading}}
                    </td>

                    <td>
                    
                    <?php 
                    $cat = $single_blog->blog_categories;
                    $cat_arry= explode(',', $cat);
                    foreach($cat_arry as $val)
                    {
                      
                      $data = DB::table('blog_categories')->where('id', $val)->first();
                      /*echo "<pre>";
                      print_r($data);*/
                      //echo $data->category_name."<br>";
                      ?>
                      <span class="badge badge-pill badge-primary"> <?php echo $data->category_name." "; ?></span>

                      

                        <?php

                    }
                     ?>

                    


                    </td>

                    <td>{{ \Illuminate\Support\Str::limit($single_blog->blog_content, 150, $end='...') }}</td>
                    <td> <img src="{{asset('uploads/blog_image')}}/{{$single_blog->blog_image}}" alt="not found" height="100" width="100"></td>

                    <td class="project-actions text-right">
                    	<a type="button" style="margin: 5px;" class="btn  btn-primary btn-sm  btnEditRowWithModal"> <i class="fas fa-search" style="color: #fff;">
                              </i>
                              </a>

                         <!--  <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin: 5px;">
                             
                          </a> -->
                         
                          <a class="btn btn-info btn-sm" href="{{url('admin/blog/edit')}}/{{$single_blog->id}}" style="margin: 5px;">
                              <i class="fas fa-pencil-alt" style="color: #fff;">
                              </i>
                             
                          </a>
                          
                          <a type="button" onclick="deletebtn({{$single_blog->id}})" class="btn btn-danger btn-sm"  style="margin: 5px;">
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
                    <th>Blog Categories</th>
                    <th>Description</th>
                    <th>Blog Image</th>
                   
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