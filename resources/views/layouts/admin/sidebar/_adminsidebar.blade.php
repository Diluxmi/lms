
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
            
              <div class="nav-profile-image">
             
              <img src="{{ asset('/images/logo/lms.png') }}" class="lms"/>
      
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center text-primary" >Cp/Gp/Galaboda T.V</span>
                
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
            <a class="nav-link" href="{{ route('user.index') }}">
              <i class="mdi mdi-account"></i>
              <span class="menu-title">User</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('teacher.index') }}">
              <i class="mdi mdi-account"></i>
              <span class="menu-title">Teacher</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('student.gindex')}}">
              <i class="mdi mdi-account"></i>
              <span class="menu-title">Student</span>
            </a>
          </li>

     
            <li class="nav-item">
            <a class="nav-link" href="{{route('exam.sindex')}}"> <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Exam</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('assessment.index')}}"> <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Assessment</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=""> <i class="mdi mdi"></i>
              <span class="menu-title">Signout</span>
            </a>
          </li>
          
        </ul>
      </nav>