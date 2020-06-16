@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="editar_sitio" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('/sitios/'.$sitio->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
      <input id="{{$sitio->id}}" type="hidden" value="{{ $sitio->id }}" name="sitios_id">  
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombre_sitio">Nombre</label>
          <input id="nombre_sitio" type="text" class="form-control"  name="nombre_sitio"   value="{{$sitio->nombre_sitio }}">
        </div>
                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_"   onchange="modificar_estado_sitio(this)"  style="width: 100%;">
                
                 <option value="{{$sitio->estados_id}}" selected disabled>{{$sitio->estado['nombreEstado']}} </option>
                @foreach($estado as $esta)
                            
                  <option value="{{$esta['id']}}" >
                    {{$esta['nombreEstado']}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
            <input type="hidden"  id="estados_id" name="estados_id" value={{$sitio->estados_id}}>
        </div>

      </div>  
  <!------------------------------------------------------------------------------------------->      
      <div class="row">
        <div  class="form-group col-md-8">
            <label id="modal_elem" for="inputurl_sitio">URL</label>
            <input id="url_sitio" type="text" class="form-control"  name="url_sitio"  value="{{$sitio->url_sitio }}">
        </div>
        <div class="form-group col-md-4">
            <label id="modal_elem" for="inputaplicacion_sitio">Aplicacion Sitio</label>
            <input id="aplicacion_sitio" type="text" class="form-control"  name="aplicacion_sitio"   value="{{$sitio->aplicacion_sitio }}">
        </div>

      </div>                    
                           
  <!------------------------------------------------------------------------------------------------>                        
        <div class="row">                            
          <div  class="form-group col-md-4">
            <label id="modal_elem" for="inputip_FTP">ip_FTP</label>
            <input id="ip_FTP" type="text" class="form-control"  name="ip_FTP"   value="{{$sitio->ip_FTP}}" >
          </div>
          <div class="form-group col-md-4">
            <label id="modal_elem" for="inputuser_FTP">User FTP</label>
            <input id="user_FTP" type="text" class="form-control"  name="user_FTP"   value="{{$sitio->user_FTP }}">
          </div>
          <div class="form-group col-md-4">
            <label id="modal_elem" for="inputpassFTP">Pass FTP</label>
            <input id="pass_FTP" type="text" class="form-control"  name="pass_FTP" value="{{$sitio->pass_FTP}}">
          </div>
                            
        </div>       
                            
  <!------------------------------------------------------------------------------------------------>                         
        <div class="row ">                    
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputtwitter">Nombre Base Datos</label>
            <input id="nombre_bd" type="text" class="form-control"  name="nombre_bd"   value="{{$sitio->nombre_bd }}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputusuario_bd">Usuario BD </label>
            <input id="usuario_bd" type="text" class="form-control"  name="usuario_bd"   value="{{$sitio->usuario_bd}}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputpass_bd">Password bd</label>
            <input id="pass_bd" type="text" class="form-control"  name="pass_bd"   value="{{$sitio->pass_bd }}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputport_conex">Puerto </label>
            <input id="port_conex" type="text" class="form-control"  name="port_conex"   value="{{$sitio->port_conex}}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputhost_conex">Host </label>
            <input id="host_conex" type="text" class="form-control"  name="host_conex"   value="{{$sitio->host_conex}}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputsocket">Socket</label>
            <input id="socket_conex" type="text" class="form-control"  name="socket_conex"   value="{{$sitio->socket_conex }}">
          </div>
          <div class="form-group col-md-5">
            <label id="modal_elem" for="inputhora_deseada">Hora deseada</label>
            <input id="hora_deseada" type="text" class="form-control"  name="hora_deseada"   value="{{$sitio->hora_deseada}}">
          </div>
      </div>

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('sitios') }}" >
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

    function modificar_estado_sitio(id) 
{
 //alert('loco');

 var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x); 

  
}
  </script>
 @endsection