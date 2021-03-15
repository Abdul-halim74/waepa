@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->
@section('css')

<style type="text/css">

  .content-wrapper{

    margin-top: 83px;

  }

</style>

@endsection

  @section('content')

    <div class="content-wrapper">
      
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">About us</a></li>
              <li class="breadcrumb-item active">Aims and Object</li>
            </ol>
          </div>
        </div>
      </div>

  </div>

 <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
      	 <h3 class="text-center"><span style="color: #ff284f;">A</span>ims & <span style="color: #ff284f;">O</span>bject</h3>
        <div class="row">

          <div class="col-lg-12 entries">


          	{!! $aims_objective_data->description !!}


          </div>
          
         </div>
         
      </div> 
      

  </section>
  




  @endsection


  
@section('js')


  @if(Session::has('status'))

    <script type="text/javascript">
      toastr.success("{!!Session::get('status')!!}");
    </script>

  @endif


@endsection       	


