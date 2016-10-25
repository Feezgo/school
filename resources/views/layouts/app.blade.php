<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                <img style="max-width:50px; margin-top: 1px;"
             src="/imagen/cole.jpg">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Ingresar</a></li>
                        @else
                            
                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Pin <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/register') }}">Registrar</a></li>
                                    <li><a href="{{ url('/formularioPin') }}">Generar pin</a></li>
                                    <li><a href="{{ url('/listadoPin') }}">Listado pin</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <!-- Scripts -->
    @section('scripts')
          <script src="/js/app.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <!--<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js"></script>-->
          <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
          <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
          <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">      
          <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
          <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
          <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
          <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
          <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css">
          <script src=" https://cdn.datatables.net/responsive/2.0.1/js/dataTables.responsive.min.js"></script>
          <script src=" https://cdn.datatables.net/responsive/2.0.1/js/responsive.bootstrap.min.js"></script> 
          <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.1/css/responsive.bootstrap.min.css">
    @show
</body>
</html>

