@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="editar_sitio" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('/incidencias/'.$incidencia->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
      <input id="{{$incidencia->id}}" type="hidden" value="{{ $incidencia->id }}" name="incidencias_id">  
         

    <!--INICIO BOX BODY--> 

      <div class= "row">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombreIncidencia">NombreIncidencia</label>
          <input id="nombreIncidencia" type="text" class="form-control"  name="nombreIncidencia"   value="{{$incidencia->nombreIncidencia}}" disabled readonly="">
        </div>
                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_"   onchange="modificar_estado_incidencia(this)"  style="width: 100%;">
                
                 <option value="{{$incidencia->estados_id}}" selected disabled>{{$incidencia->estado['nombreEstado']}} </option>
                @foreach($estado as $esta)
                            
                  <option value="{{$esta['id']}}" >
                    {{$esta['nombreEstado']}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
            <input  type="hidden"  id="estados_id" name="estados_id" value={{$incidencia->estados_id}}>
        </div>

       <div class="">                            
          <div  class="form-group col-md-10">
            <label id="modal_elem" for="inputfecha">Sitio</label>
            <input id="sitio" type="text" class="form-control"  name="sitio"   value="{{$incidencia->sitio->nombreSitio}}" >
          </div>

        </div> 
      </div> 
  <!------------------------------------------------------------------------------------------->    
    <div class= "row">
      <div class="form-group col-md 10">

          <input  id="incidencia_anterior" type="hidden" class="form-control"  name="incidencia_anterior"
             value="{{$incidencia->descripcion}}">
      </div>
    </div>
    <div class="row">
        <div class="form-group col-md-10">
            <label id="modal_elem" for="inputmodificacion">Descripcion</label>
            <textarea id="modificacion" type="text" class="form-control"  name="modificacion" onchange= "añadir_modificacion()"   value="">
              
            </textarea>
        </div>

         <div class="form-group col-md-10" type="hidden">
            
            <textarea hidden id="descripcion" type="hidden" class="form-control"  name="descripcion"   value="">
              
            </textarea>
        </div>

      </div>                    
                           
  <!------------------------------------------------------------------------------------------------>                        
        <div class="row">                            
          <div  class="form-group col-md-4">
            <label id="modal_elem" for="inputfecha">Fecha</label>
            <input id="fecha_incidencia" type="text" class="form-control"  name="fecha_incidencia"   value="" >
          </div>
         
                            
        </div>       
                            


<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('incidencias') }}" >
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

$(document).ready(function(){ 
var fecha = new Date;
var fecha = $('#fecha_incidencia').val(fecha.getDate()+"/"+(fecha.getMonth()+1)+"/"+fecha.getFullYear()+"-:"+fecha.getHours()+":"+fecha.getMinutes()+":"+fecha.getSeconds());

 });


  function modificar_estado_incidencia(id) 
    {
 //alert('loco');

      var x = id.options[id.selectedIndex].value;
      $("#estados_id").val(x); 
    }


  function añadir_modificacion()
    {
      var  incidencia_anterior= $('#incidencia_anterior').val();
      var modificacion = $('#modificacion').val();
      var otrafecha= new Date;
      var otrafecha = otrafecha.getDate()+"/"+(otrafecha.getMonth()+1)+"/"+otrafecha.getFullYear()+"-:"+otrafecha.getHours()+":"+otrafecha.getMinutes()+":"+otrafecha.getSeconds();
     
      var descripcion = $('#descripcion').val(incidencia_anterior+" \n incidencia modificada el "+otrafecha+"\n"+modificacion);
    }


  </script>
 @endsection