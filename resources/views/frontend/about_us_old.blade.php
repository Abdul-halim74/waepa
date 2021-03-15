@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

  @section('content')


<br>
<br>
<br>

<br>
<br>
<br>

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="padding: 0px 0px !important;">
      <div class="container">

        <div class="row">
        	

	       	<div class="col-mg-10 offset-md-2">
	       		 <h3 class="text-center">About Us PDF </h3>

	       	<iframe style="display: block;" src="{{ asset('uploads/pdf_file/about_us.pdf')}}" width="800px" height="800px"></iframe>


	       	</div>

        </div>


        <br>
        <br>
        <br>

      </div>
    </section><!-- End About Section -->


  @endsection



    @section('js')


  @if(Session::has('status'))

    <script type="text/javascript">
      toastr.success("{!!Session::get('status')!!}");
    </script>

  @endif


@endsection
