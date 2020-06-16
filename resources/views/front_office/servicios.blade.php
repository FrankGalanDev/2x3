@extends('front_office.base_front_office')

@section('content')

      <!-- INICIO CONTENIDO----------------------------------------->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Servicios</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ 'inicio' }}">Inicio</a></li>
                <li class="breadcrumb-item active">Servicios</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2 >Nuestros servicios</h2>
                </div>
                <p class="lead">Ponemos a su alcance opciones sencillas para que su negocio crezca, basadas en la tecnología, y la cooperación. Actuamos convencidos de que los compromisos a largo plazo no radican en los contratos escritos, sino en la satisfacción</p>
              </div>
            </div>
            <div class="row services text-center">
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fas fa-store"></i></div>
                  <h3 class="h4">Alquiler de tiendas</h3>
                  <p>Alquile una tienda prediseñada y dediquese a la venta. Centrese en los clientes, su producto y los beneficios. Nosotros nos encargamos del resto.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fab fa-cc-visa"></i></div>
                  <h3 class="h4">Desarrollo de E-commerce</h3>
                  <p>Creamos su tienda, en tiempo mínimo y con precios muy competitivos, sin compromiso de que tenga que alojarla con nosotros.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fas fa-ruler-combined"></i></div>
                  <h3 class="h4">Diseño a medida</h3>
                  <p>¿Necesita resolver problemas especificos para vender, mejorar su gestión, llegar a nuevos clientes? Podemos ayudarle.</p>
                </div>
              </div>
            </div>
            <div class="row services text-center">
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fas fa-award"></i></div>
                  <h3 class="h4">Sistemas de gestion </h3>
                  <p>¿Tiene problemas con su negocio online, necesita vincularlo a un establecimiento físico, desea mejorar sus controles?. Contacte sin compromisos.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fas fa-tasks"></i></div>
                  <h3 class="h4">Gestion tareas</h3>
                  <p>Sencillo y simple. Puede utilizar nuestro gestor de tareas para planificar y gestionar su desempeño y organizar su tiempo, fácilmente.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fas fa-toolbox"></i></div>
                  <h3 class="h4">Herramientas para autónomos</h3>
                  <p>Ponemos a tu disposicion un conjunto de herramientas, que pueden ser útiles para el desarrollo de la labor diaria, de cualquier aútonomo</p>
                </div>
              </div>
            </div>
          </section>
          <section class="bar pt-0">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>¿La diferencia?</h2>
                </div>
                <p class="lead">Somos soñadores y solidarios, creemos firmemente que emprender un negocio no tiene que ser caro, así que intentamos encontrar soluciones novedosas que le hagan la vida más facil a los que intentan alcanzar sus sueños.</p>
              </div>
              <div class="col-md-6">
                <p class="text-sm">Nuestras ofertas, son el fruto de la experiencia ylos deseos de hacer algo diferente. Es una necesidad para el que emprende disponer de una tienda en internet, por eso le ofrecemos una forma cómoda para comenzar. Este principio también se aplica a los que ya poseen su negocio online, pero necesitan cambiarlo, mejorarlo o simplemente repensar lo que ofrecen y a quién; entonces: ¿POR QUE NOSOTROS?</p>
                <ul class="text-xs">
                  <li>Puede tener su tienda por un precio mínimo mensual y si no funciona, dejarla</li>
                  <li>Gestionamos proveedores y envíos. Dedíquese a atender a sus clientes  </li>
                  <li>Puede comprar su tienda al cabo de 24 meses, por el mismo precio que ha pagado.</li>
                  <li>El sistema garantiza promoción gratis de su negocio, y mejora su posicionamiento.</li>
                </ul>
              </div>
              <div class="col-md-6">
                <p class="text-sm">La ventaja principal, es que usted dispone de un espacio donde ofrecer sus productos o servicios, sin tener que desembolsar una gran cantidad de dinero; y luego podra decidir si es  eso lo que realmente deseaba. Si ya es empresario, podrá disponer de la web que necesita. En todos los casos, ahorrará y contará ademas con un equipo dedicado a usted a atenderlo; entonces: ¿Y POR QUE NO? .</p>
              </div>
            </div>
          </section>
        </div>
  <!--    
  ----------- INICIO CLIENTES SATISFECHOS--------------------------------------  
        <section class="bar bg-gray no-mb">
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
----------- FINAL CLIENTES SATISFECHOS--------------------------------------

----------- INICIO TESTIMONIONOS DE CLIENTES--------------------------------------
  
        <section class="bar background-pentagon no-mb">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="heading text-center">
                  <h2>Testimonials</h2>
                </div>
                <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p>

                ------INICIO CARRUSEL --
                <ul class="owl-carousel testimonials list-unstyled equal-height">
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-2.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-4.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="testimonial d-flex flex-wrap">
                      <div class="text">
                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                      </div>
                      <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                          <div class="title">
                            <h5>John McIntyre</h5>
                            <p>CEO, TransTech</p>
                          </div>
                          <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                ------ Final Carousel
              -->
              </div>
            </div>
          </div>
        </section> 
       
<!-------------- FINAL TESTIMONIONOS DE CLIENTES-----------------------------------------> 
      </div>
@stop