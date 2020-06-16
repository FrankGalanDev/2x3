<!DOCTYPE html>
<html>
  <head> 
   <meta charset="utf-8">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dos por Tres</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/fontawesome/css/all.css') }}" >
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Muli:300,400,700')}}">
    
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!----------------------------------INICIO BODY------------------------------>
  <body>
  <!-----------------------------INICIO HEADER----------------------->
    <header class="header"> 
  <!-------------------------INICIO NAVBAR-------------------->    
      <nav class="navbar navbar-expand-lg">
  <!-----------------INICIO PANEL BUSQUEDA--------------->      
       
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Cerrar<i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="Que buscas?...">
                <button type="submit" class="submit">Buscar</button>
              </div>
            </form>
          </div>
        </div>
  
  <!-----------------FINAL  PANEL BUSQUEDA---------------> 

  <!-----------------INICIO  CONTENEDOR MENU--------------->  
        <div class="container-fluid d-flex align-items-center justify-content-between">
  <!-----------------INICIO  HEADER NAVBAR--------------->        
          <div class="navbar-header">

            <a href="{{ asset('admin')}}" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase">
                <strong class="text-primary">Dos</strong>
                <strong>por Tres</strong>
              </div>
              <div class="brand-text brand-sm">
                <strong class="text-primary">2x</strong>
                <strong>3</strong>
              </div>
            </a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle">
              <i class="far fa-arrow-alt-circle-left"></i>
            </button>
          </div>

          <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 <p>  Bienvenido {{ auth()->user()->name }}. Estas dentro del home!<p>
          </div>
  <!-----------------FINAL  HEADER NAVBAR--------------->   
  
  <!-----------------INICIO  CAJA MENSAJES--------------->        
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item">
              <a href="#" class="search-open nav-link">
                <i class="icon-magnifying-glass-browser"></i>
              </a>
            </div>
            
            <div class="list-inline-item dropdown">
              <a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle">
                <i class="icon-email"></i>
                <span class="badge dashbg-1">
                  5
                </span>
              </a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                <a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile">
                    <img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   
                    <strong class="d-block">
                      Nadia Halsey
                    </strong>
                    <span class="d-block">
                      lorem ipsum dolor sit amit
                    </span>
                    <small class="date d-block">
                      9:30am
                    </small>
                  </div>
                </a>
                <a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile">
                    <img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                    <div class="status away"></div>
                  </div>
                  <div class="content">   
                    <strong class="d-block">
                      Peter Ramsy
                    </strong>
                    <span class="d-block">
                      lorem ipsum dolor sit amit
                    </span>
                    <small class="date d-block">
                      7:40am
                    </small>
                  </div>
                </a>
                <a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile">
                    <img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                    <div class="status busy"></div>
                  </div>
                  <div class="content">   
                    <strong class="d-block">
                      Sam Kaheil
                    </strong>
                    <span class="d-block">
                      lorem ipsum dolor sit amit
                    </span>
                    <small class="date d-block">
                      6:55am
                    </small>
                  </div>
                </a>
                <a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile">
                    <img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                    <div class="status offline"></div>
                  </div>
                  <div class="content">   
                    <strong class="d-block">
                      Sara Wood
                    </strong>
                    <span class="d-block">
                      lorem ipsum dolor sit amit
                    </span>
                    <small class="date d-block">
                      10:30pm
                    </small>
                  </div>
                </a>
                <a href="#" class="dropdown-item text-center message">
                  <strong>
                    See All Messages 
                    <i class="fa fa-angle-right">
                    </i>
                  </strong>
                </a>
              </div>
            </div>
  <!-----------------FINAL  CAJA MENSAJES---------------> 
  <!-----------------INICIO CJA EXPORTCIONES-------------->           
            <div class="list-inline-item dropdown">
              <a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle">
                <i class="icon-new-file"> </i>
                <span class="badge dashbg-3">
                  9
                </span>
              </a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list">
                <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between">
                    <strong>
                      Exportacion 1
                    </strong>
                    <span>
                      40% complete
                    </span>
                  </div>
                  <div class="progress">
                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1">
                    </div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between">
                    <strong>
                      Exportacion 2
                    </strong>
                    <span>
                      20% complete
                    </span>
                  </div>
                  <div class="progress">
                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3">
                      
                    </div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between">
                    <strong>
                      Exportacion 3
                    </strong>
                    <span>
                      70% complete
                    </span>
                  </div>
                  <div class="progress">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2">
                    </div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between">
                    <strong>
                      Exportacion 4
                    </strong>
                    <span>
                      30% complete
                    </span>
                  </div>
                  <div class="progress">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4">
                    </div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between">
                    <strong>
                      Exportacion 5
                    </strong>
                    <span>
                      65% complete
                    </span>
                  </div>
                  <div class="progress">
                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1">
                    </div>
                  </div>
                </a>
                <a href="#" class="dropdown-item text-center"> 
                  <strong>
                    See All Tasks
                    <i class="fa fa-angle-right">
                       
                    </i>
                  </strong>
                </a>
              </div>
            </div>

  <!-----------------FINAL PANEL EXPORTACIONES---------------> 

  <!-----------------INICIO  CAJA OPCIONES--------------->           
  
            <div class="list-inline-item dropdown menu-large">
              <a href="#" data-toggle="dropdown" class="nav-link">
                Opciones
                <i class="fa fa-ellipsis-v"> </i>
              </a>
              <!--
              <div class="dropdown-menu megamenu">
                <div class="row">
                  <div class="col-lg-3 col-md-6">
                    <strong class="text-uppercase">
                     Ir a otros sitios
                    </strong>
                    <ul class="list-unstyled mb-3">
                      <li>
                        <a href="https://malbona.com">
                          Malbona
                        </a>
                      </li>
                      <li>
                        <a href="https://sipsan.com">
                          Sipsan
                        </a>
                      </li>
                      <li>
                        <a href="https://sipsan.com">
                          Deseos Discretos
                        </a>
                      </li>-->
                   <!--   <li>
                        <a href="#">
                          At vero eos
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Consectetur adipiscing
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Duis aute irure
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Necessitatibus saepe
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Maiores alias
                        </a>
                      </li>
                    </ul>-->
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <strong class="text-uppercase">
                      Páginas de interes
                    </strong>
                    <ul class="list-unstyled mb-3">
                      <li>
                        <a href="{{ 'tickets/create' }}">
                          Abrir ticket
                        </a>
                      </li>
                      <li>
                        <a href="{{ 'user/update' }}">
                          Perfil
                        </a>
                      </li>
                    <li>
                        <a href="{{ 'faq' }}">
                         Informacion
                        </a>
                      </li>
                 <!-- <li>
                        <a href="#">
                          At vero eos
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Consectetur adipiscing
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Duis aute irure
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Necessitatibus saepe
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Maiores alias
                        </a>
                      </li>-->
                    </ul>
                  </div>
             <!--       
                   <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Paginas Interes</strong>
                    <ul class="list-unstyled mb-3">
                      <li>
                        <a href="#">
                          Pagina 1
                        </a>
                      </li>
                      <li>
                        <a href="#">
                           Pagina 2
                        </a>
                      </li>
                      <li>
                        <a href="#">
                           Pagina 3
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          At vero eos
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Consectetur adipiscing
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Duis aute irure
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Necessitatibus saepe
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Maiores alias
                        </a>
                      </li> 
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Paginas de Interés</strong>
                    <ul class="list-unstyled mb-3">
                      <li>
                        <a href="#">
                          Pagina 1
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Pagina 2
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Pagina 3
                        </a>
                      </li>
                     <li>
                      <a href="#">
                          At vero eos
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Consectetur adipiscing
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Duis aute irure
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Necessitatibus saepe
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Maiores alias
                        </a>
                      </li>-->
                    </ul>
                  </div>
                </div>-->
              <!--  
                <div class="row megamenu-buttons text-center">
                  <div class="col-lg-2 col-md-4">
                    <a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i>
                      <strong>
                        Demo 1
                      </strong>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i>
                      <strong>
                        Demo 2
                      </strong>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i>
                      <strong>
                        Demo 3
                      </strong>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i>
                      <strong>
                        Demo 4
                      </strong>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i>
                      <strong>
                        Demo 5
                      </strong>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i>
                      <strong>
                        Demo 6
                      </strong>
                    </a>
                  </div>
                </div>
              </div>
            </div>-->
  <!-----------------FINAL  CAJA OPCIONES---------------> 

  <!-----------------INICIO CAJA IDIOMAS---------------> 
            
            <div class="list-inline-item dropdown">
              <a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle">
                <img src="img/flags/16/GB.png" alt="English">
                  <span class="d-none d-sm-inline-block">
                    Español
                  </span>
              </a>
              <!--
              <div aria-labelledby="languages" class="dropdown-menu">
                <a rel="nofollow" href="#" class="dropdown-item"> 
                  <img src="img/flags/16/DE.png" alt="English" class="mr-2">
                  <span>
                    Ingles
                  </span>
                </a>
                <a rel="nofollow" href="#" class="dropdown-item"> 
                  <img src="img/flags/16/FR.png" alt="English" class="mr-2">
                  <span>
                    Francés  
                  </span>
                </a>
              -->
              </div>

            </div>
  <!-----------------FINAL  CAJA IDIOMAS--------------->   

  <!-----------------INICIO  CAJA SALIR--------------->          
                         
            <div class="list-inline-item" >
              <a class="list-inline-item logout" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    {{ __('Salir') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
  <!-----------------FINAL CAJA SALIR--------------->  
          </div>
  <!-----------------FINAL CAJA MENSAJES--------------->
        </div>
  <!-----------------FINAL CONTENEDOR MENU--------------->  
  
      </nav>
  <!-------------------------FINAL NAVBAR-------------------->

    </header>
  <!-----------------------------FINAL  HEADER----------------------->  


    <div class="d-flex align-items-stretch">
  <!-----------------------------MENU COLUMNA LATERAL-----------------------> 
      <nav id="sidebar">
  <!-----------INICIO ENCAB. MENU COLUMNA LATERAL------------------->      
        
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/curriculo.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ auth()->user()->name }}</h1>
            <p>{{ auth()->user()->roles }}</p>
          </div>
        </div>
  <!-----------FINAL ENCAB. MENU COLUMNA LATERAL------------------->   
  <!-----------MENUS------------------->         
        <span class="heading">Principal</span>
        <ul class="list-unstyled">
          <li class="active"><a href="{{asset('home')}}"> <i class="icon-home"></i>Inicio </a></li>

          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Perfil </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{asset('user/show')}}">Ver </a></li>
              <li><a href="{{asset('user/update')}}">Modificar</a></li>
              <li><a href="{{asset('user/delete')}}">Eliminar</a></li>
            </ul>
          </li>
      <!--
           
          <li><a href="{{asset('exportaciones')}}"> <i class="icon-grid"></i>Ticket. </a></li>    
          
          <li><a href="{{asset('graficos')}}"> <i class="fa fa-bar-chart"></i>Graficos </a></li>
         
          <li><a href="{{asset('tickets')}}"> <i class="icon-grid"></i>Tickets </a></li>
          <li><a href="{{asset('users')}}"> <i class="icon-grid"></i>Usuarios </a></li>
          <li><a href="{{asset('visitas_mensuales')}}"> <i class="icon-grid"></i>Visitas </a></li>
        -->
  <!--   
          <li><a href="{{asset('formularios.html')}}"> <i class="icon-padnote"></i>Forms </a></li>
          
          
          
        </ul><span class="heading">Extras</span>-->
        
      </nav>
  <!-----------FINAL ENCAB. MENU COLUMNA LATERAL------------------->  
  
  <!--------------------INICIO CONTENIDO CENTRAL----------------------->   
      <div class="page-content">
  <!------------INICIO ENC CONT.CENTRAL--------------------------->  
        <div class="page-header">
          <div class="container-fluid align-items-center">
            <h2 class="h5 no-margin-bottom">Escritorio
              <a href="{{asset('tickets/create')}}"  style="font-size:0.8rem; font-family: Muli"type=" " class=" col-2 text-center  text-white my-auto">
                  <i class="fas fa-plus-circle" style="color:green;"></i>
                  Nuevo Ticket
                </i>
              </a>
              <a href="{{asset('user/show')}}"  style="font-size:0.8rem; font-family: Muli" type=" " class=" col-2 text-center  text-white my-auto  ">
                <i class="fas fa-plus-circle" style="color:green;"></i> 
                Perfil </i>
              </a>
              <!--
              <a href="{{asset('sitios/create')}}"  style="font-size:0.8rem; font-family: Muli"type=" " class=" col-2 text-center  text-white my-auto"><i class="fas fa-plus-circle" style="color:green;"></i> Nuevo sitio</i></a>
              <a href="{{asset('incidencias/create')}}"  style="font-size:0.8rem; font-family: Muli" type=" " class=" col-2 text-center  text-white my-auto "><i class="fas fa-plus-circle" style="color:green;"></i> Nueva Incidencia </i></a>
              <a href="{{asset('pagos/create')}}"  style="font-size:0.8rem; font-family: Muli"type=" " class=" col-2 text-center  text-white my-auto"><i class="fas fa-plus-circle" style="color:green;"></i> Nuevo Pago</i></a>
            -->
              
            </h2>




          </div>
        </div>
  <!------------FINAL ENC CONT.CENTRAL------------------->
        <div class="content">
                  
         @yield('content')
                 
        </div>
    

  <!--------------------INICIO FOOTER-------------------->
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
             
              <p class="no-margin-bottom">2019 &copy; AsereA. Diseñado por 
                <a href="https://frankgalandev.com">Frank Galan</a>.
              </p>
            </div>
          </div>
        </footer>
   <!------------------FINAL FOOTER------------------------>      
      </div>
  <!--------------------FINAL CONTENIDO CENTRAL----------------------->    
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    
    <script src="{{asset('js/front.js') }}"></script>
  </body>
</html>