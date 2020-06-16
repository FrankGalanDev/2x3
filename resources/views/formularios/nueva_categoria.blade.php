@extends('layouts.escritorio_base')

@section('content')

<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('categorias')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
         
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombre_categoria">Nombre</label>
          <input id="nombreCategoria" type="text" class="form-control"  name="nombreCategoria"  value="" placeholder="Nombre de la categoria">
        </div>
                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="asignar_estado_categoria(this)"  style="width: 100%;">
                @foreach($estados as $esta)
                            
                  <option value="{{$esta->id}}" >
                    {{$esta->nombreEstado}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="estados_id" name="estados_id" value="{{$esta->id}}" > 
        </div>

      </div>  
  

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('categorias') }}" >
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

    function asignar_estado_categoria(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x);

  
}
  </script>
 @endsection 