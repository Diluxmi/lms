<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <div class='head'>
        <div class="text-align: center">
        <h1> CP/GP Galaboda T.V<h2>
</div>
</div>
</head>
    <body>
    
    
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
<div class="container"> 

    <a class="btn btn-primary btn-icon-spilt" href="{{ route('login') }}">Log in</a>
</div>
                    @endauth
                </div>
            @endif
            <div class=''>
                </div>
            </div>
       
    </body>
    
    
</html>
