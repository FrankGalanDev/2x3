@extends('front_office.base_front_office')

@section('content')
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Alquiler espacios web</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ 'inicio' }}">Inicio</a></li>
                <li class="breadcrumb-item active">Alquiler web</li>
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
                  <p class="lead">La mejor forma de encontrar la oportunidad para crecer es no dejar de esforzarse.</p>
                  <h1>En que consiste el alquiler web</h1>
                  <p><strong>Alquilar y usar. Dedíquese a lo básico</strong> Tener presencia en internet para cualquier individuo o entidad que busque darse a conocer, es la forma más abarcadora de llegar a personas en todo el mundo.</p>
                  <p> Lograrlo requiere un esfuerzo que ocupa tiempo, dinero y recorrer una curva de aprendizaje y conocimiento con diferentes niveles de complejidad.</p>
                  <p>Lo que Dos por Tres ofrece es justo eso: 
                    <strong>Ayudar a los emprendedores y pequeñas empresas a tener un espacio web, listo para ser usado, que satisfaga sus expectativas básicas.
                    </strong>
                  </p>
                  <p>De hecho el concepto de muchas empresas de tamaño mediano y pequeño, se basa en existir solo en internet, evitando gastos de logística, transporte, personal, administración y otros.</p>
                  <p>Pensando en eso, es que ofrecemos una forma novedosa de hacer las cosas, alquilando un sitio donde promocionar, vender o simplemente contactar con clientes y/o personas interesadas en lo que tiene que decir</p>
                  
                  <h2>¿Donde está la ventaja?</h2>
                  <ul>
                    <li>Ahorre gastos y tiempo en mantenimiento web</li>
                    <li>Es un sitio listo, con funcionalidades reales.</li>
                    <li>Le ayudamos a gestionar el contenido.</li>
                    <li>No tiene que hacer nada, solo promocionarse en sus propias redes.</li>
                     
                  </ul>
                  <blockquote class="blockquote">
                    <p>>Ofrecemos un espacio profesional con un diseño individual, que le permitirá resolver sus necesidades online de un modo sencillo y rápido, sin necesidad de gastos extras, sorpresas, ni exigencias de permanencia</p>
                  </blockquote>
                  <h2>Como empezar</h2>
                  <ul>
                    <li>Póngase en contacto con nosotros  y expliquenos que necesita</li>
                    <li>Nuestros especialistas le pedirán la informacion necesaria</li>
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