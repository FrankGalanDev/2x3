@extends('layouts.escritorio_base')

@section('content')

<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('pagos')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
         
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
         
        <div class="col-md-6">
          <label>Sitio</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="sitios_" onchange="asignar_sitio_pago(this)"  style="width: 100%;">
                @foreach($sitios as $sitio)
                            
                  <option value="{{$sitio->id}}" >
                    {{$sitio->nombre_sitio}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="sitios_id" name="sitios_id" value="{{$sitio->id}}" > 
        </div>

        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnumero_pago">Número del pago</label>
          <input id="numero_pago" type="text" class="form-control"  name="numero_pago"  value="" placeholder="Número del Pago">
        </div>

        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnumero_factura">Numero Factura</label>
          <input id="numero_factura" type="text" class="form-control"  name="numero_factura"  value="" placeholder="No. Factura">
        </div>

                            
        



        

      </div>  
  

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('pagos') }}" >
          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i  class="fa fa-window-close"></i>
            Cerrar
          </button>
        </a>

        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value=" Crear">  
        </input> 
        
      </div>                     
                               
      
    </form> <!--FINAL 3 FORMULARIO SITIO-->
  </div>

<script>

 
  function asignar_sitio_pago(id) 
    {
    //  alert('loco');
    var x = id.options[id.selectedIndex].value;
    $("#sitios_id").val(x);
 
    }


var codigo = 'MC/F';
var d = new Date();
var fecha = d.getDate()+'-'+d.getMonth()+'-'+d.getFullYear()+d.getHours()+'/'+d.getMinutes();
document.getElementById("numero_factura").value =codigo+fecha;

   
 
</script>
 @endsection 