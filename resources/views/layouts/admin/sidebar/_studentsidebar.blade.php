<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('images/SCL.png' ) }}" alt="logo" /></a>
          
          
          
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              
            </a>
          </li>


<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-account-plus mdi-18px"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
       
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
              <div> 
  <a class="btn btn-primary btn-icon-spilt" href ="{{ route('user.create') }}"> Create User</a>
            </div>
</li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.index') }}">Admin</a>
</li>
              
                  <li class="nav-item">
                  <a class="nav-link" href="{{ route('teacher.index') }}">Teacher</a>
</li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('student.index') }}">Student</a>
              </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('subject.index') }}">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Subject</span>
            </a>
          </li>
          <li class="nav-item">
          
            <a class="nav-link" href="{{ route('exam.index') }}">
            
              <i class="mdi mdi-chart-bar menu-icon"></i><span class="menu-title">Exam</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{ route('assiegnment.index') }}">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Assiegnments</span>
            </a>
          </li>

        </ul>
      </nav>