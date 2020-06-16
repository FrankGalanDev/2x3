@extends('layouts.escritorio_base')

@section('content')

<div class="container-fluid  mr-2 pl-2">
    <form  id="ver_estado" method="POST" class="form-horizontal"  enctype = "multipart/form-data" action="{{url('planes')}}"  enctype="multipart/form-data" style="width:100%;">  {{method_field('POST')}}<!--/INICIO FORMULARIO-->
    {{csrf_field()}}
         
         

    <!--INICIO BOX BODY-->

      <div class= "row ">
        
        <div class="form-group col-md-6">
          <label id="modal_elem" for="inputnombrePlan">Nombre</label>
          <input id="nombrePlan" type="text" class="form-control"  name="nombrePlan"  value="" placeholder="Nombre del Plan">
        </div>

        <div class="form-group col-md-10">
          <label id="modal_elem" for="inputresumen">Resumen</label>
          <textarea id="resumen" type="text" class="form-control"  name="resumen"  value="" placeholder="Resumen o descripcion del plan"></textarea>
        </div>


        
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
            </div> 
            
        </div>

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
            </div> 
            
        </div>

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
            </div> 
            
        </div>

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
            </div> 
            
        </div>
         

        <div class="form-group col-md-4">
          <label id="modal_elem" for="inputprec_mes">Precio Mes</label>
          <input id="prec_mes" type="text" class="form-control"  name="prec_mes"  value="" placeholder="precio mensual"></input>
        </div>
        
        <div class="form-group col-md-4">
          <label id="modal_elem" for="inputprec_semtre">Precio Semestre</label>
          <input id="prec_semtre" type="text" class="form-control"  name="prec_semtre"  value="" placeholder="Precio Semestral"></input>
        </div>

        <div class="form-group col-md-4">
          <label id="modal_elem" for="inputprec_año">Precio Año</label>
          <input id="prec_año" type="text" class="form-control"  name="prec_año"  value="" placeholder="Precio Anual"></input>
        </div>
        
        <div class="col-md-6">
          <label>Estado</label>
            <div class="input-group">
              <div class="input-group-addon"></div>
              <select  class="form-control"  id="estados_" onchange="asignar_estado_plan(this)"  style="width: 100%;">
                @foreach($estados as $esta)
                            
                  <option value="{{$esta->id}}" >
                    {{$esta->nombreEstado}}
                  </option>
                           
                @endforeach 
              </select> 
            </div> 
             <input type="hidden"  id="estados_id" name="estados_id" value="{{$esta->id}}" > 
        </div>




        
      </div>  
  

<!--INICIO FOOTER -->

      <div class="modal-footer edit">   
        <a href="{{ url('estados') }}" >
          <button id="btn-cancelar" type="button" class="btn btn-outline pull-left btn-info"><i  class="fa fa-window-close"></i>
            Cerrar
          </button>
        </a>

        <input id="btn-modificar"class="btn btn-outline pull-left  btn-success" type="submit" value=" Crear">  
        </input> 
        
      </div>                     
                               
      
    </form> <!--FINAL 3 FORMULARIO SITIO-->
  </div>




<script>

  function asignar_estado_plan(id) 
      {
      //  alert('loco');
      var x = id.options[id.selectedIndex].value;
      $("#estados_id").val(x);

        
      }
</script>
 @endsection 