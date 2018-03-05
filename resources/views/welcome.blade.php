@extends('layout')

@section('title')
<title>Inicio Servicio Becas</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
@stop

@section('content')
<div class="panel-body">
	<button type="button" class="btn btn-inline btn-warning"
			@if($valor == 2)
                disabled=""
            @elseif($valor == 1)                                    
            @endif
    >Registrar</button>
</div>

@stop

@section('scripts')
	<script src="{{asset('/Template/js/lib/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
@stop