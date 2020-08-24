

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 

    <!-- propios del header -->
<meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/font/Tangerine.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/font/Yanone.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/style.system.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/style_index.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/DATATABLES/jquery.dataTables.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/DATATABLES/select.dataTables.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/DATATABLES/buttons.dataTables.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/DATATABLES/dataTables.colVis.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/DATATABLES/jquery.dataTables.css') }}"/>
   <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/DATATABLES/jquery.dataTables.min.css') }}"/>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/DATATIMEPICKER/jquery.datetimepicker.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/SWEETALERT2/sweetalert2.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/SWEETALERT2/sweetalert2.min.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/NOTIFLT!/notifIt.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/libraries/iAROUSE/ihover.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('css/css/avgrund.css') }}" />

  <script type="text/javascript" src= "{{ asset('js/libraries/JQUERY/jquery-1.9.1.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/libraries/JQUERY/jquery.validate.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.flash.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.html5.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/buttons.print.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/dataTables.buttons.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/dataTables.colVis.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/dataTables.select.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/jquery.dataTables.min1.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/jszip.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/pdfmake.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/sum().js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/libraries/DATATABLES/vfs_fonts.js') }}"></script>

  

  <script type="text/javascript" src="{{ asset('js/libraries/NOTIFLT!/notifIt.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/css/avgrund.js') }}"></script>



 </head>

<body>
  

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of navbar                
                    -->
                    <div id="menubar">
                        <ul id="menu">
               
                    <li class="menu-registrados"><a href="#">ADMINISTRATIVO</a>
         
      <ul>
       
        <li><a href="{{ url('/departamento.registro_departamento') }}">DEPARTAMENTOS</a>
          <ul>
            <li><a href="{{ url('/oficina.registro_oficina') }}">OFICINAS</a></li>
          </ul>
        </li>
        <li><a href="{{ route('cliente.index') }}">CLIENTES</a></li>
        <li><a href="{{ url('/tupa.registro_tupa') }}">T.U.P.A.</a></li>
      </ul>
      </li>
    
  
      <li class="menu-registrados"><a href="#">TRÁMITE</a>
      <ul>
        <li><a href="{{ route('expediente.index') }}">VISUALIZAR EXPEDIENTES</a>
        <li><a href="{{ route('movimiento.index') }}">DELEGAR EXPEDIENTES</a></li>
        <li><a href="{{ route('atencion.index') }}">VERIFICAR DOCUMENTOS ATENDIDOS</a></li>
        <li><a href="{{ route('recepcion.index') }}">VERIFICAR DOCUMENTOS ESPERADOS</a></li>
      </ul>
      </li>
     
      
      
          <li class="menu-registrados"><a href="#">Evaluar Indicadores</a>
      <ul>
        <li><a href="{{ route('eficacia.index')}}">EFICACIA</a></li>
        <li><a href="{{ route('eficiencia.index') }}">EFICIENCIA</a></li>
      </ul>
      </li>
     
                    </ul>
                    </div>

                     <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <center><h3>CUENTA</h3></center>

                                    <table class="tabla_ccs" width="200px">
      <tr>
        <td style="background: #fff;">USUARIO</td>
      </tr>
      <tr>
        <td>{{ auth()->user()->email }}</td>
      </tr>
      <tr>
        <td style="background: #fff;">NOMBRE Y APELLIDO</td>
      </tr>
      <tr>
        <td>{{ auth()->user()->name }}, {{ auth()->user()->apellido }}</td>
      </tr>
      <tr>
        <td>
          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
        </td>
      </tr>
      </table>
      <br><br><br>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf

                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
             
            @yield('content') <!-- aqui se mostrar la vista home -->

            @yield('cliente')
           
            @yield('registro_departamentos')
             
            @yield('registro_oficina')

            @yield('expediente')

            @yield('tupa') 

            @yield('movimiento')
          
            @yield('atencion')

            @yield('recepcion')

         @yield('eficiencia')

         @yield('eficacia')
         
            @yield('movie')

          </main>
    </div>
    <div class="avgrund-cover"></div>



</body>


</html>
