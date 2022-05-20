
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
              <img src="{{ asset('/images/logo/lms.png') }}" class="lms"/>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center text-red">Cp/Gp/Galapoda T.V</span>
                
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
            <a class="nav-link" href="{{route('student.gindex')}}">
              <i class="mdi mdi-account"></i>
              <span class="menu-title">Student</span>
            </a>
          </li>

         

          <li class="nav-item">
            <a class="nav-link" href="{{route('subject.index')}}">
              <i class="mdi mdi-note"></i>
              <span class="menu-title">Subject</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('exam.index')}}">
              <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Exam</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('assessment.index')}}">
              <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Assessment</span>
            </a>
          </li>

         
          <li class="nav-item">
            <a class="nav-link" href="{{route('report.term1')}}">
              <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Report 1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('report.term2')}}">
              <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Report 2</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('report.term3')}}">
              <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Report 3</span>
            </a>
          </li>

          
       
          <li class="nav-item ">
             
             <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
             
             <div class="nav-profile-text"><span class="menu-title">SignOut</span></div>

             </a>
            
             <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
             <a class="dropdown-item" href="#">
               <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
               <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
               <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
             
             </div>
           </li>

        </ul>
      </nav>