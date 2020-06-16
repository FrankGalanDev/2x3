@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('tasks')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
         
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombreTarea">Nombre</label>
          <input id="nombreTarea" type="text" class="form-control"  name="nombreTarea"  value="" placeholder="Nombre de la tarea">
        </div>

                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="asignar_estado_tarea(this)"  style="width: 100%;">
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
          <label>Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="users_" onchange="asignar_usuario_tarea(this)"  style="width: 100%;">
                @foreach($users as $user)
                            
                  <option value="{{$user->id}}" >
                    {{$user->name}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="users_id" name="users_id" value="{{$user->id}}" > 
        </div>

        <div class="col-md-6">
          <label>Sitio</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="sitios_" onchange="asignar_sitio_tarea(this)"  style="width: 100%;">
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
  <!------------------------------------------------------------------------------------------->      
      <div class="row">
        <div  class="form-group col-md-4">
            <label id="modal_elem" for="inputfecha">Fecha</label>
             <input id="fecha" type="text" class="form-control"  name="fecha"  value="" >
              
        </div>

        <div  class="form-group col-md-12">
            <label id="modal_elem" for="inputresumen">Resumen</label>
             <textarea id="resumen" type="text" class="form-control"  name="resumen"  value="" placeholder="Resumen de la Tarea">
             </textarea>
        </div>
        
        <div class="form-group col-md-12">
            <label id="modal_elem" for="inputdescripcion">Descripcion</label>
            <textarea  id="descripcion" type="text" class="form-control"  name="descripcion"   value="" placeholder="Descripcion">
              
            </textarea>
        </div>

        <div class="col-md-2">
          <label>Alarma</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="alarma_"  name= "alarma_" onchange="asignar_alarma_tarea(this)"  style="width: 100%;">
                          
                  <option value="0" >
                    No
                  </option>

                  <option value="1" >
                   Si
                  </option>
                           
                
              </select> 
            </div> 
             <input type="hidden"  id="alarma" name="alarma" value="0" > 
        </div>

      </div>                    
                           
  <!------------------------------------------------------------------------------------------------>     
<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('tasks') }}" >
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

    function asignar_estado_tarea(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x);

  
}

   function asignar_usuario_tarea(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#users_id").val(x);
 
}

   function asignar_sitio_tarea(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#sitios_id").val(x);
 
}

   function asignar_alarma_tarea(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#alarma").val(x);
 
}

var d = new Date();
var fecha = d.getDate()+'-'+d.getMonth()+'-'+d.getFullYear()+' hora:'+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
document.getElementById("fecha").value =fecha;

  </script>
 @endsection