@extends('front_office.base_front_office')

@section('content')
      <!-- INICIO CONTENIDO----------------------------------------->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Detalle del Producto</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ ('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item active">Blog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <section class="no-mb bar">
            <div class="row">
              <div class="col-md-12">
                <p class="lead no-mb">Un blog personal, es el modo más auténtico de transmitir en la red lo que somos tanto a nivel humano como profesional; y esto nos permite acercanos a las personas a las que deseamos que escuchen  lo que tenemos que decir. Esta oferta es para ayudarle a llevar ese mensaje a destino sin preocupación.</p>
              </div>
            </div>
          </section>
          <section>
            <div class="project owl-carousel">
              <div class="item"><img src="{{ ('img/slider/blog-slider1.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ ('img/slider/blog-slider2.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ ('img/slider/blog-slider3.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ ('img/slider/blog-slider4.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ ('img/slider/blog-slider5.jpg')}}" alt="" class="img-fluid"></div>
            </div>
          </section>
          <section class="bar">
            <div class="row portfolio-project">
              <div class="col-md-8">
                <div class="heading">
                  <h3>Características</h3>
                </div>
                <p>Sitio web, configurado para ofrecer a  nuestros clientes información específica, sobre quienes y que hacemos. Es la tarjeta de presentación online, para transmitir nuestra opinión de hechos, situacion y  de nosotros mismos.   </p>
                <p>Esta oferta incluye, administración de la información,  enlaces a las redes sociales del cliente. Puede mostrar, servicios, localización, contactos,  opiniones, y otros.</p>
              </div>
              <div class="col-md-4 project-more">
                <div class="heading">
                  <h3>Muestra</h3>
                </div>
                <h4>Cliente</h4>
                <p>Ella</p>
                <h4>Servicios</h4>
                <p>Blog Personal</p>
              </div>
            </div>
          </section>
          <div class="bar pt-0">                       
            <section>
              <div class="row portfolio">
                <div class="col-md-12">
                  <div class="heading">
                    <h3>Otras ofertas</h3>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-1.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name no-mb">
                            <h3><a href="{{ ('moda')}}" class="color-white">Portfolio item</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none">Pensada para la comercialización online de articulos de vestir, podrá llegar a clientes de la moda en todo el mundo</p>
                            <p class="buttons"><a href="{{ ('moda')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('#')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-2.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name no-mb">
                            <h3><a href="{{ ('detalle-sexualidad')}}" class="color-white">Sexualidad</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none">Venda juguetes sexuales y productos relacionados con el mundo del sexo. Un mercado en expansion y altamente demandante.</p>
                            <p class="buttons"><a href="{{ ('https://deseosdiscretos.com')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('#')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-3.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name no-mb">
                            <h3><a href="{{ ('detalle-mascotas')}}" class="color-white">Mascotas</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none">Las tiendas dedicadas a mascotas y su cuidado son una apuesta segura dentro del comercio online en todo el mundo.</p>
                            <p class="buttons"><a href="{{ ('detalle-mascotas')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('#')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="box-image">
                    <div class="image"><img src="{{ ('img/portfolio-4.jpg')}}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name no-mb">
                            <h3><a href="{{ ('detalle-tecnología')}}" class="color-white">Tecnología</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none">La tecnología ofrece una interesante oportunidad para vender en todo el mundo, que permite competir incluso con los grandes</p>
                            <p class="buttons"><a href="{{ ('detalle-tecnología')}}" class="btn btn-template-outlined-white">Ver</a><a href="{{ ('http://suclaveinformatica.com')}}" class="btn btn-template-outlined-white">Sitio web</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
@stop