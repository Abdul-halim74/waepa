@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

  @section('content')

      
	          
<br><br> <br>


<section class="content">
      <div class="container">
      	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Member</a></li>
    <li class="breadcrumb-item active" aria-current="page">Single Member Profile</li>
  </ol>
</nav>

        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">

                  <img class="profile-user-img img-fluid img-circle" src="{{url('backend_assets/dist/img/user4-128x128.jpg')}}" alt="User profile picture">

                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Info</a></li>

                  <li class="nav-item"><a class="nav-link" href="#academic" data-toggle="tab">Academic</a></li>

                  <li class="nav-item"><a class="nav-link" href="#professional" data-toggle="tab">Professional</a></li>
                  
                  <li class="nav-item"><a class="nav-link" href="#achievement" data-toggle="tab">Achievement</a></li>

                 
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab" style="display: none;">Edit</a></li>
                </ul>
              </div><!-- /.card-header -->


              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="personal_info">

                      <strong><i class="fas fa-info-circle "></i> Name </strong>

                        <p class="text-muted">
                         Abdul Halim
                        </p>

                        <hr>

                        <strong><i class="fas fa-envelope-square"></i> Email</strong>

                        <p class="text-muted">halimkhanfeni7@gmail.com</p>

                        <hr>

                        <strong><i class="fas fa-user-tag"></i> Designation</strong>
                         <p class="text-muted">Sowtare Engineer at Venture Solutions Ltd</p>


                        <p class="text-muted">
                          <span class="tag tag-danger">UI Design</span>
                          <span class="tag tag-success">Coding</span>
                          <span class="tag tag-info">Javascript</span>
                          <span class="tag tag-warning">PHP</span>
                          <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Contact Number</strong>

                        <p class="text-muted">01854-109774</p>

                  </div>


                  <div class=" tab-pane" id="academic">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 1</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         SSC (Secondary School Certificate)
                        </p>

                        <hr>

                        <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">Science</p>

                        <hr>

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">Dhaka City School & College, Dhaka</p>


                       

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">5 Out of (5)</p>

                        <hr>

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">2014</p>

                       
                          <hr>

                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 2</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         HSC / Diploma
                        </p>

                        <hr>

                        <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">Science</p>

                        <hr>

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">Dhaka City School & College, Dhaka</p>


                       

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">4.50 Out of (5)</p>

                        <hr>

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">2016</p>

                       
                          <hr>
                        

                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 3</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         BSC (Bachelor of Science)
                        </p>

                        <hr>

                        <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">CSE</p>

                        <hr>

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">Northern University Bangladesh</p>


                       

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">3.50 Out of (4)</p>

                        <hr>

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">2020</p>

                       
                          <hr>


                  </div>



                    <div class=" tab-pane" id="professional">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Profession 1</h4>
                      <strong><i class="fas fa-info-circle "></i> Company Name </strong>

                        <p class="text-muted">
                        Venture solutions Ltd
                        </p>

                        <hr>

                        <strong><i class="fas fa-object-group"></i>  Company Type </strong>

                        <p class="text-muted"> IT Firm</p>

                        <hr>

                        <strong><i class="fas fa-university"></i> Designation </strong>
                         <p class="text-muted"> Junior software Engineer</p>


                       

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> Department </strong>

                        <p class="text-muted"> Software Development </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> Responsibilities </strong>

                        <p class="text-muted"> Existing Software live support and create new software .</p>

                        <hr>

                        <strong><i class="fa fa-map-marker" aria-hidden="true"></i> Company Location</strong>

                        <p class="text-muted"> Motijheel, Arambag,  Dhaka</p>

                       
                          <hr>

                           <strong><i class="fas fa-calendar-week"></i> Employment Period</strong>

                        <p class="text-muted">  12/1/2019 To Continue</p>

                       
                          <hr>



                  </div>

                   <div class=" tab-pane" id="achievement">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Achievement 1</h4>
                      <strong><i class="fas fa-info-circle "></i> Debating Competetion </strong>

                        <p class="text-muted">
                          Arranged By : Northern University Bangladesh 
                        </p>

                        <hr>


                        <strong><i class="fas fa-medal"></i> Winnig Type </strong>

                        <p class="text-muted">
                         First Prize
                        </p>

                        <hr>

                       



                  </div>
                

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



  @endsection