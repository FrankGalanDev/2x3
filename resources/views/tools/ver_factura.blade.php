<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <title>Factura Dos por Tres</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/fontawesome/css/all.css') }}" >
   
    <link rel="stylesheet" href="{{asset('css/factura.css')}}"> 
   <link rel="stylesheet" href="{{asset('css/main.css')}}"> 
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}">
</head>
<body>
  <!----------------------- INIC LINEA TOP----------------------------------->  
  <div class="row " > 

    <div class="control-bar">
        <div class="container">
          <div class=" row menu_sup" >
            <div class="col-md-6">
              <div class="slogan">Facturación </div>
          </div>

          <div class="subt_sup col-md-2 text-right">
            <a href="javascript:window.print()">Imprimir</a>
          </div><!--.col-->
          <div class="subt_sup col-md-2 text-right">
      <a href="{{ action('FacturaController@convertir_pdf', $factura->id) }}" > Exportar </a>
          </div>
          <div class=" subt_sup col-md-2 text-right">
             <a href="{{ route('facturas.index') }}">Volver </a>
          </div>

        </div><!--.row-->
      </div><!--.container-->
    </div><!--.control-bar-->

  </div>
  <!----------------------- FINAL LINEA TOP-----------------------------------> 

  <!----------------------- INICIO LINEA HEADER----------------------------------> 
<header class="row" style="display:flex;">

  <div class="logoholder text-center col-md-4" >
    <img src= {{ asset('img/logo_factura.png') }}>
  <!--.logoholder-->

    <div class="me col-md-12">
      <p>
        <strong>Mis clientes.</strong><br>
        46020. Valencia<br>
        España.<br>
      </p>
    </div><!--.me-->
  </div>

  <div class="info col-md-4">
    <p >
      Web: <a href="{{('https://dosportres.org') }}">Mis Clientes</a><br>
      E-mail: <a href="{{asset('mailto:info@dosportres.org')}}">info@dosportres.org</a><br>
      Tel: +456-345-908-559<br>
      Twitter: @misclientes
    </p>
  </div><!-- .info -->

  <div class="bank col-md-4">
    <p >
      Datos bacarios: <br>
      Titular de la cuenta: <br>
      IBAN: <br>
      BIC:
    </p>
  </div><!--.bank-->

</header>
<!----------------------- FINAL LINEA HEADER----------------------------------> 

<div class="row section">

	<div class="col-md-3">
    <h1 >Factura</h1>
  </div><!--.col-->

  <div class="col-md-3  details" id="details" style="font-size: 1rem;">
    <div style="display:flex;" >
      Fecha: <input id="fecha" type="text" class="" name="fecha" value="" disabled /><br>
    </div> 
    <div style="display:flex;">
      Factura: <input type="text" value="{{ $factura->numeroFactura }}" disabled /><br>
    </div>
    <div style="display:flex;">
      Vence: <input class="twoweeks" type="text" value="" disabled/>
    </div>
  </div><!--.col-->
  
  
  
  <div class="col-md-3" id="cliente_det1" style="font-size:1rem;">
    

    <p class="client">
      <strong>Facturar a</strong><br>
      {{ $factura->sitio->nombreSitio }}<br>
      {{ $factura->contrato->nombreContrato }}<br>
      {{ $factura->numeroFactura }}<br>
	    {{ $factura->importe }}<br>
	     
    </p>
  </div><!--.col-->
  
  
  <div class="col-md-3" id="cliente_det2" style="font-size: 1rem;">
   

    <p class="client">
      <strong>Datos Cliente</strong><br>
      {{ $factura->user->name}}   {{ $factura->user->apellidos }}<br>
      {{ $factura->user->email}}<br>
      {{ $factura->user->empresa}}<br>
	    {{ $factura->user->identificacion_fiscal}}<br><br>
	  
    </p>
  </div><!--.col-->

  

</div><!--.row-->
<!-------------INICIO  SECCION TABLA DATOS DEL CLIENTE------------------------------------>
<div class="row section" style="margin-top:-1rem">
  <div class="tabla_datos col-12">
  	<table style='width:100%'>
      <thead >
      	<tr class="invoice_detail">
            <th width="25%" style="text-align">Vendedor</th>
             <th width="25%">Orden de Pago </th>
            <th width="20%">Tipo Factura</th>
            <th width="30%">Tipo de Pago</th>
      	 </tr> 
      </thead>
      <tbody >
      	<tr class="invoice_detail">
            <td width="25%" style="text-align">{{$factura->user->name }} {{$factura->user->apellidos}}</td>
             <td width="25%">{{$factura->periodosPago }} </td>
            <td width="20%">Digital</td>
            <td width="30%">Transferencia / Tarjeta </td>
      	 </tr>

  	  </tbody>
  	</table>

  </div>
  

</div><!--.row-->
 <div > <input type="hidden" class="" id="config_tax_rate" value="{{$factura->iva }}"></div>
<!--------------------FINAL   SECCION TABLA DATOS DEL CLIENTE------------------------------------>

<!--------------------INICIO   SECCION TABLA DATOS IMPORTE------------------------------------>

<div class="mt-5">
  <table>
    <thead  >
      <tr  class="linea_fact" style="background: #cceae7; color: #000;" >
        <th class="col-md-2" style="width:15%;">Código</th>
        <th class="col-md-3" style="width:40%;">Descripción</th>
        <th class="col-md-1" style="width:5%;">Cant.</th>
        <th class="col-md-2" style="width:15%;">Precio</th>
        <th class="col-md-2" style="width:15%;"class="taxrelated">IVA</th>
        <th class="col-md-2" style="width:10%;">Total</th>
      </tr>
    </thead>

    <tbody>
      <tr  class="linea_fact text-center" >
        <td style="padding-left: 3%;"> 
          {{ $factura->id }} 
        </td>
        <td  style="padding-left: 3%;">
          {{ $factura->contrato->descripcion }} 
        </td>
        <td> 
          <input  class="inp_fact text-center" id="amount" style="border:none; width:50px;"   type="text" value="1" disabled>
         
        </td>

        <td>
          <input class="inp_fact text-center" id="precio_ini" style="border:none; width:50px;"  type="text" name="precio_ini" value="{{ $factura->importe}}" disabled >
           
        </td>
        <td> 
          <input class="inp_fact text-center" id="iva" style=" border:none; width:50px;"   name="iva" value="{{ $factura->iva}}" disabled>
          
        </td>

        <td> 
          <input class="inp_fact text-center text-center" id="precio_s_iva"  name="inp_fact text-center"  value="" disabled>
          
        </td>

        
      </tr>

      <tr class="linea_fact">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td  style="padding-left: 3%;" >Total IVA:</td>
        <td>
          <input  id= "total_iva" class="inp_fact text-center" value="" style="padding-left: 10%;">
        </td>

        

         
      </tr>


    </tbody>
  </table>
  
</div><!--.invoice-body-->

<div class="invoicelist-footer">
  <table  >
    
    <tr class="linea_fact" >
      <td><strong>Total:</strong></td>
      <td style = "border:2px solid #009688;">
        <input class="inp_precTot text-center" id="inp_precTot" value=""  disabled>
      </td>
    </tr>
  </table>
</div>

<div class="note" >
  <h2>Nota:</h2>
</div><!--.note-->

    <footer class="row">
      <div class="col-md-10 text-center">
        <p class="notaxrelated" >El monto de la factura  incluye el impuesto sobre las ventas.</p>
        
      </div>


    </footer>

    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}"></script>
    <script>
      window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')
    </script>
<!--*    <script src="{{ asset('js/main.js') }}"></script>-->
    <script>
        var d = new Date();
        var fecha_hoy = d.getDate()+'-'+(d.getMonth()+1)+'-'+d.getFullYear();

       
        $("#fecha").val(fecha_hoy);


    </script>
    <script>
    $(document).ready(function(){

        
      $('body').addClass('hidetax hidenote hidedate');

  /*---------  ASIGNACION FECHA--------- */
      var now = new Date();

      var month = (now.getMonth() + 1);  

      var day = now.getDate();

      if (month < 10) {
        month = "0" + month;
      }

      if (day < 10) {
        day = "0" + day;
      }

      var today =  day +'-' + month + '-' + now.getFullYear().toString().substr(2,2);
      
      var intwoweeks = new Date(now.getTime() + 30 * 24 * 60 * 60 * 1000);

      var month = (intwoweeks.getMonth() + 1);  

      var day = intwoweeks.getDate();

      if (month < 10)
        {
          month = "0" + month;
        }

      if (day < 10) 
        {
          day = "0" + day;
        }
      
      var twoweeks =  day +'-' + month + '-' + intwoweeks.getFullYear().toString().substr(2,2);
      // console.log (twoweeks);
  

      $('.datePicker').val(today);
     
      $('.twoweeks').val(twoweeks);
     
  /*--------  VALORES DE LA FACTURA-------- */
      var TAX_RATE = parseFloat ($('#config_tax_rate').val()/100);

      var TAX_SETTING = false;

      var amount = $("#amount").val();

      var precio = $("#precio_ini").val();

      var precio_s_iva = precio * amount;

      var total_iva = precio_s_iva * TAX_RATE;

      var precio_c_iva = precio * 1.18 ;

      $("#precio_s_iva").val(precio_s_iva);

      $("#total_iva").val(total_iva);

      $("#inp_precTot").val('€'+precio_c_iva);




    });
    </script>
  </body>
</html>