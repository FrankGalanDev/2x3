@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado Roles</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Roles</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title">
                    <strong>Roles Disponibles
                      <a href="{{ ('roles/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                         
                          <th>Id</th>
                          <th>Estados</th>
                          <th>Nombre del Rol</th>
                          
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Eliminar</th> 
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($roles as $rol)
                        <?php 
                          $color ="";
                    
                          if  ($role->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($role->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                         
                          <td>{{ $rol->id}}</td>
                          <td>{{ $rol->estado['nombreEstado']}}</td>
                          <td>{{ $rol->nombreRol}}</td>
                          
                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_roles" onclick = "datos_roles({{$rol->id}})" value="{{$rol->id}}"><i  class="fa fa-fw fa-eye"></i>
                            </button>
                          </td>
                          
                          <td>
                            <a href="{{ url('roles/'.$rol->id.'/edit') }}"><button class="btn btn-success btn-xs"  value="{{$rol->id}}"><i class="fa fa-fw fa-wrench"></i></button>
                            </a>
                          </td>
                          
                          <td> 
                            <form method="POST" action="{{ url('roles/'.$rol->id) }}">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button  class="btn btn-danger btn-xs" type="submit"  value="{{$rol->id}}" onclick ="return confirm(¿Desea borrar el rol?);">
                              <i class="fa fa-trash"> </i>
                              </button>  
                            </form>
                          </td>

                        </tr>
                        @endforeach
                       {{ $roles->links() }}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            

            </div>
          </div>
        </section>
        <div type="hidden">
          <input type="hidden" id="rol" name="id" value="{{$rol->id}}"></input>    
          <input type="hidden" name="_token" value="{{csrf_token()}}"></input>    
          <input id="url" type="hidden" value="{{ \Request::url() }}"></input>
        </div>
    </div>

    <!--------------INICIO MODAL------------------>
        <div class="modal modal-info fade" id="modal_roles" > <!--modal-->
          <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
            <div class= row><!--INICIO ROW 1-->
              <div class="modal-body col-md-12"><!--modal body-->
                <div class="modal-header col-md-12">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="titulo_mod" class="modal-title">  </h4>
                </div>
<!--INICIO FORMULARIO VER DATOS rol--> 
                <div class="modal-content col-md-12"> <!--modal-content-->
                  <div class="col-md-12">
                    <div class="box box-primary col-xs-12">
                      <div class="box-header">
                        <h3 class="box-title">Rol </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_estado"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('roles.index',$rol->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$rol->id}}" type="hidden" value="{{$rol->id }}" name="roles_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputnombre_rol">Nombre</label>
                              <input id="nombreRol" type="text" class="form-control"  name="nombreRol"   value="{{$rol->nombreRol}}" disabled>
                            </div>
                            
                            <div  class="form-group col-xs-4">
                              <label id="modal_elem" for="inputeestados_id">Estado</label>
                              <input id="estados_id" type="text" class="form-control"  name="estados_id"   value="{{$rol->estado['nombreEstado']}}" disabled >
                                <span id="" class="error" aria-live="polite"></span>
                            </div>

                             
                          </div>                    
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
     function datos_roles(id) {
      //alert('loco'); 


      var url = $('#url').val();
      //alert(url);
      var seleccionado = id;
      //alert(seleccionado);

      if (seleccionado)
            {    
                
                var data = $.get(url+'/'+seleccionado);
                //console.log (data);
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {

                 
                      //  $("#titulo_mod").text('MODIFICAR CHOFER'); 
                      //  $("#input_id_form").val('form_subir_imagen');       
                        $("#id").val(data.id);
                        $("#estados_id").val(data.estado.nombreEstado);
                        $("#nombreRol").val(data.nombreRol);
                        
          
      /*                  $("#identificacion_fiscal").val(data.identificacion_fiscal);
                        
                        $("#btn-cancelar").val("cancel"); 
          
                        $("#modal-info").modal('show'); */
                    });
                  };
             };     
   


       
  </script>  
    







@endsection
