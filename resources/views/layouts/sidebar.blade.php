<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('admin_assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('admin_assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="./index3.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
         
       
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('pages.gallery')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('pages.video')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('pages.video')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Events</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('pages.video')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('pages.video')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notifications</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('pages.video')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          <form method="POST" action="{{ route('logout') }}">
           @csrf
            <button type="submit" class="btn btn-primary col-12">Logout</button>
          </form>
    


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>