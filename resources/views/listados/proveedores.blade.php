@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header--> 
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado proveedores</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Proveedores</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title">
                    <strong>Todos los Proveedores

                      <a href="{{ ('proveedores/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong>
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                        
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Estados</th>
                          <th>Telefono</th>
                          <th>Wasap</th>
                          
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Eliminar</th> 
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($proveedores as $proveedore)
                        <?php 
                          $color ="";
                    
                          if  ($proveedore->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($proveedore->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                          
                          <td>{{ $proveedore->id }}</td>
                          <td>{{ $proveedore->nombreProveedor}}</td>
                          <td>{{ $proveedore->estado['nombreEstado']}}</td>
                           
                          <td>{{ $proveedore->telefono }}</td>
                          <td>{{ $proveedore->wasap }}</td>
                         
                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_proveedores" onclick = "datos_proveedores({{$proveedore->id}})" value="{{$proveedore->id}}"><i  class="fa fa-fw fa-eye"></i
                              >
                            </button>
                          </td>

                          <td>
                            <a href="{{ asset('proveedores/'.$proveedore->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$proveedore->id}}"><i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>
                           <td> 
                            <form method="POST" action="{{ url('proveedores/'.$proveedore->id) }}">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button  class="btn btn-danger btn-xs" type="submit"  value="{{$proveedore->id}}" >
                              <i class="fa fa-trash"> </i>
                              </button>  
                            </form>
                          </td> 
                        </tr>
                        @endforeach
                       {{ $proveedores->links() }}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            

            </div>
          
        </section>
      </div>
           <div type="hidden">
          <input type="hidden" id="proveedores" name="id" value="{{$proveedore->id}}"></input>    
          <input type="hidden" name="_token" value="{{csrf_token()}}"></input>    
          <input id="dir" type=" " value="{{ \Request::url() }}"></input>
      </div>
    </div>

    
    <!--------------INICIO MODAL------------------>
        <div class="modal modal-info fade" id="modal_proveedores" > <!--modal-->
          <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
            <div class= row><!--INICIO ROW 1-->
              <div class="modal-body col-md-12"><!--modal body-->
                <div class="modal-header col-md-12">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="titulo_mod" class="modal-title">  </h4>
                </div>
<!--INICIO FORMULARIO VER DATOS PROVEEDORES--> 
                <div class="modal-content col-md-12"> <!--modal-content-->
                  <div class="col-md-12">
                    <div class="box box-primary col-xs-12">
                      <div class="box-header">
                        <h3 class="box-title">Proovedor </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_estado"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('proveedores.index',$proveedore->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$proveedore->id}}" type="hidden" value="{{ $proveedore->id }}" name="proveedores_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputnombre">Nombre</label>
                              <input id="nombre" type="text" class="form-control"  name="nombre"   value="" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputeestados_id">Estado</label>
                              <input id="estados_id" type="text" class="form-control"  name="estados_id"   value="" disabled >
                                <span id="" class="error" aria-live="polite"></span>
                            </div>

                            <div  class="form-group col-xs-8">
                              <label id="modal_elem" for="inputurl_proveed">URL</label>
                               <input id="url_proveed" type="text" class="form-control"  name="url_proveed"  value="" disabled>
                            </div>
                          </div>                    
                            <!------------------------------------------------------------------------------------------->
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputtelefono">Telefono</label>
                              <input id="telefono" type="text" class="form-control"  name="telefono"   value="" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputfacebook">Facebook</label>
                              <input id="facebook" type="text" class="form-control"  name="facebook"   value="" disabled >
                                
                            </div>

                            
                          </div>       
                            <!------------------------------------------------------------------------------------------------>
                           
                            <div class="form-group col-md-5">
                              <label id="modal_elem" for="inputdireccion">Direccion</label>
                              <input id="direccion" type="text" class="form-control"  name="direccion"   value="" disabled>
                            </div>
     
                            <div class="form-group col-md-5">
                              <label id="modal_elem" for="inputtamaño">Whatsapp </label>
                              <input id="wasap" type="text" class="form-control"  name="wasap"   value="" disabled>
                            </div>
                            
                            <div class="form-group col-md-5">
                              <label id="modal_elem" for="inputtwitter">Twitter</label>
                              <input id="twitter" type="text" class="form-control"  name="twitter"   value="" disabled>
                            </div>
   
                            <div class="form-group col-md-5">
                              <label id="modal_elem" for="inputusuario">Usuario </label>
                              <input id="usuario" type="text" class="form-control"  name="usuario"   value="" disabled>
                            </div>
    
                            <div class="form-group col-md-5">
                              <label id="modal_elem" for="inputcontraseña">Contraseña</label>
                              <input id="contraseña" type="text" class="form-control"  name="contraseña"   value="" disabled>
                            </div>
   
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputurl_conex">URL </label>
                              <input id="url_conex" type="text" class="form-control"  name="url_conex"   value="" disabled>
                            </div>
                            
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputscript_conex">Script conex </label>
                              <input id="script_conex" type="text" class="form-control"  name="script_conex"   value="" disabled>
                            </div>
    
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputusuario_conex">User conex</label>
                              <input id="usuario_conex" type="text" class="form-control"  name="usuario_conex"   value="" disabled>
                            </div>
   
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputpassword_conex">Passw conex </label>
                              <input id="password_conex" type="text" class="form-control"  name="password_conex"   value="" disabled>
                            </div>




                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL  FORMULARIO PROVEEDORES--> 

                    </div ><!--  FINAL BOX PRIMARY-->
                  </div> <!--COLUMNA-->
   
                </div><!-- /.modal-content -->
<!--FINAL FORMULARIO VER DATOS PROVEEDORES-->        
               
                
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
     function datos_proveedores(id) {
      // alert('loco'); 

      var url = $('#dir').val();
      // alert(url);
      var seleccionado = id;
      // alert(seleccionado);

      if (seleccionado)
            {    
                
                var data = $.get(url+'/'+seleccionado);
               // alert(data);
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {                                      
                        $("#id").val(data.id);
                         $("#estados_id").val(data.estado.nombreEstado);
                        $("#url_proveed").val(data.url_proveed);
                        $("#telefono").val(data.telefono);
                        $("#facebook").val(data.facebook);
                        $("#direccion").val(data.direccion);
                        $("#wasap").val(data.wasap);
                        $("#nombre").val(data.nombreProveedor);
                        $("#twitter").val(data.twitter); 
                        $("#usuario").val(data.usuario);
                        $("#contraseña").val(data.contraseña);
                        $("#url_conex").val(data.url_conex);
                        $("#script_conex").val(data.script_conex);
                        $("#usuario_conex").val(data.usuario_conex);
                        $("#password_conex").val(data.password_conex); 
                         
                    
                    });
                  };
                }
  </script>  





@endsection


