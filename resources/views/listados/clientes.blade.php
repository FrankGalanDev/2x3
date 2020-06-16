@extends('layouts.escritorio_base')

@section('content')
<div>
       

      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <div class =row>
              <h2 class=" col-4 h5 no-margin-bottom">Listado clientes</h2>
              
            </div>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Clientes</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Listado clientes</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                           
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Apellidos</th>
                          <th>Telefono</th>
                          <th>E-mail</th>
                          <th>Empresa</th>                   
                          <th>whatsapp</th>
                          <th>Estado</th>
                          <th>Ver</th>
                          

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <?php 
                          $color ="";
                    
                          if  ( $user->estado->nombreEstado  =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($user->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                           
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->apellidos }}</td>
                          <td>{{ $user->telefono }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->empresa }}</td>
                          <td>{{ $user->whatsapp }}</td>
                          <td>{{ $user->estado->nombreEstado}}</td>
                           
                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ver_cliente" onclick="datos_cliente({{ $user->id }})" value="{{$user->id}}"><i  class="fa fa-fw fa-eye"></i> </button></td>
                          
                          

                        </tr>
                        @endforeach
                       {{ $users->links() }}
                      </tbody>
                    </table>
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
      
<!--------------INICIO MODAL---------------------------->
        <div class="modal modal-info fade" id="ver_cliente" > <!--modal-->
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
                        <h3 class="box-title">Ver Datos Cliente </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_Cliente"  class="form-horizontal"  enctype = "multipart/form-data" action="{{url('clientes',$user->id)}}"   enctype="multipart/form-data" style="width:100%;" >{{method_field('GET') }}
                             <!--INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                       <input id="{{$user->id}} " type="hidden" value="  " name="cliente_id ">  
                             

                        <div class="col-md-12"><!--INICIO BOX BODY-->
                           <!------------------------------------------------------------------------------------------>
                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputempresa">Empresa</label>
                              <input id="empresa" type="text" class="form-control"  name="empresa"   value=" "disabled readonly="">
                            </div>
                            
                            <div  class="form-group col-xs-8">
                              <label id="modal_elem" for="inputemail">E mail</label>
                              <input id="email" type="text" class="form-control"  name="email"   value="  " disabled  readonly="">
                                <span id="" class="error" aria-live="polite"></span>
                            </div>

                            <div  class="form-group col-xs-6">
                              <label id="modal_elem" for="inputestado">Estado</label>
                               <input id="estado" type="text" class="form-control"  name="Estado"  value=" " disabled  readonly="">
                            </div>
                          </div>                    
                            <!------------------------------------------------------------------------------------------->
                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputempresa">Rol</label>
                              <input id="rol" type="text" class="form-control"  name="rol"   value= "" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-8">
                              <label id="modal_elem" for="inputidentificacion_fiscal">Identificacion Fiscal</label>
                              <input id="identificacion_fiscal" type="text" class="form-control"  name="identificacion_fiscal"   value=" "disabled >
                                
                            </div>

                            
                          </div>       
                            <!------------------------------------------------------------------------------------------------>
                          <div>
                            <div class="form-group col-md-12">
                              <label id="modal_elem" for="inputcontacto">Contacto</label>
                              <input id="contacto" type="text" class="form-control"  name="contacto"   value="" disabled>
                            </div>
                            
                            
                          </div>        
                            <!-------------------------------------------------------------------------->
                          <div>
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputtelefono">Telefono</label>
                              <input id="telefono" type="text" class="form-control"  name="telefono"   value="" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-8">
                              <label id="modal_elem" for="inputwhatsapp">Whatsapp</label>
                              <input id="whatsapp" type="text" class="form-control"  name="email"   value="" disabled>
                                
                            </div>
                            
                          </div>

                          <div>
                            <div class="form-group col-md-12">
                              <label id="modal_elem" for="inputnotas">Notas</label>
                              <input id="notas" type="text" class="form-control"  name="notas"  value="" disabled> 
                                
                               
                            </div>
                            
                            
                          </div> 

                        </div>    <!--/ FINAL BOX BODY-->  
               
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left  cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
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
    
    function datos_cliente(id) {
    //  alert('loco'); 


      var url = $("#url").val();;
  //    alert(url);
      var seleccionado = id;
 //    alert(seleccionado);

      if (seleccionado)
            {    
                
            var data = $.get(url+'/'+seleccionado);
           console.log (data);
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {

                 
                      //  $("#titulo_mod").text('MODIFICAR CHOFER'); 
                      //  $("#input_id_form").val('form_subir_imagen');       
                        $("#cliente_id").val(data.id);
                        $("#rol").val(data.role.nombreRol);
                        $("#identificacion_fiscal").val(data.identificacion_fiscal);
                        $("#empresa").val(data.empresa);
                        $("#contacto").val(data.contacto);
                        $("#tipo_de_empleado").val(data.tipo_de_empleado);
                        $("#whatsapp").val(data.whatsapp);
                        
                        $("#estado").val(data.estado.nombreEstado);                                                 
                        $("#email").val(data.email);
                        $("#telefono").val(data.telefono);
                        $("#notas").val(data.notas);
          
      /*                  $("#identificacion_fiscal").val(data.identificacion_fiscal);
                        
                        $("#btn-cancelar").val("cancel"); 
          
                        $("#modal-info").modal('show'); */
                    });
                  };
             };     
</script>



@endsection