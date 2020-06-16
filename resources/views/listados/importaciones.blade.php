@extends('layouts.escritorio_base')

@section('content')
<div>

 
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado importaciones</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Importaciones</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Todas las Importaciones</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>ID</th>
                          <th>Usuario</th>
                          <th>Estado</th>
                          <th>Proveedor</th>
                          <th>Nombre</th>
                          <th>Tipo</th>
                          <th>URL</th>
                          <th>Tamaño</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Eliminar</th> 
                           

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($importaciones as $importacione)
                        <?php 
                          $color ="";
                    
                          if  ($importacione->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($importacione->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                          <td>{{ $importacione->id }}</td>
                          <td>{{ $importacione->user['username'] }}</td>
                          <td>{{ $importacione->estado['nombreEstado'] }}</td>
                          <td>{{ $importacione->proveedore['nombreProveedor'] }}</td>
                          <td>{{ $importacione->nombre }}</td>
                          <td>{{ $importacione->tipo_archivo }}</td>
                          <td>{{ $importacione->url_archivo }}</td>
                          <td>{{ $importacione->tamaño }}</td>
                          <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_importaciones" onclick = "datos_importaciones({{ $importacione->id }})" value="{{$importacione->id}}"><i  class="fa fa-fw fa-eye"></i> </button></td>
                          <td><a href="{{ asset('importaciones.edit') }}"><button class="btn btn-success btn-xs"  value="{{$importacione->id}}"><i class="fa fa-fw fa-wrench"></i></button></a></td>
                          <td><button  class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-info"  value="{{$importacione->id}}"><i class="fa fa-trash"> </i></button></td> 

                        </tr>
                        @endforeach
                       {{ $importaciones->links() }}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            

            </div>
          </div>
        </section>
        
        <div type="hidden">
          <input type="hidden" id="importaciones" name="id" value="{{$importacione->id}}"></input>    
          <input type="hidden" name="_token" value="{{csrf_token()}}"></input>    
          <input id="url" type="hidden" value="{{ \Request::url() }}"></input>
        </div>
    </div>


    <!--------------INICIO MODAL------------------>
        <div class="modal modal-info fade" id="modal_importaciones" > <!--modal-->
          <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
            <div class= row><!--INICIO ROW 1-->
              <div class="modal-body col-md-12"><!--modal body-->
                <div class="modal-header col-md-12">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="titulo_mod" class="modal-title">  </h4>
                </div>
<!--INICIO FORMULARIO VER DATOS IMPORTACIONES--> 
                <div class="modal-content col-md-12"> <!--modal-content-->
                  <div class="col-md-12">
                    <div class="box box-primary col-xs-12">
                      <div class="box-header">
                        <h3 class="box-title">Importación</h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_estado"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('importaciones.index',$importacione->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$importacione->id}}" type="hidden" value="{{ $importacione->id }}" name="importacione_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputempresa">Usuario</label>
                              <input id="user_id" type="text" class="form-control"  name="user_id"   value="{{$importacione->user['username'] }}" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputeestados_id">Estado</label>
                              <input id="estados_id" type="text" class="form-control"  name="estados_id"   value="{{$importacione->estado['nombreEstado']  }}" disabled >
                                <span id="" class="error" aria-live="polite"></span>
                            </div>

                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputestado">Proveedores</label>
                               <input id="proveedores" type="text" class="form-control"  name="proveedores"  value="{{$importacione->proveedore['nombre'] }}" disabled>
                            </div>
                          </div>                    
                            <!------------------------------------------------------------------------------------------->
                          <div>
                            <div class="form-group col-md-10">
                              <label id="modal_elem" for="inputnombre">Nombre del Sitio</label>
                              <input id="nombreSitio" type="text" class="form-control"  name="nombreSitio"   value="{{$importacione->sitio->nombreSitio }}" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-2">
                              <label id="modal_elem" for="inputtipo_archivo"> Tipo</label>
                              <input id="tipo_archivo" type="text" class="form-control"  name="tipo_archivo"   value="{{$importacione->tipo_archivo}}" disabled >
                                
                            </div>

                            
                          </div>       
                            <!------------------------------------------------------------------------------------------------>
                          <div>
                            <div class="form-group col-md-3">
                              <label id="modal_elem" for="inputurl_archivo">URL</label>
                              <input id="url_archivo" type="text" class="form-control"  name="url_archivo"   value="{{$importacione->url_archivo }}" disabled>
                            </div>
   
                            
       
                            <div class="form-group col-md-3">
                              <label id="modal_elem" for="inputtamaño">Tamaño </label>
                              <input id="tamaño " type="text" class="form-control"  name="tamaño "   value="{{$importacione->tamaño}}" disabled>
                            </div>
                           
                            
                          </div>      
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO TIPOS PERSONALES--> 

                    </div ><!--  FINAL BOX PRIMARY-->
                  </div> <!--COLUMNA-->
   
                </div><!-- /.modal-content -->
<!--FINAL FORMULARIO VER DATOS IMPORTACIONES-->        
               
                
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
     function datos_importaciones(id) {
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
                        $("#users_id").val(data.users_id);
                        $("#estados_id").val(data.estados_id);
                        $("#proveedores_id").val(data.proveedores_id); 
                        $("#nombre ").val(data.nombre); 
                        $("#tipo_archivo").val(data.tipo_archivo); 
                        $("#url_archivo").val(data.url_archivo); 
                        $("#tamaño ").val(data.tamaño); 
                         
                    
                    });
                  };
                }
  </script>  



@endsection