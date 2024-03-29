<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Workshop') }}</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script> 
        $(document).ready(function(){
            $("#mentes").click(function(){
                var ujMegye = $("#input").val();
                alert(ujMegye);
                
                $.ajax({
                    
                    url:'connect.php',
                    method:'POST',
                    data:{
                        ujMegye = ujMegye,
                        
                        
                    },
                    success:function(data){
                        alert(data);   
                    }
                });
        });
        });
        

    
    </script>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    <style type="text/css">
        i{
            font-size: 20px !important;
            /*padding: 10px;*/
        }
    </style>
    <!-- Icons -->
</head>
<body>
    <div id="app">
        <div class="container">
            <nav id="header" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}"><i class="fa-solid fa-house fa-beat" style="color: #000000;"></i></a>

                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Left Side Of Navbar -->
                            <!--<div class="dropdown">-->
<!--                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Törzsadatok
                                </a>-->
                                <!--<ul class="navbar">-->
                                    <li><a id="cim" href="{{route('megyekk')}}">Vármegyék</a></li>&nbsp;
                                   
                                <!--</ul>-->
                            <!--</div>-->
                       </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
<!--                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Regisztrálás') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest-->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-center">
            {{ config('app.name', 'Workshop') }} v{{ env('APP_VERSION') }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
    
</body>
</html>

