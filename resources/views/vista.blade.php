@extends('layout')

@section('title')
<title>Acuse de Registro</title>
@stop

@section('css')
@stop

@section('popUp')
<!--@include('alerts.sessionAlert')
@include('alerts.formError')
<META HTTP-EQUIV="refresh" CONTENT="2; url=/descarga">
-->
<div class="col-md-13"><br>
	<div class="col-md-12">
		<div class="block-web">
			<div class="header">
				<br>
				<table align="Center" width="1000">
					<tr>
						<td>
							<img src="{{asset('/Templates/img/IPN.png')}}" width="80" height="90" align="right">
						</td>
						<td>
							<h5 class="content-header" align="Center"><strong><FONT FACE="arial">INSTITUTO POLIT&Eacute;CNICO NACIONAL</FONT></strong></h5>
							<h6 class="content-header" align="Center"><strong><font face="arial">UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERIA<br>CAMPUS ZACATECAS<br><br>Comprobante de Registro</font></strong></h6>
						</td>
						<td>
							<img src="{{asset('/Templates/img/upiiz_avatar.png')}}" width="70" height="70" align="left">
						</td>
					</tr>
				</table>
			</div>
			<br><br>
			<div class="porlets-content">
				<table align="Center" width="1000">
					<tr>
						<td colspan="3">
							<p align="right">
							<h5 align="Center"><font face="arial">Servicio de Registro de Becas (SRBe)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$date->formatLocalized('%A %d de %B %Y')}}</font></h5>
								<br>
							</p>
						</td>
					</tr>
					<tr>
						<td width="90"></td>
						<td>
							<p align="justify">
								<h5 align="justify"><font face="arial">
									<!--Nombre:&nbsp;&nbsp;&nbsp;Olga Alejandra Beltran Silva-->
									Nombre:&nbsp;&nbsp;&nbsp;{{$student->__toString()}}
									<br>
									<!--Boleta:&nbsp;&nbsp;&nbsp;2016670007-->
									Boleta:&nbsp;&nbsp;&nbsp;{{$student->boleta}}
									<br>
									<!--Programa Acad&eacute;mico:&nbsp;Ing. en Sistemas Computacionales-->
									Programa Acad&eacute;mico:&nbsp;{{$student->carrer->nombre}}
									<br><br>
									<!--No. de Registro: 01-->
									No. de Registro: {{$student->id}}
								</font></h5>
							</p>
						</td>
						<td width="90"><td>
					</tr>
					<tr>
						<td colspan="3">
							<p align="Center">
								<br>
								<img src="{{asset('/Templates/img/firma.jpg')}}" width="170" height="100">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________
							</p>
							<p>
								<h5 align="Center"><font face="arial">Firma de Validaci&oacute;n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma del Alumno</font></h5>
							</p>
						</td>
					</tr>
				</table>
				<br><br><br><br><br><br>
				<table align="Center" width="1000">
					<tr>
						<!--<td align="Center">
							<a class="btn-primary btn-lg bs" type="button" style="font-size: 15pt" href="{{asset('/descargarPDF')}}">Descargar</a>
						</td>-->
						<td align="Center">
							<a class="btn-primary btn-lg bs" type="button" style="font-size: 17pt" href="{{asset('/')}}" onclick="descargarPDF();">Finalizar y Descargar</a>
							<!--<a class="btn-primary btn-lg bs" type="button" style="font-size: 17pt" href="{{asset('/')}}">Finalizar</a>-->
						</td>
					</tr>
				</table>
				<br><br>
			</div>
		</div>
	</div>
</div>
@stop

@section('subHead')
@stop

@section('content')
@stop

@section('scripts')
<script src="{{asset('/Templates/js/custom/pdf.js')}}"></script>
@stop