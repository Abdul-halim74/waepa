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
    <!-- Content Header (Page header) -->

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Membership</a></li>
              <li class="breadcrumb-item active">Eligibility of Membership</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


   
</div>


 <!-- ======= Eligibility of Membership Section ======= -->
    <section id="" class="">
      <div class="container">
	        <div class="row">

	        	<p style="font-size: 18px;font-weight: bold;">Bangladesh Women Graduates in Architecture, Engineering, Urban
and Regional Planning disciplines from any University or Institution
of Bangladesh and other recognized Institutions abroad are eligible
to be members of WAEPA.
</p>

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

