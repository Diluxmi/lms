<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



    <div class='head'>

</head>
    <body>
    <div class = "background">
    <div id="app" class="main-img">
    <div class="logo" align="center">
    <a href="/"> <img src="{{ asset('/images/logo/lms.png') }} " width="100px" height=" 100px" align="center" /></a>
</div>
        <div class="text-center" align="center" >
        <h1> CP/GP Galaboda T.V</h1> 

</div>
</div>
    
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <div class="text-center" align="center">
                        <a href="{{ url('/dashboard') }}" class="text-center text-gray-700 underline ">Dashboard</a>
                    </div>
                        @else
                    <div class="text-center" align="center" >     
<div class="container"> 

    <a class="btn btn-primary btn-icon-spilt" href="{{ route('login') }}">Log in</a>
</div>
                    @endauth
                </div>
            @endif
            <div class=''>
                </div>
            </div>
</div>
</div>
</div>
</div>
    </body>
    
</div>
</html>
