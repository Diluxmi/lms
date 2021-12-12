<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-top sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('images/SCL.png' ) }}" alt="logo" /></a>
         <div>
</br>
</div> 
          
          
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title" font color="white">Dashboard</span>
              
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
            <i class="mdi mdi-account-plus mdi-18px"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
</li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('teacher.index') }}">
            <i class="mdi mdi-account-plus mdi-18px"></i>
              <span class="menu-title">Teacher</span>
              <i class="menu-arrow"></i>
            </a>
</li>

<li class="nav-item">
            <a class="nav-link" href="{{ route('student.index') }}">
            <i class="mdi mdi-account-plus mdi-18px"></i>
              <span class="menu-title">Student</span>
              <i class="menu-arrow"></i>
            </a>
</li>
  
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