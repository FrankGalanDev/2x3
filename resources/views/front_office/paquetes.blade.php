@extends('front_office.base_front_office')

@section('content')
      <!-- INICIO CONTENIDO----------------------------------------->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Paquetes</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item text-primary"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item active">Paquetes</li>
              </ul> 
            </div>
          </div>
        </div>
      </div>
  <!----------------------------------INICIO CONTENT --------------------------------------->        
      <div id="content">
  <!----------------------------INICIO CONTAINER PAQUETES--------------------------------------->    
     
       
          
       

        <div class="container">
          <section class="bar pb-0">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>Nuestros Paquetes</h2>
                </div>
                <p class="lead">Yielding, they're air. Land replenish spirit given gathered subdue, day Blessed you'll great created, lights a one light, blessed deep morning, appear our. Fruit multiply, creeping first image. Upon saw isn't male winged to replenish tree and.</p>
              </div>
            </div>
          </section>
          <section>
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h3>Paquetes Web </h3>
                </div>
              </div>
            </div>

            <div class="row packages">
 @foreach ($planes as $plan)              
             

  <!--------------------INICIO PLAN  BASICO------------------------------------------->             
              <div class="col-md-3">
                <div class="package">
                  <div class="package-header bg-primary color-white">
                    <h5>{{ $plan->nombrePlan }}</h5>
                  </div>
                  <div class="price-container d-flex align-items-end justify-content-center">
                    <h4 class="h1"><span class="currency">€</span>{{ $plan->precio_mes}} </h4><span class="period">/ Mes</span>
                  </div>
                  <ul class="list-unstyled lista_paquetes">
                 
                    

                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->instalacion }}">Instalacion</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->blog  }}">Blog</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->hosting }}">Hosting</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->dominio }}">Dominio</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->espacio_ilimitado}}">Espacio ilimitado</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->transferenc_ilim}}">Transferencia ilimitada</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->cuentas_correo}}">Cuentas de correo</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->agente  }}">Agente</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->SSL }}">SSL</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->atenc_telefónica}}">Atención Telef</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->proveedor }}">Prooveedor</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->otros_proveedores }}">Otros Proveedores</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->backup  }}">Backup</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->estadística }}">Estadisticas</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->protec_spam }}">Proteccion Spam</li>
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->restaurac_backup }}"> Restauracion Backup</li> 
                    <li id="linea_paquetes"><i id="ico_paq" class="fa fa-check"></i><input type="" id="paq_ocul" class="paq_ocul" value="{{ $plan->SEO_basico}}">SEO básico</li>
                  </ul><a href="#" class="btn btn-template-outlined">Contactar</a>
                </div>
                </div>
             
              @endforeach </div>
  <!--------------------FINAL PLAN  BASICO------------------------------------------->
  <!--------------------INICIO PLAN  EMPRENDEDOR- 
              <div class="col-md-3">
                <div class="package">
                  <div class="package-header bg-primary color-white">
                    <h5> {{ $plan->nombrePlan }} </h5>
                  </div>
                  <div class="price-container d-flex align-items-end justify-content-center">
                    <h4 class="h1"><span class="currency">$</span>21</h4><span class="period">/ month</span>
                  </div>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i>id</li>  
                    <li><i class="fa fa-check"></i>estados_id  </li>
                    <li><i class="fa fa-check"></i>nombrePlan  </li>
                    <li><i class="fa fa-check"></i>resumen </li>
                    <li><i class="fa fa-check"></i>instalacion </li>
                    <li><i class="fa fa-check"></i>blog  </li>
                    <li><i class="fa fa-check"></i>hosting </li>
                    <li><i class="fa fa-check"></i>dominio </li>
                    <li><i class="fa fa-check"></i>espacio_ilimitado </li>
                    <li><i class="fa fa-check"></i>transferenc_ilim  </li>
                    <li><i class="fa fa-check"></i>cuentas_correo  </li>
                    <li><i class="fa fa-check"></i>agente  </li>
                    <li><i class="fa fa-check"></i>SSL </li>
                    <li><i class="fa fa-check"></i>atenc_telefónica  </li>
                    <li><i class="fa fa-check"></i>proveedor </li>
                    <li><i class="fa fa-check"></i>otros_proveedores </li>
                    <li><i class="fa fa-check"></i>backup  </li>
                    <li><i class="fa fa-check"></i>estadística </li>
                    <li><i class="fa fa-check"></i>protec_spam </li>
                    <li><i class="fa fa-check"></i>restaurac_backup </li> 
                    <li><i class="fa fa-check"></i>SEO_basico</li>
                  </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                </div>
              </div>
  <!--------------------FINAL PLAN EMPRENDEDOR----------------------------           
  
  <!--------------------INICIO PLAN  AUTONOM0---------------------------------- 
              <div class="col-md-3">
                <div class="best-value">
                  <div class="package">
                    <div class="package-header bg-primary color-white">
                      <div class="content">
                        <h5>{{ $plan->nombrePlan }}</h5>
                        <div class="meta-text">Best Value</div>
                      </div>
                    </div>
                    <div class="price-container d-flex align-items-end justify-content-center">
                      <h4 class="h1"><span class="currency">$</span>53</h4><span class="period">/ month</span>
                    </div>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-check"></i>id</li>  
                      <li><i class="fa fa-check"></i>estados_id  </li>
                      <li><i class="fa fa-check"></i>nombrePlan  </li>
                      <li><i class="fa fa-check"></i>resumen </li>
                      <li><i class="fa fa-check"></i>instalacion </li>
                      <li><i class="fa fa-check"></i>blog  </li>
                      <li><i class="fa fa-check"></i>hosting </li>
                      <li><i class="fa fa-check"></i>dominio </li>
                      <li><i class="fa fa-check"></i>espacio_ilimitado </li>
                      <li><i class="fa fa-check"></i>transferenc_ilim  </li>
                      <li><i class="fa fa-check"></i>cuentas_correo  </li>
                      <li><i class="fa fa-check"></i>agente  </li>
                      <li><i class="fa fa-check"></i>SSL </li>
                      <li><i class="fa fa-check"></i>atenc_telefónica  </li>
                      <li><i class="fa fa-check"></i>proveedor </li>
                      <li><i class="fa fa-check"></i>otros_proveedores </li>
                      <li><i class="fa fa-check"></i>backup  </li>
                      <li><i class="fa fa-check"></i>estadística </li>
                      <li><i class="fa fa-check"></i>protec_spam </li>
                      <li><i class="fa fa-check"></i>restaurac_backup </li> 
                      <li><i class="fa fa-check"></i>SEO_basico</li>
                    </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                  </div>
                </div>
              </div>
  <!--------------------FINAL PLAN  AUTONOMO---------------------------------------- 

  <!--------------------INICIAL PLAN  PRIMAL----------------------------------------- 

              <div class="col-md-3">
                <div class="package">
                  <div class="package-header bg-primary color-white">
                    <h5> {{ $plan->nombrePlan }} </h5>
                  </div>
                  <div class="price-container d-flex align-items-end justify-content-center">
                    <h4 class="h1"><span class="currency">$</span>99</h4><span class="period">/ month</span>
                  </div>
                  <ul class="list-unstyled">
                    
                    

                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->instalacion }}>Instalacion</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->blog  }}>Blog</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->hosting }}>Hosting</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->dominio }}>Dominio</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->espacio_ilimitado}}>Espacio ilimitado</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->transferenc_ilim}}>Transferencia ilimitada</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->cuentas_correo}}></li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->agente  }}>Agente</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->SSL }}>SSL</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->atenc_telefónica}}>Atención Telef</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->proveedor }}>Prooveedor</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->otros_proveedores }}>Otros Proveedores</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->backup  }}>Backup</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->estadística }}>Estadisticas</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->protec_spam }}>Proteccion Spam</li>
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->restaurac_backup }}> Restauracion Backup</li> 
                    <li><i class="fa fa-check"></i><input type="" value=""{{ $plan->SEO_basico}}>SEO básico</li>
                  </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                </div>
              </div>
  
  <!--------------------FINAL PLAN  PRIMAL------------------------------------------->            
            </div>
          </section>
           
         

           


<!-------------------------------SEGUNDO NIVEL PAQUETES----------------------------------- 
 {{ $plan->id}}  
            {{ $plan->estados_id}}   
            {{ $plan->nombrePlan  }} 
            {{ $plan->resumen }} 
            {{ $plan->instalacion}}  
            {{ $plan->blog  }} 
            {{ $plan->hosting }} 
            {{ $plan->dominio }} 
            {{ $plan->espacio_ilimitado }} 
            {{ $plan->transferenc_ilim  }} 
            {{ $plan->cuentas_correo  }} 
            {{ $plan->agente  }} 
            {{ $plan->SSL }} 
            {{ $plan->atenc_telefónica  }} 
            {{ $plan->proveedor }} 
            {{ $plan->otros_proveedores }} 
            {{ $plan->backup  }} 
            {{ $plan->estadística}}  
            {{ $plan->protec_spam }} 
            {{ $plan->restaurac_backup  }} 
            {{ $plan->SEO_basico}} 





          <section class="bar mb-0">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h3>Packages - version 2</h3>
                </div>
              </div>
            </div>
          Packages Start
            <div class="row packages">
              <div class="col-md-3">
                <div class="package">
                  <div class="package-header light-gray">
                    <h5>Basic</h5>
                  </div>
                  <div class="price">
                    <div class="price-container d-flex align-items-end justify-content-center">
                      <h4 class="h1"><span class="currency">$</span>7</h4><span class="period">/ month</span>
                    </div>
                  </div>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i>100GB Storage</li>
                    <li><i class="fa fa-check"></i>Own config file</li>
                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                    <li><i class="fa fa-times"></i>Auto Backup</li>
                    <li><i class="fa fa-times"></i>Extended Security</li>
                  </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                </div>
              </div>
             END FIRST PACKAGE
              <div class="col-md-3">
                <div class="package">
                  <div class="package-header light-gray">
                    <h5>Standard</h5>
                  </div>
                  <div class="price">
                    <div class="price-container d-flex align-items-end justify-content-center">
                      <h4 class="h1"><span class="currency">$</span>21</h4><span class="period">/ month</span>
                    </div>
                  </div>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i>100GB Storage</li>
                    <li><i class="fa fa-check"></i>Own config file</li>
                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                    <li><i class="fa fa-times"></i>Auto Backup</li>
                    <li><i class="fa fa-times"></i>Extended Security</li>
                  </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="best-value">
                  <div class="package">
                    <div class="package-header bg-primary color-white">
                      <div class="content">
                        <h5>Premium</h5>
                        <div class="meta-text">Best Value</div>
                      </div>
                    </div>
                    <div class="price-container d-flex align-items-end justify-content-center">
                      <h4 class="h1"><span class="currency">$</span>53</h4><span class="period">/ month</span>
                    </div>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-check"></i>100GB Storage</li>
                      <li><i class="fa fa-check"></i>Own config file</li>
                      <li><i class="fa fa-times"></i>Sharing Tools</li>
                      <li><i class="fa fa-times"></i>Auto Backup</li>
                      <li><i class="fa fa-times"></i>Extended Security</li>
                    </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="package">
                  <div class="package-header light-gray">
                    <h5>Ultimate</h5>
                  </div>
                  <div class="price-container d-flex align-items-end justify-content-center">
                    <h4 class="h1"><span class="currency">$</span>99</h4><span class="period">/ month</span>
                  </div>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i>100GB Storage</li>
                    <li><i class="fa fa-check"></i>Own config file</li>
                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                    <li><i class="fa fa-times"></i>Auto Backup</li>
                    <li><i class="fa fa-times"></i>Extended Security</li>
                  </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                </div>
              </div>
            </div>
            Packages End

----------------------------- TERCER NIVEL PAQUETES-----------------------------------                
          </section>
          <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h3>Packages - version 3</h3>
                </div>
              </div>
            </div>
            <div class="row packages">
              <div class="col-md-4">
                <div class="package">
                  <div class="package-header light-gray">
                    <h5>Basic</h5>
                  </div>
                  <div class="price-container d-flex align-items-end justify-content-center">
                    <h4 class="h1"><span class="currency">$</span>7</h4><span class="period">/ month</span>
                  </div>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i>100GB Storage</li>
                    <li><i class="fa fa-check"></i>Own config file</li>
                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                    <li><i class="fa fa-times"></i>Auto Backup</li>
                    <li><i class="fa fa-times"></i>Extended Security</li>
                  </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="best-value">
                  <div class="package">
                    <div class="package-header bg-primary color-white">
                      <div class="content">
                        <h5>Premium</h5>
                        <div class="meta-text">Best Value</div>
                      </div>
                    </div>
                    <div class="price-container d-flex align-items-end justify-content-center">
                      <h4 class="h1"><span class="currency">$</span>53</h4><span class="period">/ month</span>
                    </div>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-check"></i>100GB Storage</li>
                      <li><i class="fa fa-check"></i>Own config file</li>
                      <li><i class="fa fa-times"></i>Sharing Tools</li>
                      <li><i class="fa fa-times"></i>Auto Backup</li>
                      <li><i class="fa fa-times"></i>Extended Security</li>
                    </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="package">
                  <div class="package-header light-gray">
                    <h5>Ultimate</h5>
                  </div>
                  <div class="price-container d-flex align-items-end justify-content-center">
                    <h4 class="h1"><span class="currency">$</span>99</h4><span class="period">/ month</span>
                  </div>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i>100GB Storage</li>
                    <li><i class="fa fa-check"></i>Own config file</li>
                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                    <li><i class="fa fa-times"></i>Auto Backup</li>
                    <li><i class="fa fa-times"></i>Extended Security</li>
                  </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                </div>
              </div>
            </div>
          </section> 
------------------------------ FINAL PAQUETES -----------------------------------------------
-->
        </div>  

<!----------------------------FINAL CONTAINER PAQUETES------------------------------------->

  <!----------------------------INICIO CARRUSEL OPINIONES------------------------------------->        


       
        
        <!-- /.container-->
        <!--
        <section class="bar bg-gray no-mb">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>What our customers say</h2>
                </div>
                <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p>
                Carousel Start


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
                Carousel End
              </div>
            </div>
          </div>
        </section>
       --> 
      </div>
      
 <!-------------------------- FINAL CONTENT-------------------------------->
 <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}"></script>
 <script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
 <script type="text/javascript"> 
  $(document).ready(function()
    {
        console.log ('loco');
        var ico = $('ul' > 'li' > 'i.ico_paq');
        var linea =$("li#linea_paquetes");
        //var valor = $('#paq_ocul').val();
       // console.log (valor);
       var count=$("input.paq_ocul").length;
       var elemt=$("input.paq_ocul");
     


       console.log (count);
       var i =0; 
         for (i=1; i<count; i++)
         {
          if(elemt[i].value==0){
          $(linea[i]).hide();
          }
          else
          {
          
            console.log('uno');
          }
         }
         });
         
 
 
 

 </script>
@stop       