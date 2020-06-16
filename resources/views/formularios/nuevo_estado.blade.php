@extends('layouts.escritorio_base')

@section('content')

<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('estados')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
         
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombre_rol">Nombre</label>
          <input id="nombreEstado" type="text" class="form-control"  name="nombreEstado"  value="" placeholder="Nombre del estado">
        </div>
                            
        
      </div>  
  

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('estados') }}" >
          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i  class="fa fa-window-close"></i>
            Cerrar
          </button>
        </a>

        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value=" Crear">  
        </input> 
        
      </div>                     
                               
      
    </form> <!--FINAL 3 FORMULARIO SITIO-->
  </div>

 @endsection 