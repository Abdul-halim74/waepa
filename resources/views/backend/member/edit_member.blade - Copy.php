@extends('layouts.master_backend')


@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit Member</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">



        

        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">


              <div class="card-header">
                <h3 class="card-title">Member Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
           <br>

             <form action="{{route('admin.update_member')}}" method="POST">

            @csrf
              
              <input type="hidden" name="hidden_id" value="{{$single_member_info->id}}">

                  <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Name : </label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="" name="name" value="{{$single_member_info->name}}" readonly="readonly" placeholder="Enter Your Name">
                      </div>
                  </div>

                  
                   <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Member Id : </label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" required="required" id="" name="member_id" placeholder="Enter Member Id" value="<?php if($single_member_info->member_id=='null'){ echo '';  }else{echo $single_member_info->member_id; }?>">
                      </div>
                  </div>

                   <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Payment Now : </label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control"  id="" name="payment_now" placeholder="Enter Your Name" value="{{$single_member_info->payment}}">
                      </div>
                  </div>


                   <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Active Now ? </label>
                      <div class="col-lg-9">

                          <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="active" value="1" <?php 
                                $status = $single_member_info->status;
                                if ($status==1) {
                                 echo "checked";
                                }

                               ?> >Yes
                            </label>
                        </div>
                
                          <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="active" value="0" <?php 
                                $status = $single_member_info->status;
                                if ($status==0) {
                                 echo "checked";
                                }

                               ?>>No
                            </label>
                          </div>

                      </div>
                  </div>

                  <?php
                  if (!isset($single_member_info->password)) {
                      
                  ?>

                   <div class="form-group row" style="margin-left: 10px;">
                      <label for="name" class="col-sm-2  col-form-label">Password </label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control"  id="" name="password" placeholder="Enter Password" value="{{($single_member_info->password)}}">
                      </div>
                  </div>

                  <?php

                }

                  ?>
                 
                  <div class="form-group row" style="margin-left: 10px;">

                     <input type="submit" name="submit" class="btn btn-primary" >

                    </div>
                     
                  </form>   
            
            </div>
            <!-- /.card -->


        
        </div>


        <div class="col-md-6">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form action="" method="POST">

                  <div class="form-group">
                    <input class="form-control" placeholder="To:" value="{{$single_member_info->email}}" name="email">
                  </div>

                  <div class="form-group">
                    <input class="form-control" placeholder="Subject:" name="subject">
                  </div>

                  <div class="form-group">
                      <textarea  class="form-control summernote" style="height: 300px" name="description">
                        <h1><u>Heading Of Message</u></h1>
                        <h4>Subheading</h4>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                          was born and I will give you a complete account of the system, and expound the actual teachings
                          of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                          dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                          how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                          is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                          but because occasionally circumstances occur in which toil and pain can procure him some great
                          pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                          except to obtain some advantage from it? But who has any right to find fault with a man who
                          chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                          produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                          dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                          blinded by desire, that they cannot foresee</p>
                        <ul>
                          <li>List item one</li>
                          <li>List item two</li>
                          <li>List item three</li>
                          <li>List item four</li>
                        </ul>
                        <p>Thank you,</p>
                        <p>John Doe</p>
                      </textarea>
                  </div>
               
               </form>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                
                  <button type="submit" class="btn btn-primary" name="submit"><i class="far fa-envelope"></i> Send</button>
                </div>
               
              </div>
              <!-- /.card-footer -->
            </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->


      


    </section>
    <!-- /.content -->
  </div>

@endsection

@section('js')



  @if(Session::has('status'))

    <script type="text/javascript">
      toastr.success("{!!Session::get('status')!!}");
    </script>

  @endif


@endsection



