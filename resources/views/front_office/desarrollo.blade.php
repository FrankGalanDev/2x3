@extends('front_office.base_front_office')

@section('content')
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2"> Desarrollo a medida</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ 'inicio' }}">Inicio</a></li>
                <li class="breadcrumb-item active">Soluciones</li>
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
                  <p class="lead">Cada problema tiene al menos usa solución, si lo trata a tiempo el especialista adecuado.</p>
                  <h1>¿Soluciones?</h1>
                  <p><strong>Resolvemos problemas empresariales especificos, creando desarrollos a medida o adecuando soluciones   a tu negocio</strong> De lo que nos encargamos, es de diseñar y crear procedimientos y procesos que resuelvan dificultades empresariales y que se conviertan en herramientas útiles.</p>
                  <p>Nuestras soluciones abarcan diferentes areas de negocios, gestión de personal, organizacion tareas, transporte, gestion de clientes entre otras</p>
                  
                  <p class="lead"><strong>Dos por Tres</strong> está compuesta por un grupo de especialistas en diferentes areas. 
                    <strong>Podemos ayudarte a optimizar tu negocio, aportando la solución que necesita .
                    </strong>
                  </p>
                   
                                    
                  <h2>¿Que ventajas me aporta?</h2>
                  <ul>
                    <li>Aportamos la experiencia en resolver dificultades empresariales</li>
                    <li>Actualizaciones que se adaptan a nuevos retos de tu negocio.</li>
                    <li>Una relación a largo plazo, como socios tecnológicos </li>
                    <li>Flexibilidad y personalización de soluciones ad Hoc.</li>
                
                  </ul>
                  <blockquote class="blockquote">
                    <p>Si quieres avanzar en tu empresa o emprendimiento, ponemos nuestra experiencia a tu alcance para solucionar lo que te impide llegar adonde quieres ir</p>
                  </blockquote>
                  <h2>¿Como lo hago?</h2>
                  <ul>
                    <li>Póngase en contacto con nosotros  y expliquenos que necesita</li>
                    <li>Nuestros especialistas contactaran contigo para obtener de ti o tus empleados la informacion necesaria</li>
                    <li>Recibirás una cotización y una evaluación a priori y sin compromisos de  nuestras estimaciones.</li>
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