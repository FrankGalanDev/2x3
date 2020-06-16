@extends('layouts.app')     

@section('content')             
  <form method="POST" action="{{ route('login') }}" class="form-validate mb-4">
     @csrf
    <div class="form-group">
      <label for="email" class="label-material">{{ __('E-Mail Address') }}</label>                                
      <input id="email" type="email"  required data-msg="Por favor introduzca email" class="input-material form-control @error('email') is-invalid @enderror"name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
      
      
    </div>
                    
    <div class="form-group">
      <label for="password" class="label-material">{{ __('Password') }}</label>
      <input id="login-password" type="password" class="input-material form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
     
    </div>
    

    <div class="form-group terms-conditions text-center">
      <label for="remember" class="form-check-label"> {{ __('Recordarme ') }}</label><br>
      <input id="remember {{ old('remember') ? 'checked' : '' }}" name="remember" type="checkbox"  class="checkbox-template form-check-input">
      
    </div>                
   

    <button type="submit" class="btn btn-primary">
    {{ __('Entrar') }}
    </button>
                            
  </form>
  <!--  
    @if (Route::has('password.request'))               
  <a href="{{ route('password.request') }}" class="forgot-pass">
    {{ __('Olvidó sus datos?') }}
  </a>
  @endif
    <br>
  
  <small>¿Posee una cuenta? </small><a href="" class="signup">Alta</a>
   -->                     
@endsection              