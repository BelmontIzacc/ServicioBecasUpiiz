@extends('layout2')
<?php
$index == 4;
?>
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
@include('alerts.formError')
@include('alerts.sessionAlert')
<body>
	<br><br><br><br><br><br><br><br><br><br>
  <div align="Center">
    <a class="btn-primary btn-lg bs" type="button" style="width: 300px; height: 90px; font-size: 25pt"
    	@if($valor == 2)
    		disabled=""
    	@elseif($valor == 1)
        href="{{asset('/registro')}}"
    	@endif 
    	>Registro
      </a>
  </div>
  <!--</body>-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="row">
        <hr>
          <div class="col-md-12">
            <div class="col-md-6">
              <a href="{{asset('/creditos')}}" class="muted pull-left">Creditos</a>
            </div>
            <div class="col-md-6">
              <a href="{{asset('/login')}}" class="muted pull-right">Administrador</a>
            </div>
          </div>
</div>
</body>
@stop

@section('scripts')
	<!--<script src="{{asset('/Template/js/lib/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
-->
	<script src="{{asset('/Templates/js/jquery-2.1.0.js')}}"></script>
	<script src="{{asset('/Templates/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/Templates/js/common-script.js')}}"></script>
	<script src="{{asset('/Templates/js/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('/Templates/js/jPushMenu.js')}}"></script>
	<script src="{{asset('/Templates/js/side-chats.js')}}"></script>
@stop