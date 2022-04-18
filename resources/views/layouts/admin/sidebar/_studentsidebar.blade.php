
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="../assets/images/faces/face1.jpg" alt="profile" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center"><h5><b>Cp/Gp/Galapoda T.V</b></h5></span>
                
              </div>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('subject.index')}}">
              <i class="mdi mdi-note"></i>
              <span class="menu-title">Subject</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Exam</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Assessment</span>
            </a>
          </li>
          
        </ul>
      </nav>