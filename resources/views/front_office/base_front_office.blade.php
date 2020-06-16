<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dos por Tres</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ 'vendor/bootstrap/css/bootstrap.min.css' }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ 'vendor/font-awesome/fontawesome-free-5.13.0-web/css/all.css' }}">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="{{ 'https://fonts.googleapis.com/css?family=Roboto:300,400,700' }}">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{ 'vendor/bootstrap-select/css/bootstrap-select.min.css' }}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ 'vendor/owl.carousel/assets/owl.carousel.css' }}">
    <link rel="stylesheet" href="{{ 'vendor/owl.carousel/assets/owl.theme.default.css' }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ 'css/style.frontoffice.css' }}" >
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ 'css/custom.css' }}">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{ ('img/favicon.ico" type="image/x-icon') }}">
    <link rel="apple-touch-icon" href="{{ 'img/apple-touch-icon.png' }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ 'img/apple-touch-icon-57x57.png' }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ 'img/apple-touch-icon-72x72.png' }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ 'img/apple-touch-icon-76x76.png' }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ 'img/apple-touch-icon-114x114.png' }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ 'img/apple-touch-icon-120x120.png' }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ 'img/apple-touch-icon-144x144.png' }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ 'img/apple-touch-icon-152x152.png' }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Estamos disponibles en el +34632208159 y en info@dosportres.org</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="{{ '#'}}"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="{{ '#'}}"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="login">
                  <a href="{{ 'login'}}"  class="login-btn">
                    <i class="fa fa-sign-in"></i>
                      <span class="d-none d-md-inline-block">Entrar</span>
                  </a>
                
                  <a href="{{'register'}}" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Crear Cuenta</span></a>
                 
                </div>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="{{ 'https://www.facebook.com/Dos-por-Tres-114682930265138'}}"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="{{ 'https://www.instagram.com/2xTres_world'}}" target="blank" ><i class="fab fa-pinterest"></i></a></li>
                  <li class="list-inline-item"><a href="{{ '#'}}"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="{{ '#'}}"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Acceso Clientes</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Entrar</button>
                </p>
              </form>
              <p class="text-center text-muted">Aún no estas registrado?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Crea tu cuenta ahora</strong></a>!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home"><img src="{{ ('img/logo_dos_por_tres_web.png')}}" alt="Logo dos por tres " class="d-none d-md-inline-block"><img src="{{ ('img/logo-small-web.png')}}" alt="logo dos por tres" class="d-inline-block d-md-none"><span class="sr-only">Dos por Tres - Ir al Inicio</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="{{ ('inicio') }}" >Inicio <b class="caret"></b></a>
                  
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Sitios<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="{{ ('img/template-easy-customize.png')}}" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Tipos</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('tecnologia')}}" class="nav-link">Tecnología</a></li>
                            <li class="nav-item"><a href="{{ ('sexualidad')}}" class="nav-link">Sexualidad</a></li>
                            <li class="nav-item"><a href="{{ ('moda')}}" class="nav-link">Moda</a></li>
                            <li class="nav-item"><a href="{{ ('alimentacion')}}" class="nav-link">Alimentos</a></li>
                            <li class="nav-item"><a href="{{ ('creativos')}}" class="nav-link">Creativos blocks</a></li>
                            <li class="nav-item"><a href="{{ ('salud')}}" class="nav-link">Salud
                            <li class="nav-item"><a href="{{ ('negocios')}}" class="nav-link">Negocios</a></li>
                            <li class="nav-item"><a href="{{ ('blog')}}" class="nav-link">Blog_Personal</a></li>
                            <li class="nav-item"><a href="{{ ('mascotas')}}" class="nav-link">Mascotas</a></li>
                          </ul>
                        </div>
                        <!--
                        <div class="col-lg-3 col-md-6">
                          <h5>Servicios especializados</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('inmobiliaria')}}" class="nav-link">Default sticky header</a></li>
                            <li class="nav-item"><a href="{{ ('gestor_pacientes')}}" class="nav-link">No sticky header</a></li>
                            <li class="nav-item"><a href="{{ ('gestor_tareas')}}" class="nav-link">Light header</a></li>
                          </ul>
                        </div>
                      -->
                      </div>
                    </li>
                  </ul>
                </li>
<!--
                <li class="nav-item dropdown menu-large"><a href="{{ ('#')}}" data-toggle="dropdown" class="dropdown-toggle">Portfolio <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="{{ ('img/template-homepage.png')}}" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('portfolio-2.html')}}" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-no-space-2.html')}}" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-3.html')}}" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-no-space-3.html')}}" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-4.html')}}" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-no-space-4.html')}}" class="nav-link">4 columns with negative space</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-detail.html')}}" class="nav-link">Portfolio - detail</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-detail-2.html')}}" class="nav-link">Portfolio - detail 2</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('about.html')}}" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="{{ ('team.html')}}" class="nav-link">Our team</a></li>
                            <li class="nav-item"><a href="{{ ('team-member.html')}}" class="nav-link">Team member</a></li>
                            <li class="nav-item"><a href="{{ ('services.html')}}" class="nav-link">Services</a></li>
                          </ul>
                          <h5>Marketing</h5>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="{{ ('tienda')}}" class="nav-link">Packages</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>


               ========== FULL WIDTH MEGAMENU ================= 
                <li class="nav-item dropdown menu-large"><a href="{{ ('#')}}" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">All Pages <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <h5>INICIO</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('index.html')}}" class="nav-link">Option 1: Default Page</a></li>
                            <li class="nav-item"><a href="{{ ('index2.html')}}" class="nav-link">Option 2: Application</a></li>
                            <li class="nav-item"><a href="{{ ('index3.html')}}" class="nav-link">Option 3: Startup</a></li>
                            <li class="nav-item"><a href="{{ ('index4.html')}}" class="nav-link">Option 4: Agency</a></li>
                            <li class="nav-item"><a href="{{ ('index5.html')}}" class="nav-link">Option 5: Portfolio</a></li>
                          </ul>
                          <h5>About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('about.html')}}" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="{{ ('team.html')}}" class="nav-link">Our team</a></li>
                            <li class="nav-item"><a href="{{ ('team-member.html')}}" class="nav-link">Team member</a></li>
                            <li class="nav-item"><a href="{{ ('services.html')}}" class="nav-link">Services</a></li>
                          </ul>
                          <h5>Marketing</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('packages.html')}}" class="nav-link">Packages</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('portfolio-2.html')}}" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-no-space-2.html')}}" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-3.html')}}" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-no-space-3.html')}}" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-4.html')}}" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-no-space-4.html')}}" class="nav-link">4 columns with negative space</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-detail.html')}}" class="nav-link">Portfolio - detail</a></li>
                            <li class="nav-item"><a href="{{ ('portfolio-detail-2.html')}}" class="nav-link">Portfolio - detail 2</a></li>
                          </ul>
                          <h5>User pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('customer-register.html')}}" class="nav-link">Register / login</a></li>
                            <li class="nav-item"><a href="{{ ('customer-orders.html')}}" class="nav-link">Orders history</a></li>
                            <li class="nav-item"><a href="{{ ('customer-order.html')}}" class="nav-link">Order history detail</a></li>
                            <li class="nav-item"><a href="{{ ('customer-wishlist.html')}}" class="nav-link">Wishlist</a></li>
                            <li class="nav-item"><a href="{{ ('customer-account.html')}}" class="nav-link">Customer account / change password</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Shop</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('shop-category.html')}}" class="nav-link">Category - sidebar right</a></li>
                            <li class="nav-item"><a href="{{ ('shop-category-left.html')}}" class="nav-link">Category - sidebar left</a></li>
                            <li class="nav-item"><a href="{{ ('shop-category-full.html')}}" class="nav-link">Category - full width</a></li>
                            <li class="nav-item"><a href="{{ ('shop-detail.html')}}" class="nav-link">Product detail</a></li>
                          </ul>
                          <h5>Shop - order process</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('shop-basket.html')}}" class="nav-link">Shopping cart</a></li>
                            <li class="nav-item"><a href="{{ ('shop-checkout1.html')}}" class="nav-link">Checkout - step 1</a></li>
                            <li class="nav-item"><a href="{{ ('shop-checkout2.html')}}" class="nav-link">Checkout - step 2</a></li>
                            <li class="nav-item"><a href="{{ ('shop-checkout3.html')}}" class="nav-link">Checkout - step 3</a></li>
                            <li class="nav-item"><a href="{{ ('shop-checkout4.html')}}" class="nav-link">Checkout - step 4</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Contact</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('contact.html')}}" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="{{ ('contact2.html')}}" class="nav-link">Contact - version 2</a></li>
                            <li class="nav-item"><a href="{{ ('contact3.html')}}" class="nav-link">Contact - version 3</a></li>
                          </ul>
                          <h5>Pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('text.html')}}" class="nav-link">Text page</a></li>
                            <li class="nav-item"><a href="{{ ('text-left.html')}}" class="nav-link">Text page - left sidebar</a></li>
                            <li class="nav-item"><a href="{{ ('text-full.html')}}" class="nav-link">Text page - full width</a></li>
                            <li class="nav-item"><a href="{{ ('faq.html')}}" class="nav-link">FAQ</a></li>
                            <li class="nav-item"><a href="{{ ('404.html')}}" class="nav-link">404 page</a></li>
                          </ul>
                          <h5>Blog</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="{{ ('blog.html')}}" class="nav-link">Blog listing big</a></li>
                            <li class="nav-item"><a href="{{ ('blog-medium.html')}}" class="nav-link">Blog listing medium</a></li>
                            <li class="nav-item"><a href="{{ ('blog-small.html')}}" class="nav-link">Blog listing small</a></li>
                            <li class="nav-item"><a href="{{ ('blog-post.html')}}" class="nav-link">Blog Post</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>

  -->              
                <!-- ========== FULL WIDTH MEGAMENU END ==================--> 
                <li class="nav-item dropdown"><a href="{{ ('servicios')}}" class="dropdown-toggle">Servicios <b class="caret"></b></a>
                  
                </li>
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="{{ ('contacto')}}" class="dropdown-toggle">Contacto <b class="caret"></b></a>
                  
                </li>
                
                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
      
      <!-- INICIO CONTENIDO----------------------------------------->
      
     
      
      <div class="content">
                  
         @yield('content')
                 
      </div>

      <!------------------- FINAL CONTENIDO-------------------------------->
      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Necesitas una tienda para llegar a mas clientes?</h3>
            </div>
            <div class="col-lg-4 text-center p-3">   <a href="{{ ('contacto') }}" class="btn btn-template-outlined-white">Contáctanos</a></div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <h4 class="h6">Sobre nosotros</h4>
              <p>Centrados en ayudar a los autónomos a paliar la crisis. Hacemos todo lo que podemos, porque las cosas te vayan bien.</p>
              <hr>
  <!---------------------------INICIO FORMULARIO BOLETIN-------------------------------->             
              <h4 class="h6">Si deseas recibir nuestras noticias</h4>
             
              <form novalidate="">
                <div class="input-group">
                  <input type="email" id="email_news" name="email_news" class="form-control">
                  <span class="error" aria-live="polite"></span>
                  <div class="input-group-append">
                    <button type="button" class="btn btn-secondary noticias" ><i class="fas fa-paper-plane"></i></button>
                  </div>
                </div>
              </form>
  <!---------------------------FINAL FORMULARIO BOLETIN-------------------------------->    
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-4">
              <h4 class="h6">Servicios</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                  <div class="image"><img src="{{ ('img/detalle_ecommerce.jpg')}}" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="{{ ('ecommerce')}}">Diseño E-commerce</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="{{ ('img/detalle_soluciones.jpg')}}" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="{{ ('desarrollo')}}">Desarrollo de soluciones a medida</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="{{ ('img/detalle_alquiler.jpg')}}" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="{{ ('alquiler')}}">Alquiler de espacios web</a></h5>
                  </div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-4">
              <h4 class="h6">Contacto</h4>
              <p class="text-uppercase"><strong>Dos por Tres </strong><br>Valencia<br>España <br>  </p><a href="{{ ('contacto') }}" class="btn btn-template-main">Contactar</a>
              <hr class="d-block d-lg-none">
            </div>
          <!--  
            <div class="col-lg-3">
              <ul class="list-inline photo-stream">
                <li class="list-inline-item"><a href="#"><img src="{{ ('img/detailsquare.jpg')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ ('img/detailsquare2.jpg')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ ('img/detailsquare3.jpg')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ ('img/detailsquare3.jpg')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ ('img/detailsquare2.jpg')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ ('img/detailsquare.jpg')}}" alt="..." class="img-fluid"></a></li>
              </ul>
            </div>
          -->
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 text-center-md">
                <p style=" font-size:0.7em;">&copy; Todos los derechos reservados 2020-2021 <strong> 2X Dos por Tres</strong> </p>
              </div>
              <div class="col-lg-7 text-right text-center-md">
                <p  style=" font-size:0.7em ;" >Diseño y desarrollo <a href="https://frankgalandev.com">Frank Galán </a> inspiración <a href="{{ ('https://bootstrapious.com') }}">Bootstrapious</a></p>
               
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="{{ ('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ ('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ ('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ ('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ ('vendor/waypoints/lib/jquery.waypoints.min.js')}}"> </script>
    <script src="{{ ('vendor/jquery.counterup/jquery.counterup.min.js')}}"> </script>
    <script src="{{ ('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ ('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{ ('vendor/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{ ('vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ ('vendor/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ ('vendor/front.js')}}"></script>
    <script src="{{ ('js/front.js')}}"></script>
  </body>


<script>
   
    const email = document.getElementById('email_news');
   /* console.log(email);*/
    
    email.addEventListener('input', function (event)

    {
      if(email.validity.typeMismatch)
        {
          email.setCustomValidity('Por favor, escriba una dirección de correo válida');
        }
        else
        {
          email.setCustomValidity("");
          window.location.href = "mailto:info@dosportres.org?subject= Tengo interes en recibir el boletin" + email ;
        }
    });

  
 
</script>

</html>