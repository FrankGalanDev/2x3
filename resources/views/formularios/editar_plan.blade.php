@extends('layouts.escritorio_base')

@section('content')
<div class="container-fluid  mr-2 pl-2">
    <form  id="editar_plan" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('/planes/'.$plane->id)}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('PUT')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
      <input id="{{$plane->id}}" type="hidden" value="{{ $plane->id }}" name="planes_id">  
      <input id="url" type="hidden" value="{{ \Request::url() }}"></input>   

    <!--INICIO BOX BODY-->

    <!--------------------------------INICIO LINEA NOMBRE ESTADO-------------------------------------->

      <div class= "row ">
        <div class="form-group col-md-8">
          <label id="modal_elem" for="inputnombrePlan">Nombre </label>
          <input id="nombrePlan" type="text" class="form-control"  name="nombrePlan"   value="{{$plane->nombrePlan}}">
        </div>
                            
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_"   onchange="modificar_estado_plan(this)"  style="width: 100%;">
                
                 <option value="{{$plane->estados_id}}" selected disabled>{{$plane->estado['nombreEstado']}} </option>
                @foreach($estado as $esta)
                            
                  <option value="{{$esta['id']}}" >
                    {{$esta['nombreEstado']}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
            <input type="hidden"  id="estados_id" name="estados_id" value={{$plane->estados_id}}>
        </div>

      </div>  
    <!--------------------------------FINAL LINEA NOMBRE ESTADO-------------------------------------->


    <!--------------------------------INICIO LINEA RESUMEN  -------------------------->
      <div class ="row">
        <div class="form-group col-md-12">
          <label id="modal_elem" for="inputresumen">Resumen</label>
          <textarea id="resumen" type="text" class="form-control"  name="resumen"   value="{{$plane->resumen}}" >
          </textarea>
        </div>
                          
      </div>
  <!---------------------------------------------------------------------------------->    
      <div class="row">

        <div class="col-md-3">
          <label>Instalacion</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="instalacion"  style="width: 100%;">
                
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
               
              </select> 
              <input type=""  id="instalacion_" name="instalacion_" value={{$plane->instalacion}}>
            </div> 
            
        </div>
        
        <div class="col-md-3">
          <label>Blog</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="blog"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
              <input type="hidden"  id="blog_" name="blog_" value={{$plane->blog}}>
            </div> 
            
        </div>

        <div class="col-md-3">
          <label>Hosting</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="hosting"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="hosting_" name="hosting_" value={{$plane->hosting}}>

            </div> 
            
        </div>

        <div class="col-md-3">
          <label>Dominio</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="dominio"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="dominio_" name="dominio_" value={{$plane->dominio}}>
            </div> 
         </div>
 
      </div>
  <!----------------------------------------------------------------------------------->
      <div class="row">

        <div class="col-md-3">
          <label>Espacio Ilimitado</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="espacio_ilimitado"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="espacio_ilimitado_" name="espacio_ilimitado_" value={{$plane->espacio_ilimitado}}>
            </div> 
            
        </div>

        <div class="col-md-3">
          <label>Transferencia Ilimitada</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="transferenc_ilim"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="transferenc_ilim_" name="transferenc_ilim_" value={{$plane->transferenc_ilim}}>
            </div> 
            
        </div>

        <div class="col-md-3">
          <label>Cuentas correo</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="cuentas_correo"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="cuentas_correo_" name="cuentas_correo_" value={{$plane->cuentas_correo}}>
            </div> 
            
        </div>

        <div class="col-md-3">
          <label>Agente</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="agente"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="agente_" name="agente_" value={{$plane->agente}}>
            </div> 
        </div>

      </div>
 <!------------------------------------------------------------------------------------->
      <div class="row"> 

        <div class="col-md-3">
          <label>SSL</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="SSL"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="SSL_" name="SSL_" value={{$plane->SSL}}>
            </div> 
        </div>

        <div class="col-md-3">
          <label>Atencion Telefonica</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="atenc_telefónica"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="atenc_telefónica_" name="atenc_telefónica_" value={{$plane->atenc_telefónica}}>
            </div> 
        </div>


        <div class="col-md-3">
          <label>Proveedor</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="proveedor"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="proveedor_" name="proveedor_" value={{$plane->proveedor}}>
            </div> 
        </div>

        <div class="col-md-3">
          <label>Otros Proveedor</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="otros_proveedores"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="otros_proveedores_" name="otros_proveedores_" value={{$plane->otros_proveedores}}>
            </div> 
          </div>
     
      </div>
  <!------------------------------------------------------------------------------------------->
      <div  class="row">

        <div class="col-md-3">
          <label>Backup</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="backup"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="backup_" name="backup_" value={{$plane->backup}}>
            </div> 
        </div>
        
         <div class="col-md-3">
          <label>Estadisticas</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="estadística"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="estadística_" name="estadística_" value={{$plane->estadística}}>
            </div>
        </div>

         <div class="col-md-3">
          <label>Antispam</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="protec_spam"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select> 
               <input type="hidden"  id="protec_spam_" name="protec_spam_" value={{$plane->protec_spam}}>
            </div> 
        </div>
        
         <div class="col-md-3">
          <label>Restauracion Backup</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="restaurac_backup"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select>
               <input type="hidden"  id="restaurac_backup_" name="restaurac_backup_" value={{$plane->restaurac_backup}}> 
            </div>
        </div>

         <div class="col-md-3">
          <label>SEO Basico</label>
             
            <div class="input-group-addon"> 
              <select  class="form-control"  id="SEO_basico"  style="width: 100%;">
                <option value="0">
                  No
                </option>

                <option value="1">
                  Si
                </option>
              </select>
               <input type="hidden"  id="SEO_basico_" name="SEO_basico_" value={{$plane->SEO_basico}}> 
            </div>   
        </div>

      </div>   

  <!--------------------------------------------------------------------------------------->
      <div class="row">  

        <div class="form-group col-md-4">
          <label id="modal_elem" for="inputprec_mes">Precio Mes</label>
          <input id="prec_mes" type="text" class="form-control"  name="precio_mes"  value="{{$plane->precio_mes}}" placeholder="precio mensual"></input>
        </div>
        
        <div class="form-group col-md-4">
          <label id="modal_elem" for="inputprec_semtre">Precio Semestre</label>
          <input id="prec_semtre" type="text" class="form-control"  name="precio_semtre"  value="{{$plane->precio_semtre}}" placeholder="Precio Semestral"></input>
        </div>

        <div class="form-group col-md-4">
          <label id="modal_elem" for="inputprec_año">Precio Año</label>
          <input id="prec_año" type="text" class="form-control"  name="precio_año"  value="{{$plane->precio_año}}" placeholder="Precio Anual"></input>
        </div>

      </div>
  <!--------------------------------------------------------------------------------------->                                

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('planes') }}" >
          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i  class="fa fa-window-close"></i>
            Cerrar
          </button>
        </a>

        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value="Modificar">  
        </input> 
        
      </div>                     
                               
      
    </form> <!--FINAL 3 FORMULARIO SITIO-->
  </div>
 <script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
  <script>
$(document).ready(function(){  
   
  var inst_r = document.getElementById("instalacion_").value;
  var instalacion = $('#instalacion').val(inst_r);
 
  var blog_r = document.getElementById("blog_").value;
  var blog = $('#blog').val(blog_r);

  var host_r = document.getElementById("hosting_").value;
  var hosting = $('#hosting').val(host_r);

  var dom_r = document.getElementById("dominio_").value;
  var dominio = $('#dominio').val(dom_r);

  var esp_r = document.getElementById("espacio_ilimitado_").value;
  var espacio_ilimitado = $('#espacio_ilimitado').val(esp_r);

  var trans_r = document.getElementById("transferenc_ilim_").value;
  var transferenc_ilim = $('#transferenc_ilim').val(trans_r);

  var corr_r = document.getElementById("cuentas_correo_").value;
  var cuentas_correo = $('#cuentas_correo').val(corr_r);

  var agen_r = document.getElementById("agente_").value;
  var agente = $('#agente').val(agen_r);

  var ssl_r = document.getElementById("SSL_").value;
  var ssl = $('#SSL').val(ssl_r);

  var telef_r = document.getElementById("atenc_telefónica_").value;
  var atenc_telefónica = $('#atenc_telefónica').val(telef_r);

  var prov_r = document.getElementById("proveedor_").value;
  var proveedor = $('#proveedor').val(prov_r);

  var otroprov_r = document.getElementById("otros_proveedores_").value;
  var otros_proveedores = $('#otros_proveedores').val(otroprov_r);

  var back_r = document.getElementById("backup_").value;
  var backup = $('#backup').val(back_r);

  var estad_r = document.getElementById("estadística_").value;
  var estadística = $('#estadística').val(estad_r);

  var antisp_r = document.getElementById("protec_spam_").value;
  var protec_spam = $('#protec_spam').val(antisp_r);

  var restaurac_r = document.getElementById("restaurac_backup_").value;
  var restaurac_backup = $('#restaurac_backup').val(restaurac_r);

  var seo_r = document.getElementById("SEO_basico_").value;
  var seo = $('#SEO_basico').val(seo_r);

 }); 

    function modificar_estado_plan(id) 
{
 //alert('loco');

 var x = id.options[id.selectedIndex].value;
$("#estados_id").val(x); 

  
}
  </script>
 @endsection