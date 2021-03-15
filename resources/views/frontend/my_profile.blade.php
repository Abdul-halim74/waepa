@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

  @section('content')


<br>
<br>


<section class="content">
      <div class="container">
      	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
   
    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
  </ol>
</nav>

        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">

                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('uploads/member_image/member_face') }}/{{$select_individual_user->user_img}}" alt="User profile picture">

                </div>

                <h3 class="profile-username text-center">{{$select_individual_user->name}}</h3>

                <p class="text-muted text-center">{{$select_individual_user->position}}</p>

               

               
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

             
                 
                    <li class="nav-item"><a class="nav-link" href="{{url('my_profile_edit')}}/ {{$select_individual_user->mr_table_id}}"  style="">Edit</a></li>
               
                </ul>
              </div><!-- /.card-header -->


          
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="personal_info">

                      <strong><i class="fas fa-info-circle "></i> Name </strong>

                        <p class="text-muted">
                        {{$select_individual_user->name}}
                        </p>

                        <hr>

                        <strong><i class="fas fa-envelope-square"></i> Email</strong>

                        <p class="text-muted"> {{$select_individual_user->email}}</p>

                        <hr>

                        <strong><i class="fas fa-user-tag"></i> Designation</strong>
                         <p class="text-muted">{{$select_individual_user->designation_from_waepa}}</p>


                     
                        <hr>

                        <strong><i class="fas fa-phone-square-alt"></i> Contact Number</strong>

                        <p class="text-muted">{{$select_individual_user->mobile}}</p>


                        <hr>

                        <strong><i class="fas fa-calendar-week"></i> Date of Birth </strong>

                        <p class="text-muted">{{$select_individual_user->date}}</p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Address </strong>

                        <p class="text-muted">{{$select_individual_user->mailing_address}}</p>

                        <hr>

                         <strong><i class="far fa-file-alt mr-1"></i> Nationality: </strong>
                          <p class="text-muted">Bangladeshi</p>

                          <hr>


                       <hr>

                         <strong><i class="fas fa-money-check"></i> Already Paid : </strong>
                          <p class="text-muted">@if($select_individual_user->payment!='') {{$select_individual_user->payment}}  @else '0'   @endif TK</p>

                          <hr>


                         

                  </div>


                  <div class=" tab-pane" id="academic">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 1</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         {{$select_individual_user->academic_1_xm_title}}
                        </p>

                        <hr>
<!-- 
                        <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">Science</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted"> {{$select_individual_user->academic_1_ins_name}} </p>


                       

                        <hr>

                        <!-- <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">5 Out of (5)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$select_individual_user->academic_1_year_of_passing}} </p>

                       
                          <hr>

                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 2</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         {{$select_individual_user->academic_2_xm_title}}
                        </p>

                        <hr>

                        <!-- <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">Science</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">{{$select_individual_user->academic_2_ins_name}}</p>


                       

                        <hr>

                       <!--  <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr> -->

                      <!--   <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">4.50 Out of (5)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$select_individual_user->academic_2_year_of_passing}}</p>

                       
                          <hr>
                        

                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 3</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                         {{$select_individual_user->academic_3_xm_title}}
                        </p>

                        <hr>

                       <!--  <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">CSE</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">{{$select_individual_user->academic_3_ins_name}}</p>


                       

                        <hr>

                       <!--  <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">3.50 Out of (4)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$select_individual_user->academic_3_year_of_passing}} </p>

                       
                          <hr>




                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 4</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                       {{$select_individual_user->academic_4_xm_title}}
                        </p>

                        <hr>

                       <!--  <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">CSE</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">{{$select_individual_user->academic_4_ins_name}}</p>


                       

                        <hr>

                       <!--  <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">3.50 Out of (4)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$select_individual_user->academic_4_year_of_passing}} </p>

                       
                          <hr>



                          <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Academic 5</h4>
                      <strong><i class="fas fa-info-circle "></i> Exam Title </strong>

                        <p class="text-muted">
                        {{$select_individual_user->academic_5_xm_title}}
                        </p>

                        <hr>

                       <!--  <strong><i class="fas fa-object-group"></i>  Concentration/ Major/Group </strong>

                        <p class="text-muted">CSE</p>

                        <hr> -->

                        <strong><i class="fas fa-university"></i> Institute Name</strong>
                         <p class="text-muted">{{$select_individual_user->academic_5_ins_name}}</p>


                       

                        <hr>

                       <!--  <strong><i class="fas fa-poll-h"></i> Result Type</strong>

                        <p class="text-muted">Grade </p>

                        <hr>

                        <strong><i class="fas fa-poll-h"></i> CGPA / GPA</strong>

                        <p class="text-muted">3.50 Out of (4)</p>

                        <hr> -->

                        <strong><i class="fas fa-calendar-week"></i>Year of Passing </strong>

                        <p class="text-muted">{{$select_individual_user->academic_5_year_of_passing}} </p>

                       
                          <hr>

                  </div>


                  <div class=" tab-pane" id="title_of_thesis">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> {{$select_individual_user->title_of_thesis1}}  </h4>
          
                  

                   {!! $select_individual_user->thesis_description1 !!}

                   <br>
                   <br>
                   
                     <h4 class=" bg-info h4_bg_info" style="color: #fff;">  {{$select_individual_user->title_of_thesis2}} </h4>
                      <strong><i class="fas fa-info-circle "></i>   {!!$select_individual_user->thesis_description2!!}
                        <br>
                      </strong>  

                       

                  </div>



                   <div class=" tab-pane" id="experiences">

                     <h4 class=" bg-info h4_bg_info" style="color: #fff;">  Academic Experiences: {{$select_individual_user->total_year_of_academic_experience}}  Years. </h4>
                      

                      {!!$select_individual_user->description_of_academic_exp!!}
                       
                    


                     <h4 class=" bg-info h4_bg_info" style="color: #fff;"> Professional Experience: {{$select_individual_user->total_year_of_professional_experience }} Years.</h4>
                     

                      {!!$select_individual_user->description_of_professional_exp!!}

                       

                  </div> 

                   <div class=" tab-pane" id="publication">

                     {!!$select_individual_user->publication_research!!}
                     

                  </div>

                   <div class=" tab-pane" id="Seminar">

                    
                      {!!$select_individual_user->seminar!!}

               

                  </div>



                   <div class=" tab-pane" id="Lecture">

                    
                   
                    {!!$select_individual_user->lecture!!}

                  </div>

                   <div class=" tab-pane" id="Workshop">

                   
                           {!!$select_individual_user->workshop!!}

                  </div>


             <div class=" tab-pane" id="Training">

                   
                          {!!$select_individual_user->training!!}


                  </div>

             <div class=" tab-pane" id="Professional_Membership">

                    {!!$select_individual_user->professional_membership!!}
                      
                  </div>



                

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="{{url('frontend/profile_update')}}" method="POST" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" name="hidden_id" value="{{$select_individual_user->user_id}}">
                      <input type="hidden" name="hidden_member_id" value="{{$select_individual_user->user_member_id}}">
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{$select_individual_user->name}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control"  name="email" placeholder="Email" value="{{$select_individual_user->email}}">
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="contact" placeholder="Email" value="{{$select_individual_user->mobile}}">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Mailing Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="mailing_address" placeholder="mailing_address" value="{{$select_individual_user->mailing_address}}">
                        </div>
                      </div>

                        <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">user image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control"  name="user_img" >
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



    @section('js')


  @if(Session::has('status'))

    <script type="text/javascript">
      toastr.success("{!!Session::get('status')!!}");
    </script>

  @endif


@endsection
