@extends('front_office.base_front_office')

@section('content')
      <!-- INICIO CONTENIDO----------------------------------------->
<!--      
        INICIO SESION CARRUSEL--------------------- 
      <section style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;" class="relative-positioned">
      <!-- Inicio Carousel --------------------------------------- 
        
         
        <div class="home-carousel">
          <div class="dark-mask mask-primary"></div>
          <div class="container">
            <div class="homepage owl-carousel">
              <div class="item">
                <div class="row">
                  <div class="col-md-5 text-right">
                    <p><img src="{{ ('img/logo.png')}}" alt="" class="ml-auto"></p>
                    <h1>Multipurpose responsive theme</h1>
                    <p>Business. Corporate. Agency.<br>Portfolio. Blog. E-commerce.</p>
                  </div>
                  <div class="col-md-7"><img src="{{ ('img/template-homepage.png')}}" alt="" class="img-fluid"></div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-7 text-center"><img src="{{ ('img/template-mac.png')}}" alt="" class="img-fluid"></div>
                  <div class="col-md-5">
                    <h2>46 HTML pages full of features</h2>
                    <ul class="list-unstyled">
                      <li>Sliders and carousels</li>
                      <li>4 Header variations</li>
                      <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                      <li>+ 11 extra pages showing template features</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-5 text-right">
                    <h1>Design</h1>
                    <ul class="list-unstyled">
                      <li>Clean and elegant design</li>
                      <li>Full width and boxed mode</li>
                      <li>Easily readable Roboto font and awesome icons</li>
                      <li>7 preprepared colour variations</li>
                    </ul>
                  </div>
                  <div class="col-md-7"><img src="{{ ('img/template-easy-customize.png')}}" alt="" class="img-fluid"></div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-7"><img src="{{ ('img/template-easy-code.png')}}" alt="" class="img-fluid"></div>
                  <div class="col-md-5">
                    <h1>Easy to customize</h1>
                    <ul class="list-unstyled">
                      <li>7 preprepared colour variations.</li>
                      <li>Easily to change fonts</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      Final Carousel 
      </section>-----------------------------------------> 
      <!-- FINAL SESION CARRUSEL------------------
----> 
      <section class="bar no-mb">
        <div data-animate="fadeInUp" class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="heading text-center">
                <h2>Creamos Oportunidades</h2>
              </div>
              <div class="row portfolio-showcase">
                <div class="col-md-6">
                  <div class="image"><img src="{{ ('img/portfolio-10.jpg')}}" alt="" class="img-fluid"></div>
                </div>
                <div class="col-md-6">
                  <h3><a href="{{ ('portfolio-detail.html')}}">La idea</a></h3>
                  <p class="lead">Dos por Tres, es un sitio de alquiler de espacios web, con opción a compra que pone al  alcance de cualquiera que lo necesite una tienda online, un blog, o la combinación de ambos, sin tener que preocuparse demasiado por la administracion.Ademas de otras herramientas que pueden ayudarle en su trabajo. </p>
                  <p>Estamos en el negocio de ayudar a los autonomos, emprendedores y pequeños empresarios a lograr sus metas, ofreciendole soluciones web, sencillas y asequibles, que no generen preocupaciones y les permitan concentrarse en la estrategias para llegar a mas clientes.</p>
                  <p class="buttons"><a href="{{ ('portfolio-detail.html')}}" class="btn btn-template-outlined">View</a><a href="{{ ('#')}}" class="btn btn-template-outlined">Visit website</a></p>
                </div>
              </div>
              <div class="heading text-center">
                <h3>Nuestros productos</h3>
              </div>
              <div class="row portfolio text-center no-space">
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-1.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-moda')}}" class="color-white">Moda</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf">Pensada para la comercialización online de articulos de vestir, podrá llegar a clientes de la moda en todo el mundo.</p>
                            <p class="buttons"><a href="{{ ('detalle-moda')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('#')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-2.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-sexualidad')}}" class="color-white">Sexualidad</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf">Venda juguetes sexuales y productos relacionados con el mundo del sexo. Un mercado en expansion y altamente demandante.</p>
                            <p class="buttons"><a href="{{ ('detalle-sexualidad')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('https://deseosdiscretos.com')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-3.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-mascotas')}}" class="color-white">Mascotas</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf">Las tiendas dedicadas a mascotas y su cuidado son una apuesta segura dentro del comercio online en todo el mundo.</p>
                            <p class="buttons"><a href="{{ ('detalle-mascotas')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('#')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-4.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-tecnología')}}" class="color-white">Tecnologia</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf">La tecnología ofrece una interesante oportunidad para vender en todo el mundo, que permite competir incluso con los grandes</p>
                            <p class="buttons"><a href="{{ ('detalle-tecnología')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('http://suclaveinformatica.com')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-5.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-negocios')}}" class="color-white">Negocios</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf">De a conocer su negocio, a traves una página web propia, le facilitará llegar a más personas, y ampliar su mercado potencial. </p>
                            <p class="buttons"><a href="{{ ('detalle-negocios')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('https://goldencarwash.cl')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-6.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-salud')}}" class="color-white">Salud</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf">Ideal para negocios relacionados con la salud, y el cuidado personal, promocione su negocio en internet sin esfuerzo. </p>
                            <p class="buttons"><a href="{{ ('detalle-salud')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('https://cubamedica.org')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-7.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-blog-personal')}}" class="color-white">Blog personal item</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf"> Si desea impulsar su marca personal, y  darse a conocer, con un espacio, donde pueda ser visto quien es. Esto es para usted.</p>
                            <p class="buttons"><a href="{{ ('detalle-blog-personal')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('https://misclientes.es/blog-personal')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-9.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-alimentacion')}}" class="color-white">Alimentacion</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf">Sitios pensados para pequeños negocios de alimentacion, que desean darse a conocer  y ser visitados por mas clientes</p>
                            <p class="buttons"><a href="{{ ('detalle-alimentacion')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('https://misclientes.es/alimentacion')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-8.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="{{ ('detalle-creativo')}}" class="color-white">Creativos</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block portf">Exponga sus obras y de la posibilidad a las personas de que puedan acceder a su trabajo  y talento, en la web.</p>
                            <p class="buttons"><a href="{{ ('detalle-creativo')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('https://misclientes.es/creativo')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="see-more text-center"><a href="{{ ('portfolio-4.html')}}" class="btn btn-template-outlined">Ver más</a></div>
            </div>
          </div>
        </div>
      </section>
    <!--
      <section class="bar background-pentagon no-mb">
        <div class="container">
          <div class="row showcase text-center">
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-align-justify"></i></div>
                <h4><span class="h1 counter">580</span><br> Websites</h4>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-users"></i></div>
                <h4><span class="h1 counter">100</span><br>Satisfied Clients</h4>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-copy"></i></div>
                <h4><span class="h1 counter">320</span><br>Projects</h4>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-font"></i></div>
                <h4><span class="h1 counter">923</span><br>Magazines and Brochures</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bar background-white no-mb">
        <div class="container">
          <div class="col-md-12">
            <div class="heading text-center">
              <h2>From our blog</h2>
            </div>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. <a href="{{ ('blog.html')}}">Check our blog!</a></p>
            <div class="row">
              <div class="col-lg-3">
                <div class="home-blog-post">
                  <div class="image"><img src="{{ ('img/portfolio-4.jpg')}}" alt="..." class="img-fluid">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="{{ ('#')}}" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                  </div>
                  <div class="text">
                    <h4><a href="{{ ('#')}}">Fashion Now </a></h4>
                    <p class="author-category">By <a href="{{ ('#')}}">John Snow</a> in <a href="{{ ('blog.html')}}">Webdesign</a></p>
                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="{{ ('#')}}" class="btn btn-template-outlined">Continue Reading</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="home-blog-post">
                  <div class="image"><img src="{{ ('img/portfolio-3.jpg')}}" alt="..." class="img-fluid">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="{{ ('#')}}" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                  </div>
                  <div class="text">
                    <h4><a href="{{ ('#')}}">What to do</a></h4>
                    <p class="author-category">By <a href="{{ ('#')}}">John Snow</a> in <a href="{{ ('blog.html')}}">Webdesign</a></p>
                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="{{ ('#')}}" class="btn btn-template-outlined">Continue Reading</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="home-blog-post">
                  <div class="image"><img src="{{ ('img/portfolio-5.jpg')}}" alt="..." class="img-fluid">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="{{ ('#')}}" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                  </div>
                  <div class="text">
                    <h4><a href="{{ ('#')}}">5 ways to look awesome</a></h4>
                    <p class="author-category">By <a href="{{ ('#')}}">John Snow</a> in <a href="{{ ('blog.html')}}">Webdesign</a></p>
                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="{{ ('#')}}" class="btn btn-template-outlined">Continue Reading</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="home-blog-post">
                  <div class="image"><img src="{{ ('img/portfolio-6.jpg')}}" alt="..." class="img-fluid">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="{{ ('#')}}" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                  </div>
                  <div class="text">
                    <h4><a href="{{ ('#')}}">Fashion Now </a></h4>
                    <p class="author-category">By <a href="{{ ('#')}}">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bar bg-gray">
        <div class="container">
          <ul class="list-unstyled owl-carousel customers no-mb">
            <li class="item"><img src="{{ ('img/customer-1.png')}}" alt="" class="img-fluid"></li>
            <li class="item"><img src="{{ ('img/customer-2.png')}}" alt="" class="img-fluid"></li>
            <li class="item"><img src="{{ ('img/customer-3.png')}}" alt="" class="img-fluid"></li>
            <li class="item"><img src="{{ ('img/customer-4.png')}}" alt="" class="img-fluid"></li>
            <li class="item"><img src="{{ ('img/customer-5.png')}}" alt="" class="img-fluid"></li>
            <li class="item"><img src="{{ ('img/customer-6.png')}}" alt="" class="img-fluid"></li>
          </ul>
        </div>
      </section>

      --->
@stop