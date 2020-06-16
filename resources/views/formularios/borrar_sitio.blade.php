@extends('layouts.escritorio_base')

@section('content')
<div>


       <form  id="ver_estado"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('sitios.destroy',$sitio->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$sitio->nombre}}" type="hidden" value="{{ $sitio->nombre }}" name="estado_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputnombre">Nombre</label>
                              <input id="nombreEstado" type="text" class="form-control"  name="nombreEstado"   value="{{$sitio->nombre}}" disabled>
                            </div>
                          </div>  
                           
                        <div class="modal-footer edit">   <!--INICIO FOOTER -->
                          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                           
                        </div>   <!--/FINAL FOOTER-->
                      </form> <!--FINAL 3 FORMULARIO TIPOS PERSONALES--> 

    <script>
     function datos_sitios(id) {
      // alert('loco'); 

      var url = $('#url').val();
      // alert(url);
      var seleccionado = id;
      // alert(seleccionado);

      if (seleccionado)
            {    
                
                
               
                var data = $.get(url+'/'+seleccionado, function (data) 
                    {                                      
                        $("#id").val(data.id);
                        $("#estados_id").val(data.estados_id);
                        $("#nombre_sitio").val(data.nombre_sitio);
                        $("#url_sitio").val(data.url_sitio);
                        $("#aplicacion_sitio").val(data.aplicacion_sitio);
                        $("#ip_FTP").val(data.ip_FTP);
                        $("#user_FTP").val(data.user_FTP);
                        $("#pass_FTP").val(data.pass_FTP);
                       
                        $("#nombre_bd").val(data.nombre_bd); 
                        $("#usuario_bd").val(data.usuario_bd);
                        $("#pass_bd").val(data.pass_bd);
                        $("#port_conex").val(data.port_conex);
                        $("#host_conex").val(data.host_conex);
                        $("#socket").val(data.socket);
                        $("#hora_deseada").val(data.hora_deseada); 
                         
                    
                    });
                  };
                }
  </script>  








@endsection

 