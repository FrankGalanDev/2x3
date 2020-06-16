@extends('front_office.base_front_office')

@section('content')
      
      <div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Soporte</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item active">Soporte</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div id="contact" class="container">
          <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>Equipo de Soporte</h2>
                </div>
                <p class="lead">Ticket</p>
                <p class="text-sm">Abre un ticket de soporte y explicanos que necesitas.</p>
              </div>
            </div>
          </section>
          <section>
            <div class="row text-center">
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                  <h3 class="h4">Nosotros</h3>
                  <p>Dos por Tres<br>                                        2x3<br>                                        Valencia,  <strong>España</strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                  <h3 class="h4">Teléfonos</h3>
                  <p>Llama a nuestro numero en horario de oficina entre las 9 y las 8 de la tarde, para Europa.</p>
                  <p><strong>+34 632 208 159 - +34 631 571 761</strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                  <h3 class="text-uppercase">Soporte</h3>
                <p class="text-muted text-sm">Le recomendamos si es cliente que se ponga en contacto con nosotros, desde su sesion o abriendo un tiquet.</p>
                  <ul class="list-unstyled text-sm">
                    <li><strong><a href="mailto:">soporte@dosportres.org</a></strong></li>
                  <li><strong> Equipo Soporte</strong></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section class="bar pt-0">
            <div class="row">
              <div class="col-md-12">
                <div class="heading text-center">
                  <h2>Ticket</h2>
                </div>
              </div>
              <div class="col-md-8 mx-auto">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="firstname">Nombre</label>
                        <input id="firstname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="lastname">apellidos</label>
                        <input id="lastname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input id="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="subject">Sitio afectado</label>
                        <input id="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 text-center">
                      <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
        <div id="map"></div>
      </div>
@stop