@extends('inspinia::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('inspinia::layouts.main-panel.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Inicio', 'url' => route('home') ]
  ]
])
@endsection

@section('sidebar-menu')
  <ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li class="active">
      <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
    </li>
    <li class="active">
      <a href="{{ route('usuarios') }}"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Agregar Usuarios</span></a>
    </li>
    <li class="active">
      <a href="../home/agendar"><i class="fa fa-address-book"></i> <span class="nav-label">Agendar Rutas</span></a>
    </li>
    <li class="active">
      <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Modulo 3</span></a>
    </li>
  </ul>
@endsection
