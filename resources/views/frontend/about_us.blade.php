@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->


  @section('content')


<br>
 <br>
 <br>
 <br>
 <br>



      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">About Us</a></li>
            
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


 <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
      	 <h3 class="text-center">About Us</h3>
        <div class="row">

          <div class="col-lg-12 entries">


          	{!! $about_us_data->description !!}


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


