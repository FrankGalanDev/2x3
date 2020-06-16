@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado Plans</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Planes</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-10">
                <div class="block">
                  <div class="title">
                    <strong>Planes disponibles
                    
                      <a href="{{ ('planes/create') }}" class="text-success font-weight-light"><i class="fas fa-plus-circle p-4"> Crear</i>
                      </a>
                    </strong> 
                  </div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Prec.Mes</th>
                          <th>Prec.Sem</th>
                          <th>Prec.Año</th>
                          <th>Estado</th>
                          <th>Ver</th> 
                          <th>Modificar</th>
                          <th>Imprimir</th>
                           

                        </tr>
                      </thead>
                      <tbody>

                        @foreach($planes as $plan)
                        <?php 
                          $color ="";
                    
                          if  ($plan->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($plan->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >
                          
                          <td>{{ $plan->id }}</td>
                          <td>{{ $plan->nombrePlan }}</td>
                          <td>{{ $plan->precio_mes }}</td>
                          <td>{{ $plan->precio_semtre }}</td>
                          <td>{{ $plan->precio_año }}</td>
                          <td>{{ $plan->estado->nombreEstado }}</td>
                          
                          <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_plan" onclick = "datos_plan({{ $plan->id }})" value="{{$plan->id}}"><i  class="fa fa-fw fa-eye"></i> 
                             </button>
                          </td>

                          <td>
                            <a href="{{ asset('planes/'.$plan->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$plan->id}}"><i class="fa fa-fw fa-wrench"></i>
                              </button>
                            </a>
                          </td>
                          
                          <td>
                            <a href="{{ asset('planes/'.$plan->id.'/edit') }}">
                              <button class="btn btn-success btn-xs"  value="{{$plan->id}}"><i class="fas fa-print"></i>
                              </button>
                            </a>
                          </td>
                         

                        </tr>
                        @endforeach
                       {{ $planes->links() }}
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
                        <h3 class="box-title">Ver Plan</h3>
                      </div><!-- /.box-header -->
                           
                      <form  id="ver_plan"  class="form-horizontal"  enctype = "multipart/form-data" action="{{route('planes.index',$plan->id)}}"  style="width:100%;">  {{method_field('GET')}}<!--/INICIO FORMULARIO-->
                            
                            {{csrf_field()}}
                        <input id="{{$plan->id}}" type="hidden" value="{{ $plan->id }}" name="planes_id"> 
              
                        <div class="col-md-12">

                          <!--INICIO BOX BODY-->

                          <div>
                            <div class="form-group col-md-6">
                              <label id="modal_elem" for="inputnombrePlan">Nombre del Plan</label>
                              <input id="nombrePlan" type="text" class="form-control"  name="nombrePlan"   value="" disabled>
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
                              <label id="modal_elem" for="inputresumen">Resumen</label>
                              <textarea id="resumen" type="text" class="form-control"  name="resumen"   value="" disabled>
                              </textarea>
                            </div>
                          </div> 

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputinstalacion">Instalacion</label>
                              <input id="instalacion" type="text" class="form-control"  name="instalacion"   value="" disabled>
                            </div>
                          </div>

                           <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputblog">Blog</label>
                              <input id="blog" type="text" class="form-control"  name="blog"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputhosting">Hosting</label>
                              <input id="hosting" type="text" class="form-control"  name="hosting"   value="" disabled>
                            </div>
                          </div>
                        </div>  
                        
                        <div class="col-md-12">
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputdominio">Dominio</label>
                              <input id="dominio" type="text" class="form-control"  name="dominio"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputespacio_ilimitado">Espacio Ilim.</label>
                              <input id="espacio_ilimitado" type="text" class="form-control"  name="espacio_ilimitado"   value="" disabled>
                            </div>
                          </div>

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputtransferenc_ilim">Transf. Ilim.</label>
                              <input id="transferenc_ilim" type="text" class="form-control"  name="transferenc_ilim"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputcuentas_correo">Cuentas Correo</label>
                              <input id="cuentas_correo" type="text" class="form-control"  name="cuentas_correo"   value="" disabled>
                            </div>
                          </div>
                        </div>

                        
                        <div class="col-md-12">
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputagente">Agente</label>
                              <input id="agente" type="text" class="form-control"  name="agente"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputssl">SSL</label>
                              <input id="SSL" type="text" class="form-control"  name="SSL"   value="" disabled>
                            </div>
                          </div>
                          
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputatenc_telefónica">Atenc Telf.</label>
                              <input id="atenc_telefónica" type="text" class="form-control"  name="atenc_telefónica"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputproveedor">Proveedor</label>
                              <input id="proveedor" type="text" class="form-control"  name="proveedor"   value="" disabled>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputotros_proveedores">Otros Proveed</label>
                              <input id="otros_proveedores" type="text" class="form-control"  name="otros_proveedores"   value="" disabled>
                            </div>
                          </div>
                          
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputbackup">Backup</label>
                              <input id="backup" type="text" class="form-control"  name="backup"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputestadística">Estadísticas</label>
                              <input id="estadística" type="text" class="form-control"  name="estadística"   value="" disabled>
                            </div>
                          </div>

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputprotec_spam">Antispam</label>
                              <input id="protec_spam" type="text" class="form-control"  name="protec_spam"   value="" disabled>
                            </div>
                          </div>  
                        </div>  

                        <div class="col-md-12">
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputrestaurac_backup">Restauracion</label>
                              <input id="restaurac_backup" type="text" class="form-control"  name="restaurac_backup"   value="" disabled>
                            </div>
                          </div>

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputSEO_basico">SEO Básico</label>
                              <input id="SEO_basico" type="text" class="form-control"  name="SEO_basico"   value="" disabled>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputprecio_mes">Precio Mes</label>
                              <input id="precio_mes" type="text" class="form-control"  name="precio_mes"   value="" disabled>
                            </div>
                          </div>
                           <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputprecio_semtre">Precio Semestre</label>
                              <input id="precio_semtre" type="text" class="form-control"  name="precio_semtre"   value="" disabled>
                            </div>
                          </div>  

                          <div>
                            <div class="form-group col-md-4">
                              <label id="modal_elem" for="inputprecio_año">Precio Año</label>
                              <input id="precio_año" type="text" class="form-control"  name="precio_año"   value="" disabled>
                            </div>
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
                        $("#nombrePlan").val(data.nombrePlan);
                        $("#resumen").val(data.resumen);

                    //    $("#instalacion").val(data.instalacion);
                        if (data.instalacion ==1)
                          {$("#instalacion").val(si);}
                        else
                          {$("#instalacion").val(no);}

                    //    $("#blog").val(data.blog);
                         if (data.blog ==1)
                          {$("#blog").val(si);}
                        else
                          {$("#blog").val(no);}

                    //    $("#hosting").val(data.hosting);
                        if (data.hosting ==1)
                          {$("#hosting").val(si);}
                        else
                          {$("#hosting").val(no);}

                    //    $("#dominio").val(data.dominio);
                        if (data.dominio ==1)
                          {$("#dominio").val(si);}
                        else
                          {$("#dominio").val(no);}


                    //    $("#espacio_ilimitado").val(data.espacio_ilimitado);
                        if (data.espacio_ilimitado ==1)
                          {$("#espacio_ilimitado").val(si);}
                        else
                          {$("#espacio_ilimitado").val(no);}

                    //    $("#transferenc_ilim").val(data.transferenc_ilim);
                         if (data.transferenc_ilim ==1)
                          {$("#transferenc_ilim").val(si);}
                        else
                          {$("#transferenc_ilim").val(no);}                    

                    //    $("#cuentas_correo").val(data.cuentas_correo);
                         if (data.cuentas_correo ==1)
                          {$("#cuentas_correo").val(si);}
                        else
                          {$("#cuentas_correo").val(no);}                    

                    //    $("#agente").val(data.agente);
                         if (data.agente ==1)
                          {$("#agente").val(si);}
                        else
                          {$("#agente").val(no);}                    

                    //    $("#SSL").val(data.SSL);
                         if (data.SSL ==1)
                          {$("#SSL").val(si);}
                        else
                          {$("#SSL").val(no);}                    

                    //    $("#atenc_telefónica").val(data.atenc_telefónica);
                         if (data.atenc_telefónica ==1)
                          {$("#atenc_telefónica").val(si);}
                        else
                          {$("#atenc_telefónica").val(no);}                    

                    //    $("#proveedor").val(data.proveedor);
                         if (data.proveedor ==1)
                          {$("#proveedor").val(si);}
                        else
                          {$("#proveedor").val(no);}                    

                    //    $("#otros_proveedores").val(data.otros_proveedores);
                         if (data.otros_proveedores ==1)
                          {$("#otros_proveedores").val(si);}
                        else
                          {$("#otros_proveedores").val(no);}                    

                    //    $("#backup").val(data.backup);
                         if (data.backup ==1)
                          {$("#backup").val(si);}
                        else
                          {$("#backup").val(no);}                    

                    //    $("#estadística").val(data.estadística);
                         if (data.estadística ==1)
                          {$("#estadística").val(si);}
                        else
                          {$("#estadística").val(no);}                    

                    //    $("#protec_spam").val(data.protec_spam);
                         if (data.protec_spam ==1)
                          {$("#protec_spam").val(si);}
                        else
                          {$("#protec_spam").val(no);}                    

                    //    $("#restaurac_backup").val(data.restaurac_backup);
                         if (data.backup ==1)
                          {$("#backup").val(si);}
                        else
                          {$("#backup").val(no);}                    

                    //    $("#SEO_basico").val(data.SEO_basico);
                         if (data.SEO_basico ==1)
                          {$("#SEO_basico").val(si);}
                        else
                          {$("#SEO_basico").val(no);}                    

                        $("#precio_mes").val(data.precio_mes);
                        $("#precio_semtre").val(data.precio_semtre);
                        $("#precio_año").val(data.precio_año);          
                    
                    });
                  };
             };  

    
</script>
@endsection


