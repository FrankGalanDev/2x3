@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('tickets')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
       


    <!--INICIO BOX BODY-->
      <div class="row">

          <div  class="form-group col-md-6">
            <label id="modal_elem" for="inputsitio">Sitio</label>
            <input id="sitio" type="text" class="form-control"  name="sitio"   value="{{ $ticket->sitio->nombreSitio }}"  disabled>
          </div>
          

          <div  class="form-group col-md-5">
            <label id="modal_elem" for="inputpin_soporte"> Pin Soporte</label>
            <input id="pin_soporte" type="text" class="form-control"  name="pin_soporte"   value="{{ $ticket->user->pin_soporte }}" >
          </div>
      </div>

      <div class="row"> 
                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="asignar_estado_ticket(this)"  style="width: 100%;">
                @foreach($estado as $esta)
                            
                  <option value="{{$esta->id}}" >
                    {{$esta->nombreEstado}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="estados_id" name="estados_id" value="{{ $esta->id}}" > 
        </div>

        <div  class="form-group col-md-6">
          <label id="modal_elem" for="inputusers_id">Cliente</label>
          <input id="users_id" type="text" class="form-control"  name="users_id"   value="{{ $ticket->user->name }}" disabled>
        </div>

        
      </div>  
          
                           
  <!------------------------------------------------------------------------------------------------>                        
      <div class="col-md-12">   
        
        <div  class="form-group col-md-12">
            <label id="modal_elem" for="inputnuevo_asunto">Asunto nuevo</label>
            <input id="nuevo_asunto" type="text" class="form-control"  name="nuevo_asunto"  onchange="addFecha()" value="" placeholder="Añada un nuevo asunto al ticket" >
        </div>

        <div class="row " style="border:2px solid #fff;">

          <div  class="form-group col-md-12">
              <label id="modal_elem" for="inputasunto">Asunto</label>
              <input id="asunto" type="text" class="form-control"  name="asunto"   value="{{ $ticket->asunto }}"  disabled>
          </div>
   
          <div class="form-group col-md-12">
            <label id="modal_elem" for="inputticket_anterior">Historial</label>
            <textarea   id="ticket_anterior"  style="color:white;" type="text" class="form-control text-light"  name="ticket_anterior"   value="{{$ticket->texto}}"  disabled>{{$ticket->texto}}    </textarea>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="form-group col-md-10">
          <label id="modal_elem" for="inputmodificacion">Modificacion </label>
          <textarea id="modificacion" type="text" class="form-control"  name="modificacion" onchange= "añadir_modificacion()"   value="">
              
          </textarea>
        </div>


         <div class="form-group col-md-12" type="hidden">
            
            <textarea  id="texto" type="hidden" class="form-control"  name="texto"   value="">
              
            </textarea>
        </div>

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


 function añadir_modificacion()
  {
      var nuevo_asunto = $('#nuevo_asunto').val();
      var ticket_anterior= $('#ticket_anterior').val();
      var modificacion = $('#modificacion').val();
      var otrafecha= new Date;
      var otrafecha = otrafecha.getDate()+"/"+(otrafecha.getMonth()+1)+"/"+otrafecha.getFullYear()+"-:"+otrafecha.getHours()+":"+otrafecha.getMinutes()+":"+otrafecha.getSeconds();
     
      var texto = $('#texto').val(ticket_anterior+" \n Ticket modificado el "+otrafecha+"\n"+nuevo_asunto+"\n"modificacion);
  }

function addFecha(){

var d = new Date();
var fecha = d.getDate()+'-'+d.getMonth()+'-'+d.getFullYear()+' hora:'+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
document.getElementById("asunto").value=document.getElementById("asunto").value+fecha;
}

  </script>
 @endsection