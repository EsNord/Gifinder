<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gifinder</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>


    <div id="app" style="background-color: #333">
        @guest

        @else

        <nav class="navbar navbar-expand-md " style="border: 0px">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <p class="h2" style="display: inline-block ;margin-left: 5px;font-family: Gabriola;font-size: 50px;color: #DC143C;filter:  drop-shadow(0 0 0.75rem crimson) ">Gifinder</p>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto container4" >
                    </ul>
                    @guest
                    @else
                        <a class="nav-link" role="button">
                            <p style="display: inline-block ;margin-left: 5px;font-family: Gabriola;font-size: 30px;color: gray;">{{ Auth::user()->name }}</p>
                        </a>

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        </a>

                        <div >
                            <a href="{{ route('logout') }}" class="fa fa-power-off" style="color: crimson;margin-bottom: 20px"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
        @endguest

        @yield('content')

        <main class="py-4">
        </main>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>

    @stack('js')
</body>
</html>
