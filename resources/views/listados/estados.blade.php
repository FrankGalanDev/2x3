@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado estados</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Estados</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-6">
                <div class="block">
                  <div class="title">
                   <strong>Estados disponibles
                    
                      <a href="{{ ('estados/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                           

                        </tr>
                      </thead>
                      <tbody>

                        @foreach($estados as $estado)
                        <tr>
                          
                          <td>{{ $estado->id }}</td>
                          <td>{{ $estado->nombreEstado }}</td>
                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_estado" onclick = "datos_estado({{ $estado->id }})" value="{{$estado->id}}"><i  class="fa fa-fw fa-eye"></i> 
                             </button>
                          </td>

                          <td>
                            <a href="{{ asset('estados/'.$estado->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$estado->id}}"><i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>

                         

                        </tr>
                        @endforeach
                       {{ $estados->links() }}
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
        <div class="modal modal-info fade" id="modal_estado" > <!--modal-->
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
                        <h3 class="box-title">Ver Tipo de  Estado </h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_estado"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('estados.index',$estado->id)}}"  style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$estado->id}}" type="hidden" value="{{ $estado->id }}" name="estados_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputnombreEstado">Nombre</label>
                              <input id="nombreEstado" type="text" class="form-control"  name="nombreEstado"   value="" disabled>
                            </div>
                          </div>  
                           
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left cerrar_modal" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO ESTADOS--> 

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
    
    function datos_estado(id) {
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
                                      
                        $("#nombreEstado").val(data.nombreEstado);           
                    
                    });
                  };
             };     
</script>
@endsection