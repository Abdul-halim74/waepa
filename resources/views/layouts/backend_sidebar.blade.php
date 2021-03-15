  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin')}}" class="brand-link">
      <?php

       $logo = DB::table('logos')->where('id',8)->first();

       // echo "<pre>";

       // print_r($data);die;

      ?>
      <img src="{{ asset('uploads/logo_image') }}/{{$logo->logo_image}}" alt="WAEPA Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">WAEPA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex dropdown">

        <?php
          $user_id = Auth::user()->id;

         $usr_data = DB::select(DB::raw("SELECT usr.member_id,usr.name, mr.user_img FROM `users` usr LEFT JOIN member_register mr on usr.member_id = mr.member_id WHERE usr.id='$user_id' "))[0];


        ?>

        <div class="image dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{asset('uploads/member_image/member_face')}}/{{$usr_data->user_img }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$usr_data->name}}</a>


        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a href="{{ route('logout') }}" style="display: block; margin-left: 10px;color: black; padding: 10px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

         
       
        </div>

        </div>

      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
           

              <a href="{{url('admin')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>

           
          </li>

          



          <li class="nav-item   {{ request()->is('admin/create_blog_category*') ? 'menu-is-opening menu-open' : '' }} {{ request()->is('admin/blog_list*') ? 'menu-is-opening menu-open' : '' }} {{ request()->is('admin/create_blog*') ? 'menu-is-opening menu-open' : '' }}">

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Publications
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{url('admin/create_blog_category')}}" class="nav-link {{ request()->is('admin/create_blog_category*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Publication Category</p>
                </a>
              </li>

              

              <li class="nav-item">
                <a href="{{url('admin/create_blog')}}" class="nav-link {{ request()->is('admin/create_blog*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Publications</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/blog_list')}}" class="nav-link {{ request()->is('admin/blog_list*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Publications List</p>
                </a>
              </li>
              


            </ul>
          </li>

           <li class="nav-item {{ request()->is('admin/create_enewsletter_category*') ? 'menu-is-opening menu-open' : '' }} {{ request()->is('admin/create_enewsletter*') ? 'menu-is-opening menu-open' : '' }} {{ request()->is('admin/enewsletter_list*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 E-Newsletter
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/create_enewsletter_category')}}" class="nav-link {{ request()->is('admin/create_enewsletter_category*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/create_enewsletter')}}" class="nav-link {{ request()->is('admin/create_enewsletter*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create E-Newsletter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/enewsletter_list')}}" class="nav-link {{ request()->is('admin/enewsletter_list*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-Newsletter List</p>
                </a>
              </li>
              


            </ul>
          </li>


           <li class="nav-item {{ request()->is('admin/member_lists*') ? 'menu-is-opening menu-open' : '' }} {{ request()->is('admin/ec_member_setting*') ? 'menu-is-opening menu-open' : '' }}">
           
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Member
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('admin/member_lists')}}" class="nav-link {{ request()->is('admin/member_lists*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member List</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{url('admin/ec_member_setting')}}" class="nav-link {{ request()->is('admin/ec_member_setting*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>EC Member Setting</p>
                </a>
              </li>



            </ul>
          </li>


           <li class="nav-item {{ request()->is('admin/about_us*') ? 'menu-is-opening menu-open' : '' }} {{ request()->is('admin/vision_mission*') ? 'menu-is-opening menu-open' : '' }}
            {{ request()->is('admin/aims_object*') ? 'menu-is-opening menu-open' : '' }}
            {{ request()->is('admin/programs_of_waepa*') ? 'menu-is-opening menu-open' : '' }}

            ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('admin/about_us')}}" class="nav-link {{ request()->is('admin/about_us*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/vision_mission')}}" class="nav-link {{ request()->is('admin/vision_mission*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vision & Mission</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{url('admin/aims_object')}}" class="nav-link {{ request()->is('admin/aims_object*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aims & Objective</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="{{url('admin/programs_of_waepa')}}" class="nav-link {{ request()->is('admin/programs_of_waepa*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programmes of WAEPA</p>
                </a>
              </li>



            </ul>
          </li>


          <li class="nav-item 

          {{ request()->is('advertisment*') ? 'menu-is-opening menu-open' : '' }}
          {{ request()->is('notices*') ? 'menu-is-opening menu-open' : '' }}
          {{ request()->is('slider*') ? 'menu-is-opening menu-open' : '' }}
          {{ request()->is('admin/logo/index*') ? 'menu-is-opening menu-open' : '' }}

            ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                File Upload
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('advert.index')}}" class="nav-link {{ request()->is('advertisment*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Advertisement</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{route('notice.index')}}" class="nav-link {{ request()->is('notices*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Notice</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link {{ request()->is('slider*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Slider </p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{ url('admin/logo/index') }}" class="nav-link {{ request()->is('admin/logo/index*') ? 'active' : '' }}">

                  <i class="far fa-circle nav-icon"></i>
                  <p> Logo </p>
                </a>
              </li>

            </ul>
            
          </li>

           
     


           <li class="nav-item  

           {{ request()->is('backend/waepa_talk*') ? 'menu-is-opening menu-open' : '' }}
           {{ request()->is('backend/waepa_talk_list*') ? 'menu-is-opening menu-open' : '' }}

           ">
            <a href="#" class="nav-link {{ request()->is('backend/waepa_talk*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                WAEPA Talk
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('backend/waepa_talk')}}" class="nav-link {{ request()->is('backend/waepa_talk*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{url('backend/waepa_talk_list')}}" class="nav-link {{ request()->is('backend/waepa_talk_list*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>

             

            </ul>
            
          </li>


           <li class="nav-item

             {{ request()->is('admin/seminar') ? 'menu-is-opening menu-open' : '' }}
             {{ request()->is('admin/seminar_list') ? 'menu-is-opening menu-open' : '' }}
             {{ request()->is('admin/general_meeting') ? 'menu-is-opening menu-open' : '' }}
             {{ request()->is('admin/general_meeting_list') ? 'menu-is-opening menu-open' : '' }}
             {{ request()->is('admin/social_events') ? 'menu-is-opening menu-open' : '' }}
             {{ request()->is('admin/social_events_lists') ? 'menu-is-opening menu-open' : '' }}
           ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Events
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('admin/seminar')}}" class="nav-link {{ request()->is('admin/seminar*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Seminar / Workshop</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="{{url('admin/seminar_list')}}" class="nav-link {{ request()->is('admin/seminar_list*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Seminar / Workshop Lists</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{url('admin/general_meeting')}}" class="nav-link {{ request()->is('admin/general_meeting*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> General Meeting</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{url('admin/general_meeting_list')}}" class="nav-link {{ request()->is('admin/general_meeting_list*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> General Meeting List</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{url('admin/social_events')}}" class="nav-link {{ request()->is('admin/social_events*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Social Events </p>
                </a>
              </li>


               <li class="nav-item">
                <a href="{{url('admin/social_events_lists')}}" class="nav-link {{ request()->is('admin/social_events_lists*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Social Events Lists</p>
                </a>
              </li>

              

            </ul>
            
          </li>



          <li class="nav-item 

             {{ request()->is('backend/create_a_gallary') ? 'menu-is-opening menu-open' : '' }}
             {{ request()->is('backend/gallary_list') ? 'menu-is-opening menu-open' : '' }}

          ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('backend/create_a_gallary')}}" class="nav-link {{ request()->is('backend/create_a_gallary*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create a Gallary</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{url('backend/gallary_list')}}" class="nav-link {{ request()->is('backend/gallary_list*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallary List</p>
                </a>
              </li>

             

            </ul>
            
          </li>

            <li class="nav-item">
               <a href="{{url('admin/constitution')}}" class="nav-link {{ request()->is('admin/constitution*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>

              <p>
               Constitution
              
              </p>
            </a>
            </li> 



            
        


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
