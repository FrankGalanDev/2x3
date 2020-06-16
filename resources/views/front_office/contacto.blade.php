@extends('front_office.base_front_office')

@section('content')

      <!-- INICIO CONTENIDO----------------------------------------->
      <div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Contacto</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item active">Contacto</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div id="contact" class="container">
          <div class="row">
            <div class="col-lg-8">
              <section class="bar">
                <div class="heading">
                  <h2>¿Crees que podemos ayudarte?</h2>
                </div>
                <p class="lead">Te resulta interesante algo de lo que has visto?. Si es asi te invitamos a contactar con nosotros, y buscaremos juntos un solución que resuelva tus necesidades.</p>
                <p class="text-sm">No tengas reparos en escribirnos y decirnos que necesitas. Uno de nosotros se pondrá en contacto contigo, para aclarar tus dudas y ayudarte. </p>
                <div class="heading">
                  <h3>Contactar</h3>
                </div>
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Nombre</label>
                        <input id="firstname" type="text" class="form-control" required >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Apellido</label>
                        <input id="lastname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input id="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Enviar</button>
                    </div>
                  </div>
                </form>
              </section>
            </div>
            <div class="col-lg-4">
              <section class="bar mb-0">
                <h3 class="text-uppercase">Nosotros</h3>
                <p class="text-sm">2x3<br>Valencia<br><strong>España</strong></p>
                <h3 class="text-uppercase">Soporte</h3>
                <p class="text-muted text-sm">Puede llamar a nuestros números de contacto en horario de oficina  o enviarnos un correo. Nuestro servicio de correos trabaja 24/7.</p>
                <p><strong>+34 632 208 159 - +34 631 571 761</strong></p>
                <h3 class="text-uppercase">Soporte</h3>
                <p class="text-muted text-sm">Le recomendamos si es cliente que se ponga en contacto con nosotros, desde su sesion o abriendo un tiquet.</p>
                <ul class="text-sm">
                  <li><strong><a href="mailto:">info@dosportres.org</a></strong></li>
                  <li><strong><a href="{{ ('soporte') }}">Abrir Tiquet</a></strong> - Equipo Soporte</li>
                </ul>
              </section>
            </div>
          </div>
        </div>
        <div id="map"></div>
      </div>
@stop