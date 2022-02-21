<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.admin._meta')
@include('layouts.admin._style')
</head>


<body>
<div class="container-scroller">
 @include('layouts.admin._header')


            @switch (Auth::user()->role->name ) 
              @case ('Admin')
                @include('layouts.admin.sidebar._adminsidebar')
                @break;
             
               @case ('Teacher')
                @include('layouts.admin.sidebar._teachersidebar')
               @break; 
               
                @case ('Student')
                    @include('layouts.admin.sidebar._studentsidebar')
                    @break; 
            @endswitch
 <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>


       
 
                

        @yield('header')
    
      
    
    <div class="main-panel">
    <div class="content-wrapper pb-0">
   
    
          @yield('content')
          </div>
         

@include('layouts.admin._footer')



</div>
   </div>


    @include('layouts.admin._script')
    @yield('js')
    
</body>

</html>
  