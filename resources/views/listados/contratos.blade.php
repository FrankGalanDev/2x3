@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado Contratos</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Contratos</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-10">
                <div class="block">
                  <div class="title">
                    <strong>Contratos creados
                    
                      <a href="{{ ('contratos/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>ID</th>
                          <th>Nombre Contrato</th>
                          <th>Duracion</th>
                          <th>Fecha</th>
                          <th>Pagos</th>
                          <th>Periodos</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Imprimir</th>
                 
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($contratos as $contrat)
                        <?php 
                          $color ="";
                    
                          if  ($contrat->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($contrat->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                          
                          <td>{{ $contrat->id }}</td>
                          <td>{{ $contrat->nombreContrato }}</td>
                          <td>{{ $contrat->duracion }}</td>
                          <td>{{ $contrat->fechaContrato }}</td>
                          <td>{{ $contrat->fechasPago }}</td>
                          <td>{{ $contrat->periodosPago }}</td>
                          
                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_plan" onclick = "datos_plan({{ $contrat->id }})" value="{{$contrat->id}}"><i  class="fa fa-fw fa-eye"></i> 
                             </button>
                          </td>

                          <td>
                            <a href="{{ asset('contratos/'.$contrat->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$contrat->id}}"><i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>
                          
                          <td>
                            <a href="{{ asset('contratos/'.$contrat->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$contrat->id}}"><i class="fas fa-print"></i>
                              </button>
                            </a>
                          </td>
                         

                        </tr>
                        @endforeach
                       {{ $contratos->links() }}
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
        <div class="modal modal-info fade" id="modal_plan" > <!--modal-->
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
                        <h3 class="box-title">Ver Contrato</h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_plan"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('contratos.index',$contrat->id)}}"  style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$contrat->id}}" type="hidden" value="{{ $contrat->id }}" name="contratos_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputnombreContrato">Nombre del Contrato</label>
                              <input id="nombreContrato" type="text" class="form-control"  name="nombreContrato"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-5">
                              <label id="modal_elem" for="inputestado">Estado</label>
                              <input id="estados" type="text" class="form-control"  name="estados"   value="" disabled>
                            </div>
                          </div>

                        <div class="col-md-12">
                          
     

                          <div>
                            <div class="form-group col-md-12">
                              <label id="modal_elem" for="inputdescripcionContrato">Descripcion</label>
                              <textarea id="descripcionContrato" type="text" class="form-control"  name="descripcionContrato"   value="" disabled>
                              </textarea>
                            </div>
                          </div> 

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputduracion">Duración</label>
                              <input id="duracion" type="text" class="form-control"  name="duracion"   value="" disabled>
                            </div>
                          </div>

                           <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputfechaContrato">Fecha del Contrato</label>
                              <input id="fechaContrato" type="text" class="form-control"  name="fechaContrato"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputfechasPago">Fechas de Pago</label>
                              <input id="fechasPago" type="text" class="form-control"  name="fechasPago"   value="" disabled>
                            </div>
                          </div>
                        </div>  
                        
                        <div class="col-md-12">
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputperiodosPago">Periodos de Pago</label>
                              <input id="periodosPago" type="text" class="form-control"  name="periodosPago"   value="" disabled>
                            </div>
                          </div>  

                          
                           
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO plans--> 

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

    var si ='si';
    var no ='no';


    
    function datos_plan(id) {
      // alert('loco'); 

      var url = $('#url').val();
     //alert(url);
      var seleccionado = id;
     //alert(seleccionado);

      if (seleccionado)
            {    
                
            //  var data = $.get(url+'/'+seleccionado);
            //   console.log (data);
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {
                         

                        $("#estados").val(data.estado.nombreEstado);
                        $("#nombreContrato").val(data.nombreContrato);
                        $("#descripcionContrato").val(data.descripcionContrato);
                       
                        $("#duracion").val(data.duracion);
                        $("#fechaContrato").val(data.fechaContrato);          
                        $("#fechasPago").val(data.fechasPago);
                        $("#periodosPago").val(data.periodosPago);
                    });
                  };
             };  

    
</script>
@endsection


  