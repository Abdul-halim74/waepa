  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin')}}" class="brand-link">
      <img src="{{ asset('frontend_assets/img/logo.png') }}" alt="WAEPA Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">WAEPA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex dropdown">
        <div class="image dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{asset('backend_assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alexander Pierce</a>


        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a href="{{ route('logout') }}" style="display: block; margin-left: 10px;color: black; padding: 10px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

         <a href="" style="display: block; margin-left: 10px;color: black; padding: 10px;">Edit Profile</a>
       
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

          



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/create_blog_category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Blog Category</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/create_blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/blog_list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog List</p>
                </a>
              </li>
              


            </ul>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Member
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('admin/member_lists')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member List</p>
                </a>
              </li>



            </ul>
          </li>



   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
