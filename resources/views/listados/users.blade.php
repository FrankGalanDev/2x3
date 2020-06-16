@extends('layouts.escritorio_base')

@section('content')
<div>


      
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Usuarios</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title">
                    <strong>Listado usuarios
                      <a href="{{ ('users/create') }}" class="text-success font-weight-light">
                        <i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>ID</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Estado</th>
                          <th>Rol</th>
                          <th>Wasap</th>
                          <th>Administrador</th>
                         
                          <th>Modificar</th>
                          <th>Eliminar</th>
                           

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <?php 
                          $color ="";
                    
                          if  ($user->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($user->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                          
                          <td>{{ $user->id}}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->estado->nombreEstado }}</td>
                          <td>{{ $user->roles }}</td>
                          <td>{{ $user->whatsapp }}</td>
                          <td>  <?php 
                          $color ="";
                    
                          if  ($user->administrador ==0)
                            { 
                              echo ('No');
                            } 
                         else 
                            { echo('Si');
                            }   
                        ?>  </td>
                           
                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_usuario" onclick = "datos_usuario({{$user->id }})" value="{{$user->id}}">
                              <i  class="fa fa-fw fa-eye"></i>
                            </button>
                          </td>
                          <td>
                            <a href="{{ asset('users/'.$user->id.'/edit')}}">
                              <button class="btn btn-success btn-xs"  value="{{$user->id}}">
                                <i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>
                          <td>
                            <button  class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-info"  value="{{$user->id}}">
                              <i class="fa fa-trash"> </i>
                            </button>
                          </td>

                        </tr>
                        @endforeach
                       {{ $users->links() }}
                      </tbody>
                    </table>
                    {{ $users->links() }}
                  </div>
                </div>
              </div>

            

            </div>
          </div>
        </section>
        <div type="hidden">
         
          <input type="hidden" name="_token" value="{{csrf_token()}}"></input>    
          <input id="url" type="hidden" value="{{ \Request::url() }}"></input>
        </div>
    </div>


    <!--------------INICIO MODAL------------------>
        <div class="modal modal-info fade" id="modal_usuario" > <!--modal-->
          <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
            <div class= row><!--INICIO ROW 1-->
              <div class="modal-body col-md-12"><!--modal body-->
                <div class="modal-header col-md-12">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="titulo_mod" class="modal-title">  </h4>
                </div>
<!--INICIO FORMULARIO VER DATOS CLIENTE--> 
                <div class="modal-content col-md-12"> <!--modal-content-->
                  <div class="col-md-12">
                    <div class="box box-primary col-xs-12">
                      <div class="box-header">
                        <h3 class="box-title">Ver Datos Usuario </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_usuario"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('users.index',$user->id)}}"  enctype="multipart/form-data" style="width:100%;"  >  
                            {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
                           
                            {{csrf_field()}}
                        
                             

                        <div class="col-md-12">
                           <input id="{{$user->id}}" type="hidden" value="{{ $user->id }} " name="user_id "> 
                          <!--INICIO BOX BODY-->

                           <div class ="row">

                            <div class="form-group col-xs-6 p-2" style="width:200px; height:200px;" >
                               
                                <input name="avatar" id="avatar"  src= "{{asset('assets/usuarios/avatars/'.$user->avatar) }}" style="width:200px; height:200px; border: 2px dotted white" > 
                            </div>
                          
                          <!------------------> 
  
                            <div  class="form-group col-xs-5 m-2">
                              <label id="modal_elem" for="inputpin_soporte">Pin soporte</label>
                               <input id="pin_soporte" type="text" class="form-control"  name="pin_soporte" value="" disabled>
                            </div>

                          </div> 

                          <div class ="row">

                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputestado">Estado</label>
                               <input id="estado" type="text" class="form-control" style="font-size:0.9rem;" name="estado" value="" disabled>
                            </div>                

                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputclasificacion">Clasificacion</label>
                              <input id="clasificacion" type="text" class="form-control" style="font-size:1rem;" name="clasificacion"   value="" disabled>
                            </div> 


                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputroles">Rol</label>
                              <input id="rol" type="text" class="form-control" style="font-size:1rem;" name="rol"   value="" disabled>
                            </div>

                            <div  class="form-group col-md-3">
                              <label id="modal_elem" for="inputadministrador">Administrador</label>
                              <input id="administrador" type="text" class="form-control"  name="administrador"   value="" disabled >
                            </div>
 
                          </div>
  <!------------------------------------------------------------------------------------------>
                          <div class ="row">
                            
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputnombre">Nombre</label>
                              <input id="name" type="text" class="form-control"  name="nombre"   value=" " disabled>
                            </div>
                            
                            <div  class="form-group col-xs-6">
                              <label id="modal_elem" for="inputapellidos">Apellidos</label>
                              <input id="apellidos" type="text" class="form-control"  name="apellidos"   value=" " disabled >
                            </div>

                          </div> 
  <!------------------------------------------------------------------------------------------>
                          <div>
                            
                            
                            <div  class="form-group col-xs-10">
                              <label id="modal_elem" for="inputemail">E mail</label>
                              <input id="email" type="text" class="form-control"  name="email"   value=" " disabled >
                                <span id="" class="error" aria-live="polite"></span>
                            </div>

                            
                          </div>                    
  <!------------------------------------------------------------------------------------------->
                          <div class ="row">
                            
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputcontacto">Empresa</label>
                              <input id="empresa" type="text" class="form-control"  name="empresa"   value="" disabled>
                            </div>
       
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputcontacto">Identificacion Fiscal</label>
                              <input id="identificacion_fiscal" type="text" class="form-control"  name="identificacion_fiscal"   value="" disabled>
                            </div>
                            
                            
                          </div>      
  <!------------------------------------------------------------------------------------------>
                          <div  class="row">
                            
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputtelefono">Telefono</label>
                              <input id="telefono" type="text" class="form-control"  name="telefono"   value="" disabled>
                            </div>
                            
                            <div  class="form-group col-md-6">
                              <label id="modal_elem" for="inputwhatsapp">Whatsapp</label>
                              <input id="whatsapp" type="text" class="form-control"  name="whatsapp"   value="" disabled >
                            </div>
                            
                          </div>
  <!------------------------------------------------------------------------------------------->
                          <div>
                            <div class="form-group col-md-12">
                              <label id="modal_elem" for="inputnotas">Notas</label>
                              <textarea  id="notas" type="text" class="form-control"  name="notas"   value="" disabled>
                                
                              </textarea>
                            </div>
                            
                            
                          </div> 

                        </div>    <!--/ FINAL BOX BODY-->  
               
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO CAMBIO DATOS PERSONALES--> 

                    </div ><!--  FINAL BOX PRIMARY-->
                  </div> <!--COLUMNA-->
   
                </div><!-- /.modal-content -->
<!--FINAL FORMULARIO VER DATOS CLIENTE-->        
               
                
        </div><!-- /.modal-body -->  
       
    </div> <!-- /.modal-dialog -->  
          
</div> 
<!--------------INICIO MODAL------------------>
    
            </div>
          </div>
        </div>
      </div>
    </div>

  <script>

    
    function datos_usuario(id) 
    {
  //   alert('loco'); 
      var url = $('#url').val();
      //alert(url);
      var seleccionado = id;
    //  alert(seleccionado);

      if (seleccionado)
        {    
     //  var data = $.get(url+'/'+seleccionado);
       //  console.log (data.sitio);

          var data = $.get(url+'/'+seleccionado, function (data) 
            {

                 
                      //  $("#titulo_mod").text('MODIFICAR CHOFER'); 
                      //  $("#input_id_form").val('form_subir_imagen');
                        $("#avatar").val(data.avatar);           
                       
                        $("#estado").val(data.estado.nombreEstado);
                        $("#clasificacion").val(data.clasificacion);
                        $("#rol").val(data.roles);

                        $("#pin_soporte").val(data.pin_soporte);
                        if (data.administrador ==1)
                          {
                           $("#administrador").val('Si');
                          }
                        else {$("#administrador").val('No')}
                        

                        $("#name").val(data.name);
                        $("#apellidos").val(data.apellidos);
                        $("#empresa").val(data.empresa);
                                             
                        $("#identificacion_fiscal").val(data.identificacion_fiscal);
                        $("#email").val(data.email);
                        
                       
                        
                        $("#whatsapp").val(data.whatsapp);
                        $("#telefono").val(data.telefono);                       
         
                        $("#notas").val(data.notas);
          
      /*                  $("#identificacion_fiscal").val(data.identificacion_fiscal);
                        
                        $("#btn-cancelar").val("cancel"); 
          
                        $("#modal-info").modal('show'); */
            });
        };
    }    

</script>

@endsection


   
