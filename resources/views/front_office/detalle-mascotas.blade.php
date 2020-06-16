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
                <li class="breadcrumb-item active">Mascotas</li>
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
                <p class="lead no-mb">La atención a los eternos acompañantes y amigos, es también un mercado online interesante. La variedad de productos y servicios que necesita es mucho más amplia de lo que puede aparentar a primera vista, lo que cual abre un abanico de opciones y clientes.</p>
              </div>
            </div>
          </section>
          <section>
            <div class="project owl-carousel">
              <div class="item"><img src="{{ ('img/slider/mascotas-slider1.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ ('img/slider/mascotas-slider2.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ ('img/slider/mascotas-slider3.jpg')}}" alt="" class="img-fluid"></div>
              <div class="item"><img src="{{ ('img/slider/mascotas-slider4.jpg')}}" alt="" class="img-fluid"></div>
             
            </div>
          </section>
          <section class="bar">
            <div class="row portfolio-project">
              <div class="col-md-8">
                <div class="heading">
                  <h3>Características</h3>
                </div>
                <p>Sitio web, configurado para la venta online de productos dirigidos a la atención de las mascotas. Diseñado para satisfacer la demanda de este mercado y crear oportunidades. Backoffice administrativo, para personalizar, la gestión de la tienda y al estrategia comercial. </p>
                <p>Esta oferta incluye, los convenios con el proveedor y con el distribuidor, en modelo de dropshiping y  enlaces a las redes sociales del cliente. El area de administración brinda entre otras la capacidad para  variar los niveles de beneficio.</p>
              </div>
              <div class="col-md-4 project-more">
                <div class="heading">
                  <h3>Muestra</h3>
                </div>
                <h4>Cliente</h4>
                <p>Mascotas Loli</p>
                <h4>Servicios</h4>
                <p>Venta de articulos y servicios a mascotas</p>
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