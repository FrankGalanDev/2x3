@extends('layouts.escritorio_base')

@section('content')

<!--INICIO TERCER FORMULARIO CAMBIO DATOS PERSONALES-->

        <div class="col-md-12">
            <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Modificar el estado</h3>
                </div><!-- /.box-header -->
                           
                <form  id="editar_estado"  method= "POST" class="form-horizontal"  enctype = "multipart/form-data" action= "{{url('estados/'.$estado->id)}}" style="width:100%;"><!--/INICIO FORMULARIO-->
                    {{method_field('PUT')}} 
                    {{csrf_field()}}
                    <input id="{{$estado->id}} " type="hidden" value="update" name="estados_id "> 
                           
                    <div class="col-md-12"><!--INICIO BOX BODY-->
           <!------------------------------------------------------------------------------------>
                        <div>
                            <div class="form-group col-md-4">
                                <label id="modal_elem" for="inputnombreEstado">Nombre del Estado</label>
                                <input id="nombreEstado" type="text" class="form-control"  name="nombreEstado"  value="{{ $estado->nombreEstado}}">
                            </div>
                                                             
                        </div>                    
                    </div>
                               
                    <div class="modal-footer edit">   
                        <a href="{{ url('estados') }}" >
                            <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i  class="fa fa-window-close"></i>
                                Cerrar
                            </button>
                        </a>

                        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value="Modificar"></input> 
                
                    </div>                     
                      
                </form> <!--FINAL 3 FORMULARIO CAMBIO DATOS PERSONALES--> 

            </div ><!--  FINAL BOX PRIMARY-->
        </div> <!--COLUMNA-->
   
               

@endsection
     