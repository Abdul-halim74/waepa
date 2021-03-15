@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

 @section('css')

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/step_from_style.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

    <style type="text/css">
      .note-editable.card-block {
          text-align: left !important;
      }

      .modal-backdrop {
   
          width: 0px !important;
         
      }

      .ui-datepicker-calendar {
          display: none;
        }

        #msform {
     
      margin: 0 auto !important;
     
  }

  .fs-title {
   
    margin: 15px !important;
}

.content-wrapper{
  margin-top: 86px;
}

.contact{
    padding: 18px 0;
    overflow: hidden;
}

.mailing_address{
    background: none !important;
    border: 1px solid black !important;
    border-radius: none !important;
    box-shadow: none !important;
    padding: none !important;
    box-sizing: none !important;
    width: none !important;
    margin: none !important;
}


.contact_address{
   background: none !important;
    border: 1px solid black !important;
    border-radius: none !important;
    box-shadow: none !important;
    padding: none !important;
    box-sizing: none !important;
    width: none !important;
    margin: none !important;
}





    </style>

 @endsection



  @section('content')



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Membership</a></li>
              <li class="breadcrumb-item active">Apply for Membership</li>
            </ol>
          </div>
        </div>
      </div>    <!-- /.container-fluid -->


  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        
          <h2 class="text-center">Apply for Membership</h2> <br>
         
      

       <form id="msform" action="{{ route('member.register')}}" method="post" enctype="multipart/form-data">
  
    @csrf

  <ul id="progressbar">
    <li class="active"></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Personal Information</h2>

            <div class="form-group row">
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


               <div  class="mailing_address">
                   <h6 id="lgid_mailing" style="    margin: 22px;">Mailing Address :</h6>

                 <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Residential Mailing Address</label>
                  <div class="col-lg-8">
                    <textarea class="form-control" name="mail_addrress"></textarea>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Office Mailing Address</label>
                  <div class="col-lg-8">
                     <textarea class="form-control" name="office_res"></textarea>
                  </div>
                </div>

              </div>
           

              

               <br>

               <div style="display: block;" class="contact_address">

                 <h6 id="lgid_contact" style="    margin: 22px;">Contact :</h6>

                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Office: </label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="" name="office_contact" placeholder="Enter Your Office Contact Number">
                  </div>
                </div>

                  
                   <div class="form-group row" >
                    <label for="" class="col-sm-2 col-form-label" style="">Residential </label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" id="" name="res_contract" placeholder="Enter Your Residential Contact Number">
                    </div>
                  </div>



                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Fax : </label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="fax" id="" placeholder="Enter Your Fax">
                  </div>
                </div>

                  
                   <div class="form-group row" >
                    <label for="" class="col-sm-2 col-form-label" style="">Mobile : </label>&nbsp;
                    <div class="col-lg-8">
                      <input type="text" class="form-control" name="mobile" id="" placeholder="Enter Your Phone Number">
                    </div>
                </div>

                </div>


                 <br>

                <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Email : </label>
                <div class="col-lg-8">
                  <input type="email" class="form-control" id="" name="email" placeholder="Enter Your email">
                </div>
              </div> 

              

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Web Page (URL) : </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" name="web_acces" placeholder="Enter Web Page URL">
                </div>
              </div>


        
       
    <div class="form-group row">
                <label for="" class="col-sm-6">Are you interested to commit your active participation and time in WAEPA works</label>
                 

              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="commit" value="yes">Yes
                </label>
              </div>

              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="commit" value="no">No
                </label>
              </div>
        

          </div>

          <div class="form-group row">

               <label for="" class="col-sm-2 col-form-label">User Image</label>

              <div class="col-lg-8">
                <input type="file" name="user_img">

              </div>
           </div>



           <div class="form-group row">
             <label for="" class="col-sm-2 col-form-label" >Date Of Birth : </label>
              <div class="col-lg-8">
              <input type="date" name="user_date" class="form-control">
            </div>
           </div>   
                

        <div class="form-group row">
                 
            <label for="" class="col-sm-2 col-form-label" style="">Signature : </label>
         
         <div class="col-lg-8">   

              <input type="file" name="signature_img">
          </div>

      </div>      


   


    <input type="button" name="next" class="next action-button" value="Next" />

  </fieldset>
  
  <fieldset>
    <h2 class="fs-title">Academic Information</h2>
    
    <h6 class="text-center">Academic 1</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Exam Title</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="exam_title1" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Institute Name</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="institute_name1" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Year of Passing</label>

        <div class="col-lg-8">
         
           <input class="form-control datepicker"   type="text" name="year_of_passing1">

        </div>
      </div>



       <h6 class="text-center">Academic 2</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Exam Title</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="exam_title2" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Institute Name</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="institute_name2" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Year of Passing</label>

        <div class="col-lg-8">
          <input class="form-control datepicker"   type="text" name="year_of_passing2" value="">
        </div>
      </div>



         <h6 class="text-center">Academic 3</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Exam Title</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="exam_title3" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Institute Name</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="institute_name3" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Year of Passing</label>

        <div class="col-lg-8">
          <input class="form-control datepicker"   type="text" name="year_of_passing3" value="">
        </div>
      </div>


       <h6 class="text-center">Academic 4</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Exam Title</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="exam_title4" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Institute Name</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="institute_name4" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Year of Passing</label>

        <div class="col-lg-8">
           <input class="form-control datepicker"   type="text" name="year_of_passing4" value="">
        </div>
      </div>


      <h6 class="text-center">Academic 5</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Exam Title</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="exam_title5" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Institute Name</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="institute_name5" placeholder="Enter Your Exam Title">
        </div>
      </div>


      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Year of Passing</label>

        <div class="col-lg-8">
          <input class="form-control datepicker"   type="text"  name="year_of_passing5" value="">
        </div>
      </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Title Of Thesis</h2>

     <h6 class="text-center">Thesis 1</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Title Of Thesis</label>

        <div class="col-lg-8">
          <input type="text" class="form-control" id="" name="title_of_thesis1" placeholder="Enter Your Title of Thesis">
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Thesis Description</label>

        <div class="col-lg-8">

          <textarea class="form-control summernote" name="thesis_description1"></textarea>
         
        </div>

      </div>


       <h6 class="text-center">Thesis 2</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Title Of Thesis</label>

        <div class="col-lg-8">
          <input type="text" class="form-control"  name="title_of_thesis2" placeholder="Enter Your Title of Thesis">
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Thesis Description</label>

        <div class="col-lg-8">
           <textarea class="form-control summernote" name="thesis_description2"></textarea>

         
        </div>


      </div>


    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Experiences</h2>
  
   <h6 class="text-center">Academic Experiences</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Total year Of Experience</label>

        <div class="col-lg-8">
          <input type="text" class="form-control"  name="total_year_of_academic_exp" placeholder="Enter Your Total Year Of Academic Experiences">
        </div>
      </div>

       <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Description Of Your Academic Experience</label>

          <div class="col-lg-8">
           

             <textarea class="form-control summernote" name="description_academic_exp"></textarea>
          </div>
      </div>



      <h6 class="text-center">Professional Experiences</h6>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Total year Of Experience</label>

        <div class="col-lg-8">
          <input type="text" class="form-control"  name="total_year_of_professional_exp" placeholder="Enter Your Total Year Of  Professional Experiences">
        </div>
      </div>

       <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Description Of Your Professional Experience</label>

          <div class="col-lg-8">

             <textarea class="form-control summernote" name="description_professional_exp"></textarea>


          </div>
      </div>



    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>


  <fieldset>
    <h2 class="fs-title">Publication / Research</h2>

     <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Publication / Research</label>
          <div class="col-lg-8">

           
             <textarea class="form-control summernote" name="publication_and_research"></textarea>


          </div>
      </div>


    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>



  <fieldset>
    <h2 class="fs-title">Seminar</h2>
    
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Seminar</label>
          <div class="col-lg-8">

        

               <textarea class="form-control summernote" name="seminar"></textarea>


          </div>
      </div>


    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Lecture</h2>
   

     <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Lecture</label>
          <div class="col-lg-8">

            <textarea class="form-control summernote" name="lecture"></textarea>

          </div>
      </div>


    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Workshop</h2>
    
     <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Workshop</label>
          <div class="col-lg-8">

            
            <textarea class="form-control summernote" name="workshop"></textarea>
          </div>
      </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />

  </fieldset>


  <fieldset>
    <h2 class="fs-title">Training</h2>
 
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Training</label>
          <div class="col-lg-8">

             <textarea class="form-control summernote" name="training"></textarea>
           
          </div>
      </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Professional Membership</h2>
    
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Professional Membership</label>
          <div class="col-lg-8">

             <textarea class="form-control summernote" name="professional_membership"></textarea>
           

          </div>
      </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />

    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>

      </div>
    </section><!-- End Contact Section -->

    <br>
    <br>
    <br>
    <br>


  @endsection


  
@section('js')


<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>


<script  src="{{ asset('frontend_assets/js/script.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
  
   $(".datepicker").datepicker({
      format: "yyyy",
      viewMode: "years", 
      minViewMode: "years"
  });
</script>

  @if(Session::has('status'))

    <script type="text/javascript">
      toastr.success("{!!Session::get('status')!!}");
    </script>

  @endif


@endsection