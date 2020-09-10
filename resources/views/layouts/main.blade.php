<html>
    <head>
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
    </head>
    <body>
       
        <nav>
            @if(Auth::check())
              <a href="/logout">logout</a>
            @else
            <a href="/register">register</a>
            @endif
        </nav>


        <div class="container">

            @yield('content')
            
        </div>
        

    
    </body>
</html>