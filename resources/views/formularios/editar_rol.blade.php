@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('/roles/'.$role->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
      <input id="{{$role->id}}" type="hidden" value="{{ $role->id }}" name="roles_id">  
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombre_role">Nombre</label>
          <input id="nombreRol" type="text" class="form-control"  name="nombreRol"   value="{{$role->nombreRol }}">
        </div>
                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="modificar_estado_rol(this)"  style="width: 100%;">

                 <option value="{{$role->estados_id}}" selected disabled>{{$role->estado['nombreEstado']}} </option>
                @foreach($estado as $esta)
                            
                  <option value="{{$esta['id']}}">
                    {{$esta['nombreEstado']}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
            <input type="hidden"  id="estados_id" name="estados_id" value={{$role->estados_id}}>
        </div>

      </div>  
   
<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('roles') }}" >
          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i class="fa fa-window-close"></i>
            Cerrar
          </button>
        </a>

        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value="Modificar">  
        </input> 
        
      </div>                     
                               
      
    </form> <!--FINAL 3 FORMULARIO ROLE-->
  </div>

  <script>

    function modificar_estado_rol(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x);

  
}
  </script>
 @endsection