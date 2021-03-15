@extends('layouts.master_backend')



@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item ">Slider</li>
              <li class="breadcrumb-item active">Slider List</li>
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
                <h3 class="card-title">Slider List</h3>

                 <div class="addbtn" style="text-align: right;">
                    
                    <a class="btn  btn-info" href="{{route('slider.create')}}" title="">New Add <i class='fas fa-plus' style="color: #fff;"></i></a>
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     @php $sn=1 @endphp   

                    @foreach($data as $single_data)   
                  <tr>


                    <td  class="slNo sl_no{{ $single_data->id }}" data-row_id="{{ $single_data->id }}">{{ $sn++}}</td>

                    <td>  {{$single_data->name}} </td>
                    
                 {{--  <td><img src="{{asset('uploads/advertisment/add1.jpg')}}" alt="img not found" width="100" height="100"></td> --}}
                     <td>  {{$single_data->title}} </td>
                     <td>  <a href="{{$single_data->link}}" title="link">{{$single_data->link}}</a> </td>

                       <td>



                         <img src="{{asset($single_data->img)}}" alt="img not found" width="100" height="100">

                      </td>

                    <td>


                     @if($single_data->status == 0)
                      <a href="{{route('slider.active', $single_data->id)}}" title="Slider active"  class="btn btn-info btn-sm" title=""><i class="fas fa-thumbs-up" style="color: #fff;">
                      </i></a>

                    @else
                     <a href="{{route('slider.inactive', $single_data->id)}}"  title="Slider inactive"   class="btn btn-info btn-sm" title=""><i class="fas fa-thumbs-down" style="color: #fff;">
                      </i></a>

                    @endif
                          
                          <a href="{{route('slider.edit', $single_data->id)}}" title="edit" class="btn btn-info btn-sm" title=""><i class="fas fa-pencil-alt" style="color: #fff;">
                              </i></a>
                          
                          <button type="button" title="Delete" onclick="deleteNotice(id)" id="{{$single_data->id}}" class="btn btn-danger btn-sm"  style="margin: 5px;">
                              <i class="fas fa-trash" style="color: #fff;">
                              </i>

                          </button>


                          

                          
                        </td>
                  </tr>

                   @endforeach
               
         
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>Sl</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Img</th>
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

  

  @endsection


  @section('js')
  
     <script>
        @if(session()->has('success'))
        toastr.success("{{session()->get('success')}}");
        @endif
        @if(session()->has('error'))
        toastr.error("{{session()->get('error')}}");
        @endif
        
     </script>


  <script>
    
    function deleteNotice(id)
    {
      
      if(id !='')
      {
         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


         if(!confirm("Do you want to delete this slider"))
          exit;

        $.ajax({
                type: 'POST',
                url : "{{ route('slider.delete') }}",
                data: {
                    "id": id,
                },
                success    : (data) => {
                  
                   if(data =1)
                   {
                    toastr.success("This Advertisement has been deleted ");
                    location.reload();
                    
                   }else{
                     toastr.error("sorry this slider not delete yet");
                   } 


                }
                
            });


      }
    }
  </script>

  
   @endsection