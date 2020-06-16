@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado de Tickets</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Tickets</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title">
                    <strong>Tickets creados
                    
                      <a href="{{ ('tickets/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>No</th>
                          <th>Sitio</th> 
                          <th>Asunto</th>
                          <th>Descripcion</th>
                          <th>Cliente</th>
                          <th>Estado</th>
                          <th>Asignado a</th>
                          <th>Fecha</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                           

                        </tr>
                      </thead>
                      <tbody>

                        @foreach($tickets as $ticket)
                       

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
                          
                          <td>{{ $ticket->id }}</td>
                          <td>{{ $ticket->sitio->nombreSitio }}</td>
                          <td>{{ $ticket->asunto}}</td>
                          <td>{{ $ticket->texto}}</td>
                          <td>{{ $ticket->user->name}}</td>
                          <td>{{ $ticket->estado->nombreEstado }}</td>
                          <td>{{ $ticket->asignado_a }}</td>
                          <td>{{ $ticket->created_at }}</td>
                           

                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_ticket" onclick = "datos_ticket({{ $ticket->id }})" value="{{$ticket->id}}"><i  class="fa fa-fw fa-eye"></i> 
                             </button>
                          </td>

                          <td>
                            <a href="{{ asset('tickets/'.$ticket->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$ticket->id}}"><i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>

                         

                        </tr>
                        @endforeach
                       {{ $tickets->links() }}
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
        <div class="modal modal-info fade" id="modal_ticket" > <!--modal-->
          <div class="modal-dialog" style="width:920px;"><!--modal-dialog--> 
       
            <div class= row><!--INICIO ROW 1-->
              <div class="modal-body col-md-12"><!--modal body-->
                <div class="modal-header col-md-12">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 id="titulo_mod" class="modal-title">  </h4>
                </div>
<!--INICIO FORMULARIO VER DATOS DEL TICKET--> 
                <div class="modal-content col-md-12"> <!--modal-content-->
                  <div class="col-md-12">
                    <div class="box box-primary col-xs-12">
                      <div class="box-header">
                        <h3 class="box-title">Ver Ticket </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_estado"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('tickets.index',$ticket->id)}}"  style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$ticket->id}}" type="hidden" value="{{ $ticket->id }}" name="estado_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-12">
                              <label id="modal_elem" for="inputasunto">Asunto</label>
                              <input id="asunto" type="text" class="form-control"  name="asunto"   value=" " disabled>
                            </div>

                            <div class="form-group col-md-5">
                              <label id="modal_elem" for="inputvariacion">Pin Soporte</label>
                              <input  id="pin_soporte" type="text" class="form-control"  name="pin_soporte"   value=" " disabled>
                            </div>

                            <div class="form-group col-md-5">
                              <label id="modal_elem" for="inputnombreEstado">Estado</label>
                              <input id="nombreEstado" type="text" class="form-control"  name="nombreEstado"   value=" " disabled>
                            </div>

                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputasignado_a">Asignado a</label>
                              <input id="asignado_a" type="text" class="form-control"  name="asignado_a"   value=" " disabled>
                            </div>

                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputnombreSitio">Sitio</label>
                              <input id="nombreSitio" type="text" class="form-control"  name="nombreSitio"   value=" " disabled>
                            </div>
                            
                            

                            <div class="form-group col-md-12">
                              <label id="modal_elem" for="inputtexto">Texto</label>
                              <textarea  id="texto" type="text" class="form-control"  name="texto"   value=" " disabled></textarea>
                            </div>

                            

                            
                            
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputusuario">Usuario</label>
                              <input id="usuario" type="text" class="form-control"  name="usuario"   value=" " disabled>
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
<script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
  <script>
   
    
    function datos_ticket(id) {
    // alert('loco'); 
      
      var url = $('#url').val();
     //  alert(url);
      var seleccionado = id;
     //   alert(seleccionado);
      
      

      if (seleccionado)
            {    
                
                     
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {
                       console.log(data);


                        $("#nombreEstado").val(data.estado.nombreEstado);           
                        $("#nombreSitio").val(data.sitio.nombreSitio);
                        $("#usuario").val(data.user.name); 
                        $("#asunto").val(data.asunto);
                        $("#texto").val(data.texto);
                        $("#pin_soporte").val(data.pin_soporte);
                       
                        $("#asignado_a").val(data.asignado_a);
                    });
                  };
             }; 




</script>
@endsection

