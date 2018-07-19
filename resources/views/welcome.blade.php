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
<style type="text/css">
  #footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:70px;
   width:100%;
  }
</style>
@include('alerts.formError')
@include('alerts.sessionAlert')
<!--<div class="alert alert-info" align="Center">
  <p>Si tienes algun problema acude al Servicio de Becas</p>
</div>-->
<body>
  <table>
    <tr>
      <th width="200">
        <div class="alert alert-info" align="Center">
            <p>Si tienes algun problema acude al Servicio de Becas</p>
        </div>
      </th>
    </tr>
  </table>
	<br><br><br>
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
  <!--</body>
<br><br><br><br><br><br><br><br><br><br><br>-->
<div class="row" id="footer">
        <hr>
          <div class="col-md-12">
            <div class="col-md-6">
              <a href="{{asset('/creditos')}}" class="muted pull-left">Cr&eacute;ditos</a>
            </div>
            <div class="col-md-6">
              <a href="{{asset('/login')}}" class="muted pull-right">Administrador</a>
            </div>
          </div>
</div>
<br><br>
</body>
@stop

@section('scripts')
	<script src="{{asset('/Templates/js/jquery-2.1.0.js')}}"></script>
	<script src="{{asset('/Templates/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/Templates/js/common-script.js')}}"></script>
	<script src="{{asset('/Templates/js/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('/Templates/js/jPushMenu.js')}}"></script>
	<script src="{{asset('/Templates/js/side-chats.js')}}"></script>
@stop