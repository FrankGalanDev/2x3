@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado exportaciones</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Exportaciones</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row"> 
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Todas las exportaciones</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                         
                          <th>Id</th>
                          <th>Usuarios</th>
                          <th>Estados</th>
                          <th>Proveedores</th>
                          <th>Nombre_archivo</th>
                          <th>Tipo_archivo</th>
                          <th>Url_archivo</th>
                          <th>Tamaño</th>
                          <th>Hora_deseada</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Eliminar</th> 
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($exportaciones as $exportacione)
                        <?php 
                          $color ="";
                    
                          if  ($exportacione->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($exportacione->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >

                         
                          <td>{{$exportacione->id}}</td>
                          <td>{{$exportacione->users_id}}</td>
                          <td>{{$exportacione->estado->nombreEstado}}</td>
                          <td>{{$exportacione->proveedore->nombreProveedor}}</td>
                          <td>{{$exportacione->nombre_archivo}}</td>
                          <td>{{$exportacione->tipo_archivo}}</td>
                          <td>{{$exportacione->url_archivo}}</td>
                          <td>{{$exportacione->tamaño}}</td>
                          <td>{{$exportacione->hora_deseada}}</td>
                          <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_exportaciones" onclick = "datos_exportaciones({{ $exportacione->id }})" value="{{$exportacione->id}}"><i  class="fa fa-fw fa-eye"></i> </button></td>
                          <td><a href="{{ asset('exportaciones.edit') }}"><button class="btn btn-success btn-xs"  value="{{$exportacione->id}}"><i class="fa fa-fw fa-wrench"></i></button></a></td>
                          <td><button  class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-info"  value="{{$exportacione->id}}"><i class="fa fa-trash"> </i></button></td>
                        </tr>
                        @endforeach
                       {{ $exportaciones->links() }}
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
    

    <!--------------INICIO MODAL------------------>
        <div class="modal modal-info fade" id="modal_exportaciones" > <!--modal-->
          <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
            <div class= row><!--INICIO ROW 1-->
              <div class="modal-body col-md-12"><!--modal body-->
                <div class="modal-header col-md-12">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="titulo_mod" class="modal-title">  </h4>
                </div>
<!--INICIO FORMULARIO VER DATOS EXPORTACIONES--> 
                <div class="modal-content col-md-12"> <!--modal-content-->
                  <div class="col-md-12">
                    <div class="box box-primary col-xs-12">
                      <div class="box-header">
                        <h3 class="box-title">Exportaciones </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_estado"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('exportaciones.index',$exportacione->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$exportacione->id}}" type="hidden" value="{{ $exportacione->id }}" name="exportaciones_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputempresa">Usuario</label>
                              <input id="user_id" type="text" class="form-control"  name="user_id"   value="{{$exportacione->users_id }}" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputeestados_id">Estado</label>
                              <input id="estados_id" type="text" class="form-control"  name="estados_id"   value="{{$exportacione->estado->nombreEstado  }}" disabled >
                                <span id="" class="error" aria-live="polite"></span>
                            </div>

                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputestado">Proveedores</label>
                               <input id="proveedores" type="text" class="form-control"  name="proveedores"  value="{{$exportacione->proveedore->nombreProveedor }}" disabled>
                            </div>
                          </div>                    
                            <!------------------------------------------------------------------------------------------->
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputnombresitio">Sitio</label>
                              <input id="nombreSitio" type="text" class="form-control"  name="nombreSitio"   value="{{$exportacione->sitios->nombreSitio }}" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-8">
                              <label id="modal_elem" for="inputidentificacion_fiscal"> Archivo</label>
                              <input id="nombre_archivo" type="text" class="form-control"  name="nombre_archivo"   value="{{$exportacione->nombre_archivo}}" disabled >
                                
                            </div>

                            
                          </div>       
                            <!------------------------------------------------------------------------------------------------>
                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputcontacto">Tipo</label>
                              <input id="tipo_archivo" type="text" class="form-control"  name="tipo_archivo"   value="{{$exportacione->tipo_archivo }}" disabled>
                            </div>
   
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputcontacto">URL del archivo</label>
                              <input id="url_archivo" type="text" class="form-control" name="url_archivo"   value="{{$exportacione->url_archivo}}" disabled>
                            </div>
       
                            <div class="form-group col-md-2">
                              <label id="modal_elem" for="inputcontacto">Tamaño </label>
                              <input id="tamaño " type="text" class="form-control"  name="tamaño "   value="{{$exportacione->tamaño}}" disabled>
                            </div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputcontacto">Hora deseada</label>
                              <input id="hora_deseada" type="text" class="form-control"  name="hora_deseada "   value="{{$exportacione->hora_deseada}}" disabled>
                            </div>
                            
                            
                          </div>      
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO DATOS EXPÒRTACIONES--> 

                    </div ><!--  FINAL BOX PRIMARY-->
                  </div> <!--COLUMNA-->
   
                </div><!-- /.modal-content -->
<!--FINAL FORMULARIO VER DATOS EXPORTACIONES-->        
               
                
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
     function datos_exportaciones(id) {
      // alert('loco'); 

      var url = $('#url').val();
      //  alert(url);
      var seleccionado = id;
     // alert(seleccionado);

      if (seleccionado)
            {    
                
                var data = $.get(url+'/'+seleccionado);
                //console.log (data);
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {                                      
                        $("#estados_id").val(data.estados_id);
                        $("#proveedores_id").val(data.proveedores_id); 
                        $("#sitios_id ").val(data.sitios_id); 
                        $("#nombre_archivo ").val(data.nombre_archivo); 
                        $("#tipo_archivo").val(data.tipo_archivo); 
                        $("#url_archivo").val(data.url_archivo); 
                        $("#tamaño ").val(data.tamaño); 
                        $("#hora_deseada ").val(data.hora_deseada);
                    
                    });
                  };
                }
  </script>  
@endsection


  
 




