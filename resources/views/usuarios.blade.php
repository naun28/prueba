@extends('inspinia::layouts.auth')
@section('content')
<ul class="nav navbar-left-links navbar-left" style="font-size: 20px;">
        <li>
         <form id="login" action="{{ url('/home') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
         </form>
         <a href="" onclick="event.preventDefault();document.getElementById('login').submit();">
              <a href="{{ url('/home') }}"><i class="fa fa-reply" ></i>Inicio</a>
         </a>
        </li>
      </ul> 

<div class="middle-box text-center loginscreen   animated fadeInDown">

    <div>
        <div> <h1 class="logo-name">SEC</h1></div>
        <h3>Registrar Usuario</h3>
        
        <form class="m-t" role="form"  method="POST" action="{{ route('usuarios') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="Correo" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-danger block full-width m-b">Registrar</button>
        </form>
        <p class="m-t"> <small>Secretaria de Educacion y Cultura &copy; {{ date('Y') }}</small> </p>
    </div>
</div>
@endsection
