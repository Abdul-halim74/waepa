@extends('layouts.frontendheader')

	<br>
	<br>
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

         
          <div class="col-lg-9 offset-lg-2 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              
              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Name</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" placeholder="Enter Your Name">
                </div>
              </div>

               <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Position</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" placeholder="Enter Your Position">
                </div>
              </div>

               <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Organization</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" placeholder="Organization Name">
                </div>
              </div>


               <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Mailing Address</label>
                <div class="col-lg-8">
                  <textarea class="form-control"></textarea>
                </div>
              </div>

               <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Office Res</label>
                <div class="col-lg-8">
                   <textarea class="form-control"></textarea>
                </div>
              </div>

              <label>Education Qualification (B arch/ BSC Eng / BURP, Postgraduate) : </label>
              <p>(Degree, Institute, Year)</p>

               <div class="form-group row">
                <label for="" class="offset-lg-2 col-form-label">1.</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="offset-lg-2 col-form-label">2.</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>

               <div class="form-group row">
                <label for="" class="offset-lg-2 col-form-label">3.</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>

               <p>Contact Phone Nos.</p>

               <div class="form-row" style="margin-left: 150px;">

              <div class="form-group row">
                <label for="" class=" col-form-label">Off : </label>&nbsp;&nbsp;&nbsp;
                <div class="">
                  <input type="text" class="form-control" id="" placeholder="Enter Your Name">
                </div>
              </div>

                
                 <div class="form-group row" >
                  <label for="" class=" col-form-label" style="margin-left: 75px;">Res : </label>&nbsp;
                  <div class="">
                    <input type="text" class="form-control" id="" placeholder="Enter Your Name">
                  </div>
              </div>


            </div>

            <div class="form-row" style="margin-left: 150px;">

              <div class="form-group row">
                <label for="" class=" col-form-label">Fax : </label>&nbsp;&nbsp;&nbsp;
                <div class="">
                  <input type="text" class="form-control" id="" placeholder="Enter Your Name">
                </div>
              </div>

                
                 <div class="form-group row" >
                  <label for="" class=" col-form-label" style="margin-left: 50px;">Mobile : </label>&nbsp;
                  <div class="">
                    <input type="text" class="form-control" id="" placeholder="Enter Your Name">
                  </div>
              </div>


            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Email : </label>
                <div class="col-lg-8">
                  <input type="email" class="form-control" id="" placeholder="Enter email">
                </div>
              </div>


              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Web Page (URL) : </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="" placeholder="Enter Web Page URL">
                </div>
              </div>


        
       
            
            <div class="form-group row">
                <label for="" class="col-sm-8 col-form-label">Are you interested to commit your active participation and time in WAEPA works</label>
                 

                 <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>


              </div>

          <div class="form-group row">

               <label for="" class="col-sm-2 col-form-label">User Image</label>

              <input type="file" name="">
           </div>


           <br>

            <div class="form-row" style="margin-left: 150px;">

              <div class="form-group row">
                <label for="" class=" col-form-label">Date : </label>&nbsp;&nbsp;&nbsp;
                <div class="">
                  <input type="text" class="form-control" id="" placeholder="Enter Your Name">
                </div>
              </div>

                
                 <div class="form-group row" >
                  <label for="" class=" col-form-label" style="margin-left: 75px;">Signature : </label>&nbsp;
                  <div class="">
                    <input type="file" name="">
                  </div>
              </div>


            </div>


              <div class="text-center"><input type="submit" name="" class="btn btn-primary btn-lg"></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


 @extends('layouts.frontendfooter')