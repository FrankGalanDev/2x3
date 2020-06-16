@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado Pagos</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Pagos</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-10">
                <div class="block">
                  <div class="title">
                    <strong>Pagos realizados
                    
                      <a href="{{ ('pagos/create') }}" class="text-success font-weight-light" ><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>ID</th>
                          <th>Numero</th>
                          <th>Sitio</th>
                          <th>Factura</th>
                          <th>Estado</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Imprimir</th> 

                        </tr>
                      </thead>
                      <tbody>

                        @foreach($pagos as $pago)
                        <?php 
                          $color ="";
                    
                          if  ($pago->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($pago->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                          
                          <td>{{ $pago->id }}</td>
                          <td>{{ $pago->numeroPago }}</td>
                          <td>{{ $pago->sitio->nombreSitio }}</td>
                          <td>{{ $pago->numeroFactura }}</td>
                          <td>{{ $pago->estado->nombreEstado }}</td>
                          

                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_pago" onclick = "datos_pago({{ $pago->id }})" value="{{$pago->id}}"><i  class="fa fa-fw fa-eye"></i> 
                             </button>
                          </td>

                          <td>
                            <a href="{{ asset('pagos/'.$pago->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$pago->id}}"><i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>
                          <td>
                            <a href="{{ asset('pagos/'.$pago->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$pago->id}}"><i class="fas fa-print"></i>
                              </button>
                            </a>
                          </td>
                         

                        </tr>
                        @endforeach
                        {{ $pagos->links() }}
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
        <div class="modal modal-info fade" id="modal_pago" > <!--modal-->
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
                        <h3 class="box-title">Ver Pago </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_pago"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('pagos.index',$pago->id)}}"  style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$pago->id}}" type="hidden" value="{{ $pago->id }}" name="pagos_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputnumeroPago">Numero de pago</label>
                              <input id="numeroPago" type="text" class="form-control"  name="numeroPago"   value="" disabled>
                            </div>
                          </div>

                          <div>
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputnumeroFactura">Numero de Factura</label>
                              <input id="numeroFactura" type="text" class="form-control"  name="numeroFactura"   value="" disabled>
                            </div>
                          </div> 

                          <div>
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputsitio">Sitio</label>
                              <input id="sitio" type="text" class="form-control"  name="sitio"   value="" disabled>
                            </div>
                          </div> 
                          
                           <div>
                            <div class="form-group col-md-8">
                              <label id="modal_elem" for="inputestado">Estado</label>
                              <input id="estado" type="text" class="form-control"  name="estado"   value="" disabled>
                            </div>
                          </div> 


                           
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO pagos--> 

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
    
    function datos_pago(id) {
    //alert('loco'); 

      var url = $('#url').val();
     // alert(url);
      var seleccionado = id;
      //alert(seleccionado);

      if (seleccionado)
            {    
                
             //   var data = $.get(url+'/'+seleccionado);
              //  alert (data);
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {
                        
                        $("#numeroPago").val(data.numeroPago);                
                        $("#numeroFactura").val(data.numeroFactura);           
                        $("#sitio").val(data.sitio.nombreSitio);  
                        $("#estado").val(data.estado.nombreEstado);
                    });
                  };
             };     
</script>
@endsection