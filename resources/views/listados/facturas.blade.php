@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado de Facturas</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado de Facturas</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-md-12">
                <div class="block">
                  <div class="title">
                    <strong>Facturas creadas
                    
                      <a href="{{ ('facturas/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          
                          <th>Estado</th> 
                          <th>Contrato</th>
                          <th>Nombre</th>
                          <th>Número</th>
                          <th>Periodo</th>
                          <th>Importe</th>
                           
                          <th>Fecha</th>
                          <th>Datos</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Descargar</th>

                          
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($facturas as $factura)
                        <?php 
                          $color ="";
                    
                          if  ($factura->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($factura->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                          
                          
                          <td>{{ $factura->estado->nombreEstado }}</td>
                          <td>{{ $factura->contrato->nombreContrato}}</td>
                          <td>{{ $factura->nombreFactura}}</td>
                          <td>{{ $factura->numeroFactura}}</td>
                          <td>{{ $factura->periodo }}</td>
                          <td>{{ $factura->importe}}</td>
                          
                          <td>{{ $factura->created_at}}</td>
                          <td>{{ $factura->datosEmpresa}}</td>
                          
                       <!--   <td>
                           <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_factura" onclick = "datos_factura({{ $factura->id }})" value="{{$factura->id}}"><i  class="fa fa-fw fa-eye"></i> 
                             </button>
                          </td>-->
                          <td>
                          <!--   <a href="{{ url('facturas/'.$factura->id) }}" >-->
                            <a href="{{ url('facturas/'.$factura->id) }}" >
                              <button class="btn btn-success btn-xs"  value="{{$factura->id}}">
                                <i  class="fa fa-fw fa-eye"></i>
                              </button>
                            </a>
                          </td>

                          <td>
                            <a href="{{ asset('facturas/'.$factura->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$factura->id}}">
                                <i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>

                          <td>
                            <a href="{{ action('FacturaController@convertir_pdf', $factura->id) }}" >  
                              <button class="btn btn-success btn-xs"  value="{{$factura->id}}">
                                <i class="fas fa-file-download"></i>
                              </button>
                            </a>
                          </td>

                          

                        </tr>
                        @endforeach
                        {{ $facturas->links() }}
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
    <div class="modal modal-info fade" id="modal_factura" > <!--modal-->
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

  <!----------------------INICIO FORMULARIO VER DATOS factura-----------------------------> 
          <div class="modal-content col-md-12"> <!--modal-content-->
            <div class="col-md-12">
              <div class="box box-primary col-xs-12">
                <div class="box-header">
                  <h3 class="box-title">Ver factura </h3>
                </div><!-- /.box-header -->
                           
                <form  id="ver_factura"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('facturas.index',$factura->id)}}"  style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                    <input id="{{$factura->id}}" type="hidden" value="{{ $factura->id }}" name="facturas_id"> 
              
                    <div class="col-md-12">

  <!-------------------------------------------INICIO BOX BODY----------------------------------->

                      <div class="row">


   

                        
                        <div class="form-group col-md-5">
                          <label id="modal_elem" for="inputnombre">Estado</label>
                          <input id="nombreEstado" type="text" class="form-control"  name="nombreEstado"   value="" disabled>
                        </div>
                      
                        <div class="form-group col-md-10">
                          <label id="modal_elem" for="inputcontratos_id">Contrato</label>
                          <input id="contratos_id" type="text" class="form-control"  name="contratos_id"   value="" disabled>
                        </div>

                        <div class="form-group col-md-10">
                          <label id="modal_elem" for="inputnombreFactura"> Nombre</label>
                          <input id="nombreFactura" type="text" class="form-control"  name="nombreFactura"   value="" disabled>
                        </div>

                        <div class="form-group col-md-12">
                          <label id="modal_elem" for="inputnumeroFactura">Numero</label>
                          <input id="numeroFactura" type="text" class="form-control"  name="numeroFactura"   value="" disabled>
                        </div>

                        <div class="form-group col-md-6">
                          <label id="modal_elem" for="inputperiodo">Periodo </label>
                          <input id="periodo" type="text" class="form-control"  name="periodo"   value="" disabled>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label id="modal_elem" for="inputimporte">Importe </label>
                          <input id="importe" type="text" class="form-control"  name="importe"   value="" disabled>
                        </div>
                        <div class="form-group col-md-12">
                          <label id="modal_elem" for="inputiva">Iva</label>
                          <input id="iva" type="text" class="form-control"  name="iva"   value="" disabled>
                        </div>

                        <div class="form-group col-md-6">
                          <label id="modal_elem" for="inputfecha">Fecha contratacion </label>
                          <input id="fecha" type="text" class="form-control"  name="fecha"   value="" disabled>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label id="modal_elem" for="inputdatosEmpresa">Datos empresa </label>
                          <input id="datosEmpresa" type="text" class="form-control"  name="datosEmpresa"   value="" disabled>
                        </div>


                        

                        <div class="form-group col-md-12">
                          <label id="modal_elem" for="inputresumen">Resumen</label>
                          <input id="resumen" type="text" class="form-control"  name="resumen"   value=" " disabled>
                        </div>

                        <div class="form-group col-md-12">
                          <label id="modal_elem" for="inputdescripcion contrato">Descripcion contrato</label>
                          <textarea  id="descripcion contrato" type="text" class="form-control"  name="descripcion contrato"   value=" " disabled>
                            
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
    
    function datos_factura(id) {
      // alert('loco'); 

      var url = $('#url').val();
     //  alert(url);
      var seleccionado = id;
      //alert(seleccionado);

      if (seleccionado)
            {    
                
              //  var data = $.get(url+'/'+seleccionado);
         // 'id', 'contratos_id', 'estados_id', 'nombreFactura' , 'numeroFactura' , 'periodo' , 'importe' , 'iva','fechaContrato' , 'datosEmpresa'        
               
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

