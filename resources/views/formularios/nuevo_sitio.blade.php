@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('sitios')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
         
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombreSitio">Nombre</label>
          <input id="nombreSitio" type="text" class="form-control"  name="nombreSitio"  value="" placeholder="Nombre del sitio">
        </div>

                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="asignar_estado_sitio(this)"  style="width: 100%;">
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
          <label>Cliente</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="clientes_" onchange="asignar_cliente_sitio(this)"  style="width: 100%;">
                @foreach($clientes as $cliente)
                            
                  <option value="{{$cliente->id}}" >
                    {{$cliente->name}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="users_id" name="users_id" value="{{$cliente->id}}" > 
        </div>

      </div>  
  <!------------------------------------------------------------------------------------------->      
      <div class="row">
        <div  class="form-group col-md-8">
            <label id="modal_elem" for="inputurl_sitio">URL</label>
            <input id="url_sitio" type="text" class="form-control"  name="url_sitio"  value="" placeholder="URL">
        </div>
        <div class="form-group col-md-4">
            <label id="modal_elem" for="inputaplicacion_sitio">Aplicacion Sitio</label>
            <input id="aplicacion_sitio" type="text" class="form-control"  name="aplicacion_sitio"   value="" placeholder="Aplicacion">
        </div>

      </div>                    
                           
  <!------------------------------------------------------------------------------------------------>                        
        <div class="row">                            
          <div  class="form-group col-md-4">
            <label id="modal_elem" for="inputip_FTP">ip_FTP</label>
            <input id="ip_FTP" type="text" class="form-control"  name="ip_FTP"   value="" placeholder="Número Ip para FTP" >
          </div>
          <div class="form-group col-md-4">
            <label id="modal_elem" for="inputuser_FTP">User FTP</label>
            <input id="user_FTP" type="text" class="form-control"  name="user_FTP"   value="" placeholder="Usuario FTP">
          </div>
          <div class="form-group col-md-4">
            <label id="modal_elem" for="inputpassFTP">Pass FTP</label>
            <input id="pass_FTP" type="text" class="form-control"  name="pass_FTP" value="" placeholder="Contraseña FTP">
          </div>
                            
        </div>       
                            
  <!------------------------------------------------------------------------------------------------>                         
        <div class="row ">                    
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputtwitter">Nombre Base Datos</label>
            <input id="nombre_bd" type="text" class="form-control"  name="nombre_bd"  value="" placeholder="Nombre de la Base de datos">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputusuario_bd">Usuario BD </label>
            <input id="usuario_bd" type="text" class="form-control"  name="usuario_bd"   value="" placeholder="Usuario de la base de datos">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputpass_bd">Password bd</label>
            <input id="pass_bd" type="text" class="form-control"  name="pass_bd"   value="" placeholder="Contraseña de la base de datos">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputport_conex">Puerto </label>
            <input id="port_conex" type="text" class="form-control"  name="port_conex"   value="" placeholder="Puerto Conexion">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputhost_conex">Host </label>
            <input id="host_conex" type="text" class="form-control"  name="host_conex"   value="" placeholder=" Host">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputsocket">Socket</label>
            <input id="socket_conex" type="text" class="form-control"  name="socket_conex"   value="" placeholder="Socket">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputhora_deseada">Hora deseada</label>
            <input id="hora_deseada" type="text" class="form-control"  name="hora_deseada"   value="" placeholder="00:00:00">
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

    function asignar_estado_sitio(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x);

  
}

   function asignar_cliente_sitio(id) 
{
//  alert('loco');
var x = id.options[id.selectedIndex].value;
$("#users_id").val(x);

  
}
  </script>
 @endsection