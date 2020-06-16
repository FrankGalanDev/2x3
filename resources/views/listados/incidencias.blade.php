@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado incidencias</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado incidencias</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-10">
                <div class="block">
                  <div class="title">
                    <strong>Incidencias disponibles
                    
                      <a href="{{ ('incidencias/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Sitio</th>
                          <th>Estado</th>
                          <th>Descripcion</th>
                          <th>Fecha</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                           

                        </tr>
                      </thead>
                      <tbody>

                        @foreach($incidencias as $incidencia)
                        <?php 
                          $color ="";
                    
                          if  ($incidencia->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($incidencia->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                    
                          <td>{{ $incidencia->id }}</td>
                          <td>{{ $incidencia->nombreIncidencia }}</td>
                          <td>{{ $incidencia->sitio->nombreSitio }}</td>
                          <td>{{ $incidencia->estado->nombreEstado }}</td>
                          <td>{{ $incidencia->descripcion }}</td>
                          <td>{{ $incidencia->fecha_incidencia }}</td>

                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_incidencia" onclick = "datos_incidencia({{ $incidencia->id }})" value="{{$incidencia->id}}"><i  class="fa fa-fw fa-eye"></i> 
                             </button>
                          </td>

                          <td>
                            <a href="{{ asset('incidencias/'.$incidencia->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$incidencia->id}}"><i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>

                         

                        </tr>
                        @endforeach
                       {{ $incidencias->links() }}
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
        <div class="modal modal-info fade" id="modal_incidencia" > <!--modal-->
          <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
            <div class= row><!--INICIO ROW 1-->
              <div class="modal-body col-md-12"><!--modal body-->
                <div class="modal-header col-md-12">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="titulo_mod" class="modal-title">  </h4>
                </div>
<!--INICIO FORMULARIO VER DATOS ESTADO--> 
                <div class="modal-content col-md-12"> <!--modal-content-->
                  <div class="col-md-12">
                    <div class="box box-primary col-xs-12">
                      <div class="box-header">
                        <h3 class="box-title">Ver Incidencia </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_incidencia"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('incidencias.index',$incidencia->id)}}"  style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$incidencia->id}}" type="hidden" value="{{ $incidencia->id }}" name="incidencias_id"> 
              
                        <div class="col-md-12">




                          <!--INICIO BOX BODY-->
                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputnombre">Nombre</label>
                              <input id="nombre" type="text" class="form-control"  name="nombre"   value="" disabled>
                            </div>
                          </div> 

                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputestado">Estado</label>
                              <input id="estado" type="text" class="form-control"  name="estado"   value="" disabled>
                            </div>
                          </div> 

                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputsitio">Sitio</label>
                              <input id="sitio" type="text" class="form-control"  name="sitio"   value="" disabled>
                            </div>
                          </div> 

                          <div>
                            <div class="form-group col-md-12">
                              <label id="modal_elem" for="inputdescripcion">Descripcion</label>
                              <textarea id="descripcion" type="text" class="form-control"  name="descripcion"   value="" disabled>
                                </textarea>
                            </div>
                          </div> 

                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputfecha_incidencia">Fecha</label>
                              <input id="fecha_incidencia" type="text" class="form-control"  name="fecha_incidencia"   value="" disabled>
                            </div>
                          </div> 



                           
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO incidencias--> 

                    </div ><!--  FINAL BOX PRIMARY-->
                  </div> <!--COLUMNA-->
   
                </div><!-- /.modal-content -->
<!--FINAL FORMULARIO VER DATOS ESTADO-->        
               
                
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
    
    function datos_incidencia(id) {
      // alert('loco'); 

      var url = $('#url').val();
     //  alert(url);
      var seleccionado = id;
      //alert(seleccionado);

      if (seleccionado)
            {    
                
              //  var data = $.get(url+'/'+seleccionado);
                //console.log (data);
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {
                        $("#estado").val(data.estado.nombreEstado);               
                        $("#nombre").val(data.nombreIncidencia);
                        $("#sitio").val(data.sitio.nombreSitio); 
                        $("#descripcion").val(data.descripcion); 
                        $("#fecha_incidencia").val(data.fecha_incidencia); 
                        
                         

                    
                    });
                  };
             };     
</script>
@endsection
