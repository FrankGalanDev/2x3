@extends('front_office.base_front_office')

@section('content')
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2"> Diseño Ecommerce</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ 'inicio' }}">Inicio</a></li>
                <li class="breadcrumb-item active">Ecommerce</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-12">
              <section>
                <div id="text-page">
                  <p class="lead">Todo el mundo necesita algo, el éxito está en saber venderselo.</p>
                  <h1>¿Necesito una tienda online?</h1>
                  <p><strong>Si tienes algo que ofrecer a perrsonas que no pueden visitarte, entonces si. La necesitas</strong> Vender en internet se ha puesto de moda, sobre todo porque ofrece posibilidades de negocio inalcanzables si no usas la red</p>
                  <p> Sin embargo, no es garantía de exito, todos los días se crean y abandonan mile de tiendas en todo el  mundo.</p>
                  <p>Esto se debe en primer lugar a una competencia enorme en todos los sectores, de modo que tener una tienda actualizada, con productos, que pueden ser comprados, es solo el primer paso.
                  <p>Desarrollar una estrategia es lo que sigue.</p>
                  <p class="lead"><strong>Dos por Tres</strong> se centra en crear tu tienda, administrarla sin costos adicionales y ayudarte a desarrollar la estrategia que prefieras: 
                    <strong>Concentrate en adquirir habilidades de venta y publicidad, nosotros crearemos la tienda que necesitas.
                    </strong>
                  </p>
                  <p>Y vamos un poco más allá, podemos ofrecerte proveedores especializados, algunos de ellos en la modalidad de dropshipping de modo que te sea aún más fácil, llegar a tus clientes.</p>
                                    
                  <h2>¿Que obtengo si alquilo una tienda con ustedes?</h2>
                  <ul>
                    <li>Ahorras gastos y tiempo en mantenimiento web</li>
                    <li>Tendras una tienda lista, con funcionalidades reales.</li>
                    <li>Gestionamos la carga y venta de productos de  nuestros proveedores.</li>
                    <li>No tiene que hacer nada, solo promocionarse en sus propias redes.</li>
                    <li>Estaditicas del comportamiento de tu tienda.</li>
                    <li>Beneficios con un minimo de esfuerzo.</li>

                     
                  </ul>
                  <blockquote class="blockquote">
                    <p>Crea tu tienda, busca clientes,promocionala, vende y obtén beneficios sin tener que hacer una gran inversión, ni esfuerzos sobrehumanos</p>
                  </blockquote>
                  <h2>¿Como empezar?</h2>
                  <ul>
                    <li>Póngase en contacto con nosotros  y expliquenos que necesita</li>
                    <li>Nuestros especialistas le pedirán la información necesaria</li>
                    <li>Recibirá los datos de su sitio cuando esté listo</li>
                  </ul>
                  <hr>
                  <p> Hallará informacion más detallada sobre este y otros servicios en nuestra <a href="{{ 'faq' }}">sección de conocimientos</a></p>
  <!--------------------- INICIO SECCION FOTOS---------------------------------------->
  <!---
                  <h2>Images</h2>
                  <div class="row">
                    <div class="col-md-4">
                      <p class="text-center"><img src="{{ asset('img/photos/paul-morris-116514-unsplash.jpg') }}" alt="" class="rounded-circle img-fluid"></p>
                      <p class="text-center">circle</p>
                    </div>
                    <div class="col-md-4">
                      <p class="text-center"><img src="{{ asset('img/photos/paul-morris-116514-unsplash.jpg') }}" alt="" class="img-thumbnail img-fluid"></p>
                      <p class="text-center">thumbnail</p>
                    </div>
                    <div class="col-md-4">
                      <p class="text-center"><img src="{{ asset('img/photos/paul-morris-116514-unsplash.jpg') }}" alt="" class="rounded img-fluid"></p>
                      <p class="text-center">rounded</p>
                    </div>
                  </div>
  -->
  <!--------------------- FINAL SECCION FOTOS---------------------------------------->
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
@stop