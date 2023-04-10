<div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      
        <ul class="nav">
      
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="/">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Employees</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">create ...</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/AddEmployee')}}">Add employee</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/country') }}">Add country</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Add departiment</a></li>
              </ul>
            </div>
          </li>



        </ul>
      </nav>