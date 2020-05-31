<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

            *{
                font-family: ;

            }

        .body{
            background-color: #D9D9D9;
            font-family: ;
        }

        #ap .navbar {
          background-color: #737373;  
        }

        .footer{
            background-color: #737373;
            padding: 20px 0 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%

           
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-ligh">
  <a class="navbar-brand" href="{{ url('/') }}">Farmacia Yerba Buena, C.A</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/') }}"><i class="fa fa-home"> Home</i><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/facturas') }}"><i class="fa fa-book"> Facturas</i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ url('/proveedors') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle"> Proveedores</i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/proveedors') }}"><i class="fa fa-list"> Lista de proveedores</i></a>
          <a class="dropdown-item" href="{{ url('/proveedors/create') }}"><i class="fa fa-user-circle"> New proveedor</i></a>
          <div class="dropdown-divider"></div>
          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" value="{{ request('search') }}" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

        <main class="py-4 body">
            @yield('content')
        </main>
    </div>

    <div class="footer text-center text-ligh">
        @yield('footer')

        José Bustamante, WebDeveloper @Todos los derechos reservados 2020.

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>



<!-- <ul class="navbar-nav ml-auto">
                         Authentication Links 
                        @if(!Auth::check())
                            <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif



<nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-dark text-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Farmacia Yerba Buena
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">
                        <li><a href="{{ url('/facturas') }}" class="nav-link"><strong>Facturas</strong></a></li>
                        <li><a href="{{ url('/proveedors') }}" class="nav-link"><strong>Proveedores</strong></a></li>
                    </ul>

                     <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    Right Side Of Navbar 
                     
                    
                </div>
            </div>
        </nav>



                    </ul> -->