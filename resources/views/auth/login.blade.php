@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
      <div><h1 class="logo-name">SEC</h1></div>
      <h3>Aula de Medios</h3>
     
      <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}
       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
       </div>
       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
       </div>
       <button type="submit" class="btn btn-danger block full-width m-b">Entrar</button>

       <p class="text-muted text-center"><small>No tienes una cuenta?</small></p>
       <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Crear una cuenta</a>
      </form>
      <p class="m-t"> <small>Secretaria de Educacion y Cultura &copy; {{ date('Y') }}</small> </p>
    </div>
</div>
@endsection
