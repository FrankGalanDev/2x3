@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado de tareas</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado tareas</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title">
                    <strong>Tareas creadas
                    
                      <a href="{{ ('tasks/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>No</th>
                          <th>Sitio</th> 
                          <th>Nombre</th>
                          <th>Resumen</th>
                          <th>Descripcion</th>
                          <th>Estado</th>
                          <th>Responsable</th>
                          <th>Fecha</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                           

                        </tr>
                      </thead>
                      <tbody>

                        @foreach($tasks as $task)
                        <?php 
                          $color ="";
                    
                          if  ($task->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($task->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                          
                          <td>{{ $task->id }}</td>
                          <td>{{ $task->sitio->nombreSitio }}</td>
                          <td>{{ $task->nombreTarea}}</td>
                          <td>{{ $task->resumen}}</td>
                          <td>{{ $task->descripcion}}</td>
                          <td>{{ $task->estado->nombreEstado }}</td>
                          <td>{{ $task->user->name}}</td>
                          <td>{{ $task->created_at}}</td>
                          
                          <td>
                           <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_task" onclick = "datos_task({{ $task->id }})" value="{{$task->id}}"><i  class="fa fa-fw fa-eye"></i> 
                             </button>
                          </td>

                          <td>
                            <a href="{{ asset('tasks/'.$task->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$task->id}}"><i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>

                        </tr>
                        @endforeach
                        {{ $tasks->links() }}
                      </tbody>

                    </table>
                    <br>
                    {{ $tasks->links() }}
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
    <div class="modal modal-info fade" id="modal_task" > <!--modal-->
      <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
        <div class= row><!--INICIO ROW 1-->
          <div class="modal-body col-md-12"><!--modal body-->
            <div class="modal-header col-md-12">
              <meta name="csrf-token" content="{{ csrf_token() }}">
              <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 id="titulo_mod" class="modal-title">  </h4>
            </div>

  <!----------------------INICIO FORMULARIO VER DATOS task-----------------------------> 
          <div class="modal-content col-md-12"> <!--modal-content-->
            <div class="col-md-12">
              <div class="box box-primary col-xs-12">
                <div class="box-header">
                  <h3 class="box-title">Ver task </h3>
                </div><!-- /.box-header -->
                           
                <form  id="ver_task"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('tasks.index',$task->id)}}"  style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                    <input id="{{$task->id}}" type="hidden" value="{{ $task->id }}" name="tasks_id"> 
              
                    <div class="col-md-12">

  <!-------------------------------------------INICIO BOX BODY----------------------------------->

                      <div class="row">
                        
                        <div class="form-group col-md-5">
                          <label id="modal_elem" for="inputnombre">Estado</label>
                          <input id="nombreEstado" type="text" class="form-control"  name="nombreEstado"   value="" disabled>
                        </div>
                      
                        <div class="form-group col-md-10">
                          <label id="modal_elem" for="inputusers_id">Usuario</label>
                          <input id="users_id" type="text" class="form-control"  name="users_id"   value="" disabled>
                        </div>

                        <div class="form-group col-md-10">
                          <label id="modal_elem" for="inputsitios_id">Sitio</label>
                          <input id="sitios_id" type="text" class="form-control"  name="sitios_id"   value="" disabled>
                        </div>

                        <div class="form-group col-md-12">
                          <label id="modal_elem" for="inputnombreTarea">Nombre de la Tarea</label>
                          <input id="nombreTarea" type="text" class="form-control"  name="nombreTarea"   value="" disabled>
                        </div>

                        <div class="form-group col-md-6">
                          <label id="modal_elem" for="inputfecha">Fecha creada</label>
                          <input id="fecha" type="text" class="form-control"  name="fecha"   value="" disabled>
                        </div>

                        <div class="form-group col-md-8">
                          <label id="modal_elem" for="inputalarma">Alarma</label>
                       
                          
                          <input id="alarma" type="text" class="form-control"  name="alarma"   value=
                           @php
                            if(' {{ $task->alarma }}  = 1') 
                              {echo "Si";}
                              else{echo "No";}"{{$task->alarma}}" @endphp disabled> 
                     
                        </div>

                        <div class="form-group col-md-12">
                          <label id="modal_elem" for="inputresumen">Resumen</label>
                          <input id="resumen" type="text" class="form-control"  name="resumen"   value=" " disabled>
                        </div>

                        <div class="form-group col-md-12">
                          <label id="modal_elem" for="inputdescripcion">Descripcion</label>
                          <textarea  id="descripcion" type="text" class="form-control"  name="descripcion"   value=" " disabled>
                            
                          </textarea>
                        </div>

                      </div>  


  <!-----------------------------------------------INICIO FOOTER------------------------------->                           
                        <div class="modal-footer edit">   
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
    
    function datos_task(id) {
      // alert('loco'); 

      var url = $('#url').val();
     //  alert(url);
      var seleccionado = id;
      //alert(seleccionado);

      if (seleccionado)
            {    
                
              //  var data = $.get(url+'/'+seleccionado);
                
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {
                      console.log (data);                
                        $("#nombreEstado").val(data.estado.nombreEstado); 
                        $("#users_id").val(data.user.name);  
                        $("#sitios_id").val(data.sitio.nombreSitio); 
                        $("#nombreTarea").val(data.nombreTarea);
                        $("#fecha").val(data.fecha); 
                        $("#alarma").val(data.alarma); 
                        $("#resumen").val(data.resumen);  
                        $("#descripcion").val(data.descripcion);

                    
                    });
                  };
             };     
</script>
@endsection

