@extends('layouts.master_backend')



@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advertisement List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item ">Advertisement</li>
              <li class="breadcrumb-item active">Advertisement List</li>
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
                <h3 class="card-title">Advertisement List</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     @php $sn=1 @endphp   

                    @foreach($data as $single_data)   
                  <tr>


                    <td  class="slNo sl_no{{ $single_data->id }}" data-row_id="{{ $single_data->id }}">{{ $sn++}}</td>

                    <td>  {{$single_data->title}} </td>
                    
                 {{--  <td><img src="{{asset('uploads/advertisment/add1.jpg')}}" alt="img not found" width="100" height="100"></td> --}}
                    <td><img src="{{asset($single_data->img)}}" alt="advertisement"   width="100" height="100"></td>

                    <td>

                    

                     @if($single_data->status == 0)
                      <a href="{{route('advert.active', $single_data->id)}}" title="advertisement active"  class="btn btn-info btn-sm" title=""><i class="fas fa-thumbs-up" style="color: #fff;">
                      </i></a>

                    @else
                     <a href="{{route('advert.inactive', $single_data->id)}}"  title="advertisement inactive"   class="btn btn-info btn-sm" title=""><i class="fas fa-thumbs-down" style="color: #fff;">
                      </i></a>

                    @endif
                          
                          <a href="{{route('advert.edit', $single_data->id)}}" title="edit" class="btn btn-info btn-sm" title=""><i class="fas fa-pencil-alt" style="color: #fff;">
                              </i></a>
                          
                          <button type="button" title="Delete" onclick="deleteAdvertisment(id)" id="{{$single_data->id}}" class="btn btn-danger btn-sm"  style="margin: 5px;">
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
                    <th>Title</th>
                    <th>image</th>
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

  @if(session()->has('status'))

  <script type="text/javascript">

    toastr.success("{{ session()->get('status')}}");

  </script>

  @endif


  <script>
    
    function deleteAdvertisment(id)
    {
      
      if(id !='')
      {
         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        $.ajax({
                type: 'POST',
                url : "{{ route('advert.delete') }}",
                data: {
                    "id": id
                },
                success    : (data) => {
                  
                   if(data =1)
                   {
                    toastr.success("This Advertisement has been deleted ");
                    location.reload();
                   } 
                }
                
            });


      }
    }
  </script>

  
   @endsection