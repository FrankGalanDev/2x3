@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('proveedores')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
         
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombreProveedor">Nombre del proveedor</label>
          <input id="nombreProveedor" type="text" class="form-control"  name="nombreProveedor"  value="" placeholder="Nombre del proveedor">
        </div>
                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="asignar_estado_proveedor(this)"  style="width: 100%;">
                @foreach($estados as $esta)
                            
                  <option value="{{$esta->id}}" >
                    {{$esta->nombreEstado}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="estados_id" name="estados_id" value="{{ $esta->id}}" > 
        </div>

      </div>  
  <!------------------------------------------------------------------------------------------->      
      <div class="row">
        <div  class="form-group col-md-8">
            <label id="modal_elem" for="inputurl_proveed">URL del proveedor</label>
            <input id="url_proveed" type="text" class="form-control" name="url_proveed"  value="" placeholder=" Introduzca la URL oficial">
        </div>
        <div class="form-group col-md-4">
            <label id="modal_elem" for="inputtelefono">Telefono</label>
            <input id="telefono" type="text" class="form-control"  name="telefono"  value="" placeholder="Escriba el teléfono">
        </div>

      </div>                    
                           
  <!------------------------------------------------------------------------------------------------>                        
        <div class="row">                            
          <div  class="form-group col-md-4">
            <label id="modal_elem" for="inputfacebook">Facebook</label>
            <input id="facebook" type="text" class="form-control"  name="facebook"   value="" placeholder="Escriba la Id de Facebook" >
          </div>
          <div class="form-group col-md-4">
            <label id="modal_elem" for="inputdireccion">Direccion</label>
            <input id="direccion" type="text" class="form-control"  name="direccion"   value="" placeholder="Escriba la direccion del proveedor">
          </div>
          <div class="form-group col-md-4">
            <label id="modal_elem" for="inputwasap">Whatsapp</label>
            <input id="wasap" type="text" class="form-control"  name="wasap" value="" placeholder="Introduzca numero de Whatsapp">
          </div>
                            
        </div>       
                            
  <!------------------------------------------------------------------------------------------------>                         
        <div class="row ">                    
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputtwitter">Twitter</label>
            <input id="twitter" type="text" class="form-control"  name="twitter"  value="" placeholder="Introduzca la Id de Twitter">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputusuario">Usuario </label>
            <input id="usuario" type="text" class="form-control"  name="usuario"   value="" placeholder="Introduzca su nombre de Usuario">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputcontraseña">Contraseña</label>
            <input id="contraseña" type="text" class="form-control"  name="contraseña"   value="" placeholder="Contraseña de la base de datos">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputurl_conex">URL de la conexion</label>
            <input id="url_conex" type="text" class="form-control"  name="url_conex"   value="" placeholder="Introduzca la URL de la conexion">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputscript_conex">Script Conexion</label>
            <input id="script_conex" type="text" class="form-control"  name="script_conex"   value="" placeholder=" Escriba el script de la conexion">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputusuario_conex">Usuario Conexion</label>
            <input id="usuario_conex" type="text" class="form-control"  name="usuario_conex"   value="" placeholder="Esriba el usuario de la conexion">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputpassword_conex">Password  de la Conexion</label>
            <input id="password_conex" type="text" class="form-control"  name="password_conex"   value="" placeholder="Introduzca la contraseña de la conexion">
          </div>
      </div>

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('sitios') }}" >
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

    function asignar_estado_proveedor(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x);

  
}
  </script>
 @endsection