@extends('layouts.escritorio_base')

@section('content')

<!--------------------INICIO FORMULARIO EDITAR USUARIO------------------->

  <div class="container">

    <form  id="editar_usuario" name="editar_usuario" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('/users/'.$user->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
    <input id="{{$user->id}}" type="hidden" value="{{ $user->id }}" name="users_id">  


   
<!-- Form Name -->
      <legend><center><h2><b>Editar Usuario</b></h2></center></legend><br>

  <!-- --------------------------LINEA FOTOS--------------------------------------->
      <div class="row"> 

        <div class="form-group col-xs-6" >
          <label style="font-size:18px;">Agregar Imagen </label>

            <input name="foto" id="foto" type="file" accept="image/*" class="form-control"  style="font-size: 14px;" onchange="vistaPrevia()" required/><br /><br /> 
            <?php if($user->avatar==""){ $user->avatar="img/avatar-8.jpg"; } 
                                           ?> 
              <div class="form-group col-xs-8"  style="width:200px;height:200px; margin:12px; background-color:lightgray; border:2px #000 dotted;">
                <img src=""  alt="Foto del  usuario" class="avatar"  id="avatar" style="width:160px; height:160px; margin:10px; padding:2px; background-size:100%; background-repeat: no-repeat; text-align: center;">
              </div>
        </div>
        <div  class="form-group col-md-5">
          <label id="modal_elem" for="inputpin_soporte"> Pin Soporte</label>
          <input id="pin_soporte" type="text" class="form-control"  name="pin_soporte"   value="{{ $user->pin_soporte }}" >
        </div>
      
      </div>
  
  <!-- --------------------------LINEA ESTADO--------------------------------------->

      <div class="row"> 
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <input id ="estado_previo" class="form-control" name= "estado_previo" type="hidden" value="{{ $user->estados_id }}" >
              <select  class="form-control"  id="estados_" onchange="asignar_estado_usuario(this)"  style="width: 100%;">
                @foreach($estado as $esta)
                            
                  <option value="{{$esta->id}}" >
                    {{$esta->nombreEstado}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="estados_id" name="estados_id" value="{{ $esta->id}}" > 
        </div>
        <div class="col-md-2">
          <label>Administrador</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="administrador_"  name= "administrador_" onchange="cambiar_administrador(this)"  style="width: 100%;">
                          
                  <option value="0" >
                    No
                  </option>

                  <option value="1" >
                   Si
                  </option>
                           
                
              </select> 
            </div> 
             <input type="hidden"  id="administrador" name="administrador" value="{{ $user->administrador }}" > 
        </div>
        
      </div>

 <!-- --------------------------LINEA NOMBRE--------------------------------------->

      <div class="row"> 

        <div  class="form-group col-md-6">
          <label id="modal_elem" for="inputname">Nombre</label>
          <input id="name" type="text" class="form-control"  name="name"   value="{{ $user->name }}" >
        </div>
 
        <div  class="form-group col-md-6">
          <label id="modal_elem" for="inputapellidos">Apellidos</label>
          <input id="apellidos" type="text" class="form-control"  name="apellidos"   value="{{ $user->apellidos}}">
        </div>
      
      </div>

  <!-- --------------------------LINEA ROL--------------------------------------->

      <div class="row"> 

        <div class="col-md-4">
          <label>Rol</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
               
              <select  class="form-control"  id="roles_" onchange="asignar_rol_usuario(this)"  style="width: 100%;">
                @foreach($role as $rol)
                            
                  <option value="{{$rol->id}}" >
                    {{$rol->nombreRol}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="roles_id" name="roles_id" value="{{ $esta->id}}" > 
        </div>
        <div  class="form-group col-md-6">
          <label id="modal_elem" for="inputempresa"> Empresa</label>
          <input id="empresa" type="text" class="form-control"  name="empresa"   value="{{ $user->empresa}}">
        </div>

      </div>

  <!-- --------------------------LINEA INDENT FISCAL--------------------------------------->

      <div class="row"> 

        <div  class="form-group col-md-6">
          <label id="modal_elem" for="inputidentificacion_fiscal"> Identificacion Fiscal</label>
          <input id="identificacion_fiscal" type="text" class="form-control"  name="identificacion_fiscal"   value="{{ $user->identificacion_fiscal}}">
        </div>

        <div  class="form-group col-md-6">
          <label id="modal_elem" for="inputclasificacion"> Clasificacion</label>
          <input id="clasificacion" type="text" class="form-control"  name="clasificacion"   value="{{ $user->clasificacion}}">
        </div>

      </div>
  
  <!-- --------------------------LINEA TELEFONO--------------------------------------->

      <div class="row"> 

        <div  class="form-group col-md-6">
          <label id="modal_elem" for="inputtelefono"> Telefono</label>
          <input id="telefono" type="text" class="form-control"  name="telefono"   value="{{ $user->telefono}}">
        </div>

        <div  class="form-group col-md-6">
          <label id="modal_elem" for="inputwhatsapp"> Whatsapp</label>
          <input id="whatsapp" type="text" class="form-control"  name="whatsapp"   value="{{ $user->whatsapp}}">
        </div>

      </div>

  <!-- --------------------------LINEA NOTAS--------------------------------------->

      <div class="row"> 
        
        <div  class="form-group col-md-12">
          <label id="modal_elem" for="inputnotas"> Notas</label>
          <textarea  id="notas" type="text" class="form-control"  name="notas"   value="{{ $user->notas}}">
            {{ $user->notas}}
            
          </textarea>
        </div>

      </div>
  
     

<!--------------------------------INICIO FOOTER ---------------------------------------->

      <div class="modal-footer edit">   
        <a href="{{ url('users') }}" >
          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i  class="fa fa-window-close"></i>
            Cerrar
          </button>
        </a>

        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value="Modificar">  
        </input> 
        
      </div> 

    </form>

  </div>
    

 <script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
<script>

   $(document).ready(function()
      {
          
        var estado_seleccionado = $("#estado_previo").val(); 
      //  alert(seleccionado);
      //  console.log (seleccionado);
        $("#estados_ option:selected").val(estado_seleccionado);

     
      });

 
  function asignar_estado_usuario(id) 
    {
    //  alert('loco');
      var k = id.options[id.selectedIndex].value;
      $("#estados_id").val(k); 
    }


  function asignar_rol_usuario(id) 
    {
    //  alert('loco');
    var y = id.options[id.selectedIndex].value;
    $("#roles_id").val(y);
    }

  function cambiar_administrador(id)
    {
      var z = id.options[id.selectedIndex].value;
    $("#administrador").val(z);

    }

function vistaPrevia() 
{

  var vista = document.querySelector('img.avatar');
  var archivo = document.querySelector('input[type=file]').files[0];
  var reader = new FileReader();

  reader.addEventListener("load", function () 
    {
      vista.src = reader.result;
       // alert(vista.src);
    }, false); 

  if (archivo)
    {
      reader.readAsDataURL(archivo);
    //   $("#fotografia_chofer").attr( "C:\\fakepath\\"+ archivo.name);
     vista.src = reader.result;


   //   alert(reader.result);
    }

}




</script>




@endsection

    