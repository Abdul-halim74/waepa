@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

  @section('content')

	<br>
	<br>
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        
          <h2 class="text-center">Member Registration Form</h2> <br>
         
      

        <div class="row">

         
          <div class="col-lg-9 offset-lg-2 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('member.register')}}" method="post"  class="member_registration_form" enctype="multipart/form-data">
              @csrf
             <!--  <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" name="name" placeholder="Enter Your Name">
                </div>
              </div>

               <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Position</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" name="position" placeholder="Enter Your Position">
                </div>
              </div>

               <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Organization</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" name="organiz" placeholder="Organization Name">
                </div>
              </div>


               <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Mailing Address</label>
                <div class="col-lg-8">
                  <textarea class="form-control" name="mail_addrress"></textarea>
                </div>
              </div>

               <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Office Res</label>
                <div class="col-lg-8">
                   <textarea class="form-control" name="office_res"></textarea>
                </div>
              </div> -->

              <label>Education Qualification (B arch/ BSC Eng / BURP, Postgraduate) : </label>
              <p>(Degree, Institute, Year)</p>

               <div class="form-group row">
                <label for="" class="offset-lg-2 col-form-label">1.</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="qulification_1" id="" placeholder="">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="offset-lg-2 col-form-label">2.</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" name="qulification_2" placeholder="">
                </div>
              </div>

               <div class="form-group row">
                <label for="" class="offset-lg-2 col-form-label">3.</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" name="qulification_3" placeholder="">
                </div>
              </div>

              <!--  <p>Contact Phone Nos.</p>

               <div class="form-row" style="margin-left: 150px;">

              <div class="form-group row">
                <label for="" class=" col-form-label">Off : </label>&nbsp;&nbsp;&nbsp;
                <div class="">
                  <input type="text" class="form-control" id="" name="office_contact" placeholder="Enter Your Name">
                </div>
              </div>

                
                 <div class="form-group row" >
                  <label for="" class=" col-form-label" style="margin-left: 75px;">Res : </label>&nbsp;
                  <div class="">
                    <input type="text" class="form-control" id="" name="res_contract" placeholder="Enter Your Name">
                  </div>
              </div>


            </div> -->

           <!--  <div class="form-row" style="margin-left: 150px;">

              <div class="form-group row">
                <label for="" class=" col-form-label">Fax : </label>&nbsp;&nbsp;&nbsp;
                <div class="">
                  <input type="text" class="form-control" name="fax" id="" placeholder="Enter Your Name">
                </div>
              </div>

                
                 <div class="form-group row" >
                  <label for="" class=" col-form-label" style="margin-left: 50px;">Mobile : </label>&nbsp;
                  <div class="">
                    <input type="text" class="form-control" name="mobile" id="" placeholder="Enter Your Name">
                  </div>
              </div>


            </div> -->

           <!--   <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Email : </label>
                <div class="col-lg-8">
                  <input type="email" class="form-control" id="" name="email" placeholder="Enter email">
                </div>
              </div> 

              


              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Web Page (URL) : </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" name="web_acces" placeholder="Enter Web Page URL">
                </div>
              </div>


        
       
            
            <div class="form-group row">
                <label for="" class="col-sm-8 col-form-label">Are you interested to commit your active participation and time in WAEPA works</label>
                 

                 <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="commit" id="inlineRadio1" value="Yes">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="commit" id="inlineRadio2" value="No">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>


              </div>

          <div class="form-group row">

               <label for="" class="col-sm-2 col-form-label">User Image</label>

              <input type="file" name="user_img">
           </div>


           <br>

         
             <label for="" class=" col-form-label" >Date : </label>&nbsp;&nbsp;&nbsp;

              <input type="date" name="date">

                
            <label for="" class=" col-form-label" style="">Signature : </label>&nbsp;&nbsp;&nbsp;
           
              <input type="file" name="signature_img"> -->
               
            

               <br>
              

                 <div class="text-center custom_margin_top">
                
                   <input type="submit" class="submit_btn" name="submit">

                </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  @endsection


  
@section('js')



  @if(Session::has('status'))

    <script type="text/javascript">
      toastr.success("{!!Session::get('status')!!}");
    </script>

  @endif


@endsection