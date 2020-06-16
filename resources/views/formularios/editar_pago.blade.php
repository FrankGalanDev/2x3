@extends('layouts.escritorio_base')

@section('content')

<!--INICIO TERCER FORMULARIO CAMBIO DATOS PERSONALES-->

        <div class="col-md-12">
            <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Modificar el pago</h3>
                </div><!-- /.box-header -->
                           
                <form  id="editar_pago"  method= "POST" class="form-horizontal"  enctype = "multipart/form-data" action= "{{url('pagos/'.$pago->id)}}" style="width:100%;"><!--/INICIO FORMULARIO-->
                    {{method_field('PUT')}} 
                    {{csrf_field()}}
                    <input id="{{$pago->id}} " type="hidden" value="update" name="pagos_id "> 
                           
                    <div class="col-md-12"><!--INICIO BOX BODY-->
           <!------------------------------------------------------------------------------------>
                        <div>
                            <div class="form-group col-md-4">
                                <label id="modal_elem" for="inputnumeroPago">Numero del Pago</label>
                                <input id="numeroPago" type="text" class="form-control"  name="numeroPago"  value="{{ $pago->numeroPago}}">
                            </div>
                                                             
                        </div>  
                        
                        <div>
                            <div class="form-group col-md-4">
                                <label id="modal_elem" for="inputnumeroFactura">Numero Factura</label>
                                <input id="numeroFactura" type="text" class="form-control"  name="numeroFactura"  value="{{ $pago->numeroFactura}}">
                            </div>
                                                             
                        </div>

                        <div class = col-md-2>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#" onclick = "imprimir( )" value="{{$pago->id}}"><i  class="fas fa-print"></i>  
                            </button> 
                        </div>

                        <div class = col-md-2>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#" onclick = "imprimir( )" value="{{$pago->id}}"><i  class="fas fa-print"></i>  
                            </button> 
                        </div>


                    </div>
                               
                    <div class="modal-footer edit">   
                        <a href="{{ url('pagos') }}" >
                            <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i  class="fa fa-window-close"></i>
                                Cerrar
                            </button>
                        </a>

                        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value="Modificar"></input> 
                
                    </div>                     
                      
                </form> <!--FINAL 3 FORMULARIO CAMBIO DATOS PERSONALES--> 

            </div ><!--  FINAL BOX PRIMARY-->
        </div> <!--COLUMNA-->


<script type="text/javascript">
    function modificar_estado_pago(id) 
{
 //alert('loco');

 var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x); 

  
}
             
</script>   
@endsection
     