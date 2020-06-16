@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="editar_sitio" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('/tasks/'.$task->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
      <input id="{{$task->id}}" type="hidden" value="{{ $task->id }}" name="tasks_id">  
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombreTarea">Nombre</label>
          <input id="nombreTarea" type="text" class="form-control"  name="nombreTarea"   value="{{$task->nombreTarea}}">
        </div>
      
      </div>

      <div class= "row ">
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_"   onchange="modificar_estado_tarea(this)"  style="width: 100%;">
                
                 <option value="{{$task->estados_id}}" selected disabled>{{$task->estado['nombreEstado']}} </option>
                @foreach($estado as $esta)
                            
                  <option value="{{$esta['id']}}" >
                    {{$esta['nombreEstado']}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
            <input type="hidden"  id="estados_id" name="estados_id" value={{$task->estados_id}}>
        </div>

        
  <!------------------------------------------------------------------------------------------->      
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
             <input type="hidden"  id="alarma" name="alarma" value="{{ $task->alarma }}" > 
        </div>
      </div>

      <div class="row">
        <div  class="form-group col-md-10">
            <label id="modal_elem" for="inputresumen">Resumen</label>
             <textarea id="resumen" type="text" class="form-control"  name="resumen"  value=""  >{{ $task->resumen }}
             </textarea>
        </div>
        
        <div class="form-group col-md-12">
            <label id="modal_elem" for="inputdescripcion">Descripcion</label>
            <textarea  id="descripcion" type="text" class="form-control"  name="descripcion"   value="" placeholder="Descripcion">{{ $task->descripcion }}
              
            </textarea>
        </div>

      </div>                    
                           
  

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('categorias') }}" >
          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i  class="fa fa-window-close"></i>
            Cerrar
          </button>
        </a>

        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value="Modificar">  
        </input> 
        
      </div>                     
                               
      
    </form> <!--FINAL 3 FORMULARIO SITIO-->
  </div>

 <script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
  <script>

    $(document).ready(function()
      {
            
        var seleccionado = $("#alarma").val(); 
        console.log (seleccionado);
        $("#alarma_ option:selected").val(seleccionado);
    
      }); 

    function modificar_estado_proveedor(id) 
{
 //alert('loco');

 var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x); 
 
}

    function modificar_estado_proveedor(id) 
{
 //alert('loco');

 var x = id.options[id.selectedIndex].value;
$("#alarma").val(x); 
 
}

  </script>
 @endsection