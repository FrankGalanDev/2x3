@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="editar_sitio" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('/categorias/'.$categoria->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
      <input id="{{$categoria->id}}" type="hidden" value="{{ $categoria->id }}" name="categorias_id">  
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombreCategoria">NombreCategoria</label>
          <input id="nombreCategoria" type="text" class="form-control"  name="nombreCategoria"   value="{{$categoria->nombreCategoria}} " readonly="">
        </div>
                            
        <div class="col-md-3">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_"   onchange="modificar_estado_categoria(this)"  style="width: 100%;">
                
                 <option value="{{$categoria->estados_id}}" selected disabled>{{$categoria->estado['nombreEstado']}} </option>
                @foreach($estado as $esta)
                            
                  <option value="{{$esta['id']}}" >
                    {{$esta['nombreEstado']}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
            <input type="hidden"  id="estados_id" name="estados_id" value={{$categoria->estados_id}}>
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

  <script>

    function modificar_estado_categoria(id) 
{
 //alert('loco');

 var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x); 

  
}
  </script>
 @endsection