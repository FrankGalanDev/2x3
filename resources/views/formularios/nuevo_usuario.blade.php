@extends('layouts.escritorio_base')

@section('content')

<!--------------------INICIO FORMULARIO CREAR CLIENTE------------------->

                     <div class="container">

<form class="well form-horizontal"  method="POST" action="{{ route('register') }}">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Nuevo Usuario</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label">Contacto</label>  
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="first_name" placeholder="Nombre completo" class="form-control"  type="text">
        </div>
    </div>
</div>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" >Email</label> 
    <div class="col-md-6">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
        @enderror
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nombre</label>  
  <div class="col-md-4">
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
        </span>
           @enderror
  </div>
</div>

 


<div class="col-md-6">
  <label>Estado</label>
    <div class="input-group">
      <div class="input-group-addon"></div>
        <select  class="form-control"  id="estados_" onchange="asignar_estado_user(this)"  style="width: 100%;">
          @foreach($estados as $esta)
                            
            <option value="{{$esta->id}}" >
              {{$esta->nombreEstado}}
            </option>
                           
          @endforeach 
        </select> 
    </div> 
  <input type="hidden"  id="estados_id" name="estados_id" value="{{$esta->id}}" > 
</div>

<div class="col-md-6">
  <label>Rol</label>
    <div class="input-group">
      <div class="input-group-addon"></div>
        <select  class="form-control"  id="roles_" onchange="asignar_rol_user(this)"  style="width: 100%;">
          @foreach($roles as $rol)
                            
            <option value="{{$rol->id}}" >
              {{$rol->nombreRol}}
            </option>
                           
          @endforeach 
        </select> 
    </div> 
  <input type="hidden"  id="roles_id" name="roles_id" value="{{$rol->id}}" > 
</div> 




<!-- Text input-->
<div class="form-group row">
  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

  <div class="col-md-4">
   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

     @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
      @enderror
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="639" class="form-control" type="text">
    </div>
  </div>
</div>


<div class="form-group">
    <label class="col-md-4 control-label" >Contraseña</label> 
    <div class="col-md-6">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
          @enderror
    </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" > Confirmar contraseña</label> 
    <div class="col-md-6">
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
     </div>
</div>



<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->


<script>
function asignar_estado_user(id) 
    {
    //  alert('loco');
    var x = id.options[id.selectedIndex].value;
    $("#sitios_id").val(x);
 
    }

</script>


@endsection

<!--INICIO TERCER FORMULARIO CAMBIO DATOS PERSONALES-->        