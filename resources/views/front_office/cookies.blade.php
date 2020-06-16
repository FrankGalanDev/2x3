@extends('front_office.base_front_office')

@section('content')

      <!-- INICIO CONTENIDO----------------------------------------->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Ley de Cookies</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{ 'inicio' }}">Inicio</a></li>
                <li class="breadcrumb-item active">Cookies</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  <!-------------------------------INICIO CONTENT--------------------------->    
      <div id="content">
  <!-------------------------------INICIO CONTAINER--------------------------->         
        <div class="container">

  <!-------------------------------INICIO SECTION BAR--------------------------->         
          <section class="bar">
            <h1>Cookies</h1>
          </section>
  <!-------------------------------FINAL SECTION BAR--------------------------->  

  <!-------------------------------INICIO SECTION--------------------------->          
              <section id="ley_cookies" name="ley_cookies">
                <div>
                  <h3>1. LEY DE COOKIES</h3>
             
                  <p>La Ley de cookies regulada por la Ley de Servicios de la Información – LSSI, obliga a los propietarios de sitios web a informar de forma clara y obtener el consentimiento para la utilización de este tipo de tecnología en sus páginas.</p>
                  <p>Para cumplir con la ley debemos informar al usuario sobre:</p>
                  <p>¿Qué es una cookie? ¿Cuál es su finalidad?</p>
                  <p>Las cookies son ficheros de datos que son almacenados en el navegador del usuario con la finalidad de recordar determinados parámetros e información sobre el usuario, consiguiendo una mayor personalización y análisis sobre el comportamiento del mismo.</p>


                </div>
              </section>

              <section id="tipo_cookies" name="tipo_cookies">  
                <div>
                  <h3>2. TIPOS DE COOKIES</h3>

                  <p>Para cumplir con la ley, debemos informar en la web de forma clara sobre el uso de las cookies y obtener el consentimiento del usuario. En todas las páginas se utilizan básicamente 5 tipos de cookies:</p>
 
                  <p>1.  Cookie de carácter técnico: destinada únicamente a permitir al usuario navegar por la página web.</p>
                  <p>2.  Cookie estrictamente necesaria para la prestación de un servicio solicitado por el usuario: por ejemplo, aquella que es necesaria instalar para efectuar un pago, iniciar sesión o acceder a una zona privada de la web.</p>
                  <p>3.  Cookies analíticas: para el seguimiento y análisis estadístico del comportamiento del conjunto de los usuarios. Pueden ser, por ejemplo, las que usa Google Analytics.
                  <p>4.  Cookies de marketing y publicidad: permiten anuncios y banners personalizados, también la recopilación de estadísticas sobre los mismos.</p>
                  <p>5.  Cookies de redes sociales y otros plugins: permiten compartir contenido del sitio a través de sitios web de redes sociales de terceros.</p>
                  <p>El usuario podrá elegir qué cookies quiere que funcionen en el sitio web o desactivarlas mediante la configuración de su navegador. *(Algunos sistemas de desactivación de cookies pueden conllevar que se instale en su equipo una cookie "de rechazo" para que funcione su elección de desactivación).</p>


                </div>
              </section>

              <section id="deshabilitar" name="deshabilitar"> 
                <div>
                  <h3>3.¿CÓMO DESHABILITAR LAS COOKIES?</h3>

                 <p>En la configuración de su navegador el usuario podrá desactivar el uso de cookies.</p>
                  <p>Haga clic encima del navegador que utiliza para ver las instrucciones:</p>
                  <p>- Firefox</p>
                  <p>- Chrome</p>
                  <p>- Explorer</p>
                  <p>- Safari</p>
                  <p>- Opera</p>



                </div>
              </section>

             

             


          </div>
  <!--------------------------FINAL CONTAINER----------------------------------->        
        
      </div>
  <!-------------------------------INICIO CONTENT--------------------------->    
@stop