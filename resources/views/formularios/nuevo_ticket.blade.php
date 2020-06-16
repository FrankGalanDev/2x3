@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('tickets')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
       

<?php
$pines = json_encode($pines);
        
 ?>         
<textarea class ="col-md-12" id ="pines" type="" name="pines"  value="{{$pines}}"></textarea> 

 

    <!--INICIO BOX BODY-->

        <div class="col-md-6">
          <label>Sitio</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="sitios_" onchange="asignar_sitio_ticket(this)"  style="width: 100%;">
                @foreach($sitios as $sitio)
                            
                  <option value="{{$sitio->id}}" >
                    {{$sitio->nombreSitio}}

                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="sitios_id" name="sitios_id" value="{{ $sitio->id}}" > 
        </div>


                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="asignar_estado_ticket(this)"  style="width: 100%;">
                @foreach($estados as $esta)
                            
                  <option value="{{$esta->id}}" >
                    {{$esta->nombreEstado}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="estados_id" name="estados_id" value="{{ $esta->id}}" > 
        </div>

        <div class="col-md-6">
          <label>Cliente</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="clientes_" onchange="asignar_user_ticket(this)"  style="width: 100%;">
                @foreach($clientes as $cliente)
                            
                  <option  id= "opcion_pin" value="{{$cliente->id}}" >
                    {{$cliente->name}}   
                    {{ $p = 'pin soporte:-'.$cliente->pin_soporte}} 
                     
                     
                     
                  </option> 
         
                @endforeach  
 
              </select> 
 
            </div> 
             <input type=" "  id="users_id" name="users_id" value="" > 
              
            
        </div>
  
      </div>  
          
                           
  <!------------------------------------------------------------------------------------------------>                        
        <div class="row">   

          <div  class="form-group col-md-4">
            <label id="modal_elem" for="inputasunto">Asunto</label>
            <input id="asunto" type="text" class="form-control"  name="asunto"  onchange="addFecha()" value="" placeholder="Escriba el asunto del ticket" >
          </div>

          <div  class="form-group col-md-4">
            <label id="modal_elem" for="inputasunto"> Pin Soporte</label>
            <input id="pin_soporte" type="text" class="form-control"  name="pin_soporte"   value="" >
          </div>

          <div class="form-group col-md-12">
            <label id="modal_elem" for="inputtexto">Texto</label>
            <textarea  id="texto" type="text" class="form-control"  name="texto"   value="" placeholder="Texto del ticket"></textarea>
          </div>

          <div class="col-md-6">
          <label>Asignado a:</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="asigned_" onchange="asignar_responsable_ticket(this)"  style="width: 100%;">
                @foreach($empleados as $empleado)
                            
                  <option value="{{$empleado->id}}" >
                    {{$empleado->name}}
                  </option>
                           

                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="asignado_a" name="asignado_a" value="{{$empleado->name}}" > 
        </div>

                            
        </div>       
                            
 
<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('tickets') }}" >
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

  function asignar_sitio_ticket(id) 
    {
    //  alert('loco');
    var y = id.options[id.selectedIndex].value;
    $("#sitios_id").val(y);
      
    }


    function asignar_estado_ticket(id) 
{
//  alert('loco');
var k = id.options[id.selectedIndex].value;
$("#estados_id").val(k);

  
}

   function asignar_user_ticket(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#users_id").val(x);



//idents = Json_parse(idents);
var pin  = $("#opcion_pin").html();
// console.log(pin);

 
}
$("pin_soporte").val(pin); 


  function  asignar_responsable_ticket(id) 
{
//  alert('loco');
var z = id.options[id.selectedIndex].value;
$("#asignado_a").val(z);
  
}


function addFecha(){

var d = new Date();
var fecha = d.getDate()+'-'+d.getMonth()+'-'+d.getFullYear()+' hora:'+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
document.getElementById("asunto").value=document.getElementById("asunto").value+fecha;
}

  </script>
 @endsection