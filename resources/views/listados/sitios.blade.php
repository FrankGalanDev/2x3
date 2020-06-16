@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado Sitios</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Sitios</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title">
                    <strong>Todos los  Sitios
                      <a href="{{ ('sitios/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                         
                          <th>Id</th>
                          <th>Estados</th>
                          
                          <th>Nombre_sitio</th>
                          <th>URL sitio</th>
                          <th>Aplicacion_sitio</th>
                          <th>Hora deseada</th>
                          <th>Cliente</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Eliminar</th> 
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($sitios as $sitio)
                        <?php 
                          $color ="";
                    
                          if  ($ticket->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($ticket->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                         
                          <td>{{ $sitio->id }}</td>
                          <td>{{ $sitio->estado['nombreEstado']}}</td>
                          <td>{{ $sitio->nombreSitio}}</td>
                          <td>{{ $sitio->url_sitio}}</td>
                          <td>{{ $sitio->aplicacion_sitio}}</td>
                          <td>{{ $sitio->hora_deseada}}</td>
                          <td>{{ $sitio->user['name']}}</td>
                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_sitios" onclick = "datos_sitios({{$sitio->id}})" value="{{$sitio->id}}"><i  class="fa fa-fw fa-eye"></i>
                            </button>
                          </td>
                          
                          <td>
                            <a href="{{ url('sitios/'.$sitio->id.'/edit') }}"><button class="btn btn-success btn-xs"  value="{{$sitio->id}}"><i class="fa fa-fw fa-wrench"></i></button>
                            </a>
                          </td>
                          
                          <td> 
                            <form method="POST" action="{{ url('sitios/'.$sitio->id) }}">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button  class="btn btn-danger btn-xs" type="submit"  value="{{$sitio->id}}" >
                              <i class="fa fa-trash"> </i>
                              </button>  
                            </form>
                          </td>

                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            

            </div>
          </div>
        </section>
        <div type="hidden">
          <input type="hidden" id="sitio" name="id" value="{{$sitio->id}}"></input>    
          <input type="hidden" name="_token" value="{{csrf_token()}}"></input>    
          <input id="url" type="hidden" value="{{ \Request::url() }}"></input>
        </div>
    </div>

    <!--------------INICIO MODAL------------------>
        <div class="modal modal-info fade" id="modal_sitios" > <!--modal-->
          <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
            <div class= row><!--INICIO ROW 1-->
              <div class="modal-body col-md-12"><!--modal body-->
                <div class="modal-header col-md-12">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="titulo_mod" class="modal-title">  </h4>
                </div>
<!--INICIO FORMULARIO VER DATOS SITIO--> 
                <div class="modal-content col-md-12"> <!--modal-content-->
                  <div class="col-md-12">
                    <div class="box box-primary col-xs-12">
                      <div class="box-header">
                        <h3 class="box-title">Sitio </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_estado"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('sitios.index',$sitio->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$sitio->id}}" type="hidden" value="{{ $sitio->id }}" name="sitios_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputnombre_sitio">Nombre</label>
                              <input id="nombre_sitio" type="text" class="form-control"  name="nombre_sitio"   value=" " disabled>
                            </div>
                            
                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputeestados_id">Estado</label>
                              <input id="estados_id" type="text" class="form-control"  name="estados_id"   value=" " disabled >
                                 
                                <span id="" class="error" aria-live="polite"></span>
                            </div>

                            <div  class="form-group col-xs-8">
                              <label id="modal_elem" for="inputurl_sitio">URL</label>
                               <input id="url_sitio" type="text" class="form-control"  name="url_sitio"  value=" " disabled>
                            </div>
                          </div>                    
                            <!------------------------------------------------------------------------------------------->
                          <div>
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputaplicacion_sitio">Aplicacion Sitio</label>
                              <input id="aplicacion_sitio" type="text" class="form-control"  name="aplicacion_sitio"   value=" " disabled>
                            </div>
                            
                            <div  class="form-group col-xs-6">
                              <label id="modal_elem" for="inputip_FTP">ip_FTP</label>
                              <input id="ip_FTP" type="text" class="form-control"  name="ip_FTP"   value="{{$sitio->ip_FTP}}" disabled >
                                
                            </div>

                            
                          </div>       
                            <!------------------------------------------------------------------------------------------------>
                           
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputuser_FTP">User FTP</label>
                              <input id="user_FTP" type="text" class="form-control"  name="user_FTP"   value=" " disabled>
                            </div>
     
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputpassFTP">Pass FTP </label>
                              <input id="pass_FTP" type="text" class="form-control" name="pass_FTP"   value=" " disabled>
                            </div>
                            
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputtwitter">Nombre Base Datos</label>
                              <input id="nombre_bd" type="text" class="form-control"  name="nombre_bd"   value=" " disabled>
                            </div>
   
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputusuario_bd">Usuario BD </label>
                              <input id="usuario_bd" type="text" class="form-control" name="usuario_bd"   value=" " disabled>
                            </div>
    
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputpass_bd">Password bd</label>
                              <input id="pass_bd" type="text" class="form-control"  name="pass_bd"   value=" " disabled>
                            </div>
   
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputport_conex">Puerto </label>
                              <input id="port_conex" type="text" class="form-control" name="port_conex"   value="" disabled>
                            </div>
                            
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputhost_conex">Host </label>
                              <input id="host_conex" type="text" class="form-control" name="host_conex"   value="" disabled>
                            </div>
    
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputsocket">Socket</label>
                              <input id="socket_conex" type="text" class="form-control" name="socket_conex"   value="" disabled>
                            </div>
   
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputhora_deseada">Hora deseada</label>
                              <input id="hora_deseada" type="text" class="form-control"  name="hora_deseada"   value="" disabled>
                            </div>




                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO SITIO--> 

                    </div ><!--  FINAL BOX PRIMARY-->
                  </div> <!--COLUMNA-->
   
                </div><!-- /.modal-content -->
<!--FINAL FORMULARIO VER DATOS SITIO-->        
               
                
        </div><!-- /.modal-body -->  
       
    </div> <!-- /.modal-dialog -->  
          
</div> 
<!--------------FINAL MODAL------------------>
    
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
     function datos_sitios(id) {
     // alert('loco'); 


      var url = $('#url').val();
    // alert(url);
      var seleccionado = id;
     // alert(seleccionado);
      
                           
      if (seleccionado)
            {    
                
            //  var data = $.get(url+'/'+seleccionado);
            //   console.log (data);
              // console.log (data[estado.nombreEstado])
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {

                 
                      //  $("#titulo_mod").text('MODIFICAR CHOFER'); 
                      //  $("#input_id_form").val('form_subir_imagen');       
                        $("#id").val(data.id);
                      $("#estados_id").val(data.estado.nombreEstado);
                      //  $("#estados_id").val(data.estados_id);
                        $("#nombre_sitio").val(data.nombre_sitio);
                        $("#url_sitio").val(data.url_sitio);
                        $("#aplicacion_sitio").val(data.aplicacion_sitio);
                        $("#ip_FTP").val(data.ip_FTP);
                        $("#user_FTP").val(data.user_FTP);         
                        $("#pass_FTP").val(data.pass_FTP);                                               
                        $("#nombre_bd").val(data.nombre_bd);
                        $("#usuario_bd").val(data.usuario_bd);
                        $("#pass_bd").val(data.pass_bd);
                        $("#port_conex").val(data.port_conex);
                        $("#host_conex").val(data.host_conex);
                        $("#socket_conex").val(data.socket_conex);
                        $("#hora_deseada").val(data.hora_deseada);
          
      
                    });
                  };
             };     
   


       
  </script>  


@endsection

 