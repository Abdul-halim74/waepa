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

                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('uploads/member_image/member_face') }}/{{$single_member_data->user_img}}" alt="User profile picture">

                </div>

                <h3 class="profile-username text-center">{{$single_member_data->name}}</h3>

                <p class="text-muted text-center">{{$single_member_data->designation_from_waepa}}</p>

               

               
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
                  <li class="nav-item"><a class="nav-link" href="#title_of_thesis" data-toggle="tab">Title of Thesis</a></li>

                  <li class="nav-item"><a class="nav-link" href="#experiences" data-toggle="tab">Experiences</a></li>

                   <li class="nav-item"><a class="nav-link" href="#publication" data-toggle="tab">Publication/Research</a></li>

                    <li class="nav-item"><a class="nav-link" href="#Seminar" data-toggle="tab">Seminar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Lecture" data-toggle="tab">Lecture</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Workshop" data-toggle="tab">Workshop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Training" data-toggle="tab">Training</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Professional_Membership" data-toggle="tab">Professional Membership</a></li>

                <!--   <li class="nav-item"><a class="nav-link" href="#professional" data-toggle="tab">Professional</a></li> -->
                  
                <!--   <li class="nav-item"><a class="nav-link" href="#achievement" data-toggle="tab">Achievement</a></li> -->

                 
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab" style="display: none;">Edit</a></li>
                </ul>
              </div><!-- /.card-header -->


              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="personal_info">

                      <strong><i class="fas fa-info-circle "></i> Name </strong>

                        <p class="text-muted">
                        {{$single_member_data->name}}
                        </p>

                        <hr>

                        <strong><i class="fas fa-envelope-square"></i> Email</strong>

                        <p class="text-muted"> {{$single_member_data->email}}</p>

                        <hr>

                        <strong><i class="fas fa-user-tag"></i> Designation</strong>
                         <p class="text-muted">{{$single_member_data->designation_from_waepa}}</p>


                       <!--  <p class="text-muted">
                          <span class="tag tag-danger">UI Design</span>
                          <span class="tag tag-success">Coding</span>
                          <span class="tag tag-info">Javascript</span>
                          <span class="tag tag-warning">PHP</span>
                          <span class="tag tag-primary">Node.js</span>
                        </p> -->

                        <hr>

                        <strong><i class="fas fa-phone-square-alt"></i> Contact Number</strong>

                        <p class="text-muted">{{$single_member_data->mobile}}</p>


                        <hr>

                        <strong><i class="fas fa-calendar-week"></i> Date of Birth </strong>

                        <p class="text-muted">{{$single_member_data->date}}</p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Address </strong>

                        <p class="text-muted">{{$single_member_data->mailing_address}}</p>

                        <hr>

                         <strong><i class="far fa-file-alt mr-1"></i> Nationality: </strong>
                          <p class="text-muted">Bangladeshi</p>

                          <hr>

                         

                  </div>


                  <div class=" tab-pane" id="academic">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 1</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         {{$single_member_data->academic_1_xm_title}}
                        </p>

                        <hr>
<!-- 
                        <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">Science</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted"> {{$single_member_data->academic_1_ins_name}} </p>


                       

                        <hr>

                        <!-- <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">5 Out of (5)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$single_member_data->academic_1_year_of_passing}} </p>

                       
                          <hr>

                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 2</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         {{$single_member_data->academic_2_xm_title}}
                        </p>

                        <hr>

                        <!-- <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">Science</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">{{$single_member_data->academic_2_ins_name}}</p>


                       

                        <hr>

                       <!--  <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr> -->

                      <!--   <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">4.50 Out of (5)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$single_member_data->academic_2_year_of_passing}}</p>

                       
                          <hr>
                        

                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 3</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         {{$single_member_data->academic_3_xm_title}}
                        </p>

                        <hr>

                       <!--  <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">CSE</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">{{$single_member_data->academic_3_ins_name}}</p>


                       

                        <hr>

                       <!--  <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">3.50 Out of (4)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$single_member_data->academic_3_year_of_passing}} </p>

                       
                          <hr>




                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 4</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                       {{$single_member_data->academic_4_xm_title}}
                        </p>

                        <hr>

                       <!--  <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">CSE</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">{{$single_member_data->academic_4_ins_name}}</p>


                       

                        <hr>

                       <!--  <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">3.50 Out of (4)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$single_member_data->academic_4_year_of_passing}} </p>

                       
                          <hr>



                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 5</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                        {{$single_member_data->academic_5_xm_title}}
                        </p>

                        <hr>

                       <!--  <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">CSE</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">{{$single_member_data->academic_5_ins_name}}</p>


                       

                        <hr>

                       <!--  <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">3.50 Out of (4)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$single_member_data->academic_5_year_of_passing}} </p>

                       
                          <hr>

                  </div>


                  <div class=" tab-pane" id="title_of_thesis">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> {{$single_member_data->title_of_thesis1}}  </h4>
          
                  

                   {!! $single_member_data->thesis_description1 !!}

                   <br>
                   <br>
                   
                     <h4 class=" bg-info h4_bg_info" style="color: #fff;">  {{$single_member_data->title_of_thesis2}} </h4>
                      <strong><i class="fas fa-info-circle "></i>   {!!$single_member_data->thesis_description2!!}
                        <br>
                      </strong>  

                       

                  </div>



                   <div class=" tab-pane" id="experiences">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;">  Academic Experiences: {{$single_member_data->total_year_of_academic_experience}}  Years. </h4>
                      

                      {!!$single_member_data->description_of_academic_exp!!}
                       
                    


                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Professional Experience: {{$single_member_data->total_year_of_professional_experience }} Years.</h4>
                     

                      {!!$single_member_data->description_of_professional_exp!!}

                       

                  </div> 

                   <div class=" tab-pane" id="publication">

                     {!!$single_member_data->publication_research!!}
                     

                  </div>

                   <div class=" tab-pane" id="Seminar">

                    
                      {!!$single_member_data->seminar!!}

               

                  </div>



                   <div class=" tab-pane" id="Lecture">

                    
                   
                    {!!$single_member_data->lecture!!}

                  </div>

                   <div class=" tab-pane" id="Workshop">

                   
                           {!!$single_member_data->workshop!!}

                  </div>


             <div class=" tab-pane" id="Training">

                   
                          {!!$single_member_data->training!!}


                  </div>

             <div class=" tab-pane" id="Professional_Membership">

                    {!!$single_member_data->professional_membership!!}
                      
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