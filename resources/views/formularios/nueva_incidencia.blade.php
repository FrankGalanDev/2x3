@extends('layouts.escritorio_base')

@section('content')

<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('incidencias')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
         
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombreIncidencia">Nombre de la Incidencia</label>
          <input id="nombreIncidencia" type="text" class="form-control"  name="nombreIncidencia"  value="" placeholder="Nombre de la incidencia">
        </div>

        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputdescripcion">Descripcion</label>
          <input id="descripcion" type="text" class="form-control"  name="descripcion"  value="" placeholder="Descripcion de la incidencia">
        </div>

        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputfecha_incidencia">Fecha</label>
          <input id="fecha_incidencia" type="text" class="form-control"  name="fecha_incidencia"  value="" placeholder="Nombre de la incidencia">
        </div>

                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="asignar_estado_incidencia(this)"  style="width: 100%;">
                @foreach($estados as $esta)
                            
                  <option value="{{$esta->id}}" >
                    {{$esta->nombreEstado}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="estados_id" name="estados_id" value="{{$esta->id}}" > 
        </div>



        <div class="col-md-6">
          <label>Sitio</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="sitios_" onchange="asignar_sitio_incidencia(this)"  style="width: 100%;">
                @foreach($sitios as $sitio)
                            
                  <option value="{{$sitio->id}}" >
                    {{$sitio->nombreSitio}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="sitios_id" name="sitios_id" value="{{$sitio->id}}" > 
        </div>

      </div>  
  

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('incidencias') }}" >
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



    function asignar_estado_incidencia(id) 
      {
      //  alert('loco');
      var x = id.options[id.selectedIndex].value;
      $("#estados_id").val(x);

        
      }


  function asignar_sitio_incidencia(id) 
    {
    //  alert('loco');
    var x = id.options[id.selectedIndex].value;
    $("#sitios_id").val(x);

      
    }

var d = new Date();
var fecha = d.getDate()+'-'+d.getMonth()+'-'+d.getFullYear()+' hora:'+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
document.getElementById("fecha_incidencia").value =fecha;

   
 
</script>
 @endsection 