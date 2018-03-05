@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="ibox float-e-margins">
            <div class="ibox-title"><h5>INICIO</h5>
              <div class="ibox-tools"> <span class="label label-primary pull-right">Bienvenido</span></div>
            </div>

            <div class="ibox-content">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                Pagina principal
            </div>
        </div>
    </div>
</div>
@endsection
