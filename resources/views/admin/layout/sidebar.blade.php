<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('frontend')}}/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Privad</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">{{@Auth::user()->name}}</a>
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
      @php
      $prefix = Request::route()->getPrefix();
      $route = Request::route()->getName();
      @endphp

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('region.index')}}" class="nav-link {{$route == 'region.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Region 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('subregion.index')}}" class="nav-link {{$route == 'subregion.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sub Region 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('city.index')}}" class="nav-link {{$route == 'city.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                City
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link {{$route == 'category.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Category
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('subcategory.index')}}" class="nav-link {{$route == 'subcategory.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sub Category
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>