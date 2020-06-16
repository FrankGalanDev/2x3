@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="editar_sitio" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('/proveedores/'.$proveedore->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
      <input id="{{$proveedore->id}}" type="hidden" value="{{ $proveedore->id }}" name="proveedores_id">  
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombre">Nombre</label>
          <input id="nombre" type="text" class="form-control"  name="nombre"   value="{{$proveedore->nombreProveedor}}">
        </div>
                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_"   onchange="modificar_estado_proveedor(this)"  style="width: 100%;">
                
                 <option value="{{$proveedore->estados_id}}" selected disabled>{{$proveedore->estado['nombreEstado']}} </option>
                @foreach($estado as $esta)
                            
                  <option value="{{$esta['id']}}" >
                    {{$esta['nombreEstado']}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
            <input type="hidden"  id="estados_id" name="estados_id" value={{$proveedore->estados_id}}>
        </div>

      </div>  
  <!------------------------------------------------------------------------------------------->      
      <div class="row">
        <div  class="form-group col-md-8">
            <label id="modal_elem" for="inputurl_proveedore">URL</label>
            <input id="url_proveed" type="text" class="form-control"  name="url_proveed"
             value="{{$proveedore->url_proveed}}">
        </div>
        <div class="form-group col-md-4">
            <label id="modal_elem" for="inputtelefono">Teléfono</label>
            <input id="telefono" type="text" class="form-control"  name="telefono"   value="{{$proveedore->telefono }}">
        </div>

      </div>                    
                           
  <!------------------------------------------------------------------------------------------------>                        
        <div class="row">                            
          <div  class="form-group col-md-6">
            <label id="modal_elem" for="inputfacebook">facebook</label>
            <input id="facebook" type="text" class="form-control"  name="facebook"   value="{{$proveedore->facebook}}" >
          </div>
          <div class="form-group col-md-12">
            <label id="modal_elem" for="inputdireccion">Direccion Fiscal</label>
            <input id="direccion" type="text" class="form-control"  name="direccion"   value="{{$proveedore->direccion }}">
          </div>
          <div class="form-group col-md-4">
            <label id="modal_elem" for="inputwasap">Whatsapp</label>
            <input id="wasap" type="text" class="form-control"  name="wasap" value="{{$proveedore->wasap}}">
          </div>
                            
        </div>       
                            
  <!------------------------------------------------------------------------------------------------>                         
        <div class="row ">                    
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputtwitter">Twitter</label>
            <input id="twitter" type="text" class="form-control"  name="twitter"   value="{{$proveedore->twitter }}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputusuario">Usuario</label>
            <input id="usuario" type="text" class="form-control"  name="usuario"   value="{{$proveedore->usuario}}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputcontraseña">Contraseña</label>
            <input id="contraseña" type="text" class="form-control"  name="contraseña"   value="{{$proveedore->contraseña}}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputurl_conex">URL conexion </label>
            <input id="url_conex" type="text" class="form-control"  name="url_conex"   value="{{$proveedore->url_conex}}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputscript_conex">Script conexión </label>
            <input id="script_conex" type="text" class="form-control"  name="script_conex"  value="{{$proveedore->script_conex}}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputusuario_conex">Usuario de la conexion</label>
            <input id="usuario_conex" type="text" class="form-control"  name="usuario_conex"   value="{{$proveedore->usuario_conex }}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputpassword_conex">Password  de la conexion</label>
            <input id="password_conex" type="text" class="form-control"  name="password_conex"  value="{{$proveedore->password_conex}}">
          </div>
      </div>

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('proveedores') }}" >
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

    function modificar_estado_proveedor(id) 
{
 //alert('loco');

 var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x); 

  
}
  </script>
 @endsection