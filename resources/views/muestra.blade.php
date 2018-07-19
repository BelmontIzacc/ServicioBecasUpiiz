@extends('layout')

@section('title')
<title>Muestra Servicio Becas</title>
@stop

@section('css')
@stop

@section('popUp')
<style>
	#letra{
		font-size: 120%;
	}
</style>
<!--@include('alerts.sessionAlert')
@include('alerts.formError')-->
<div class="col-md-13"><br>
	<div class="col-md-12">
		<div class="block-web">
			<div class="header">
				<h3 class="content-header" align="Center"><strong>Tu Informaci&oacute;n</strong></h3>
			</div>
			<div class="porlets-content">
				<div class="row" id="letra">
					<div class="col-md-12">
						<table class="table table-bordered">
							<tr class="success">
								<td align="Center">
									<label>{{$student->nombre}}</label>
								</td>
								<td align="Center">
									<label>{{$student->apellidoPaterno}}</label>
								</td>
								<td align="Center">
									<label>{{$student->apellidoMaterno}}</label>
								</td>
								<td align="Center">
									<label>{{$student->edad}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Nombre(s)</strong></label>
								</td>
								<td align="Center">
									<label><strong>Apellido Paterno</strong></label>
								</td>
								<td align="Center">
									<label><strong>Apellido Materno</strong></label>
								</td>
								<td align="Center">
									<label><strong>Edad</strong></label>
								</td>
							</tr>
							<tr class="success">
								<td align="Center">
									<label>{{$student->boleta}}</label>
								</td>
								<td align="Center">
									<label>{{$student->carrer->nombre}}</label>
								</td>
								<td align="Center">
									<label>{{$student->semestre}}</label>
								</td>
								<td align="Center">
									<label>{{$student->grupo}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Boleta</strong></label>
								</td>
								<td align="Center">
									<label><strong>Carrera</strong></label>
								</td>
								<td align="Center">
									<label><strong>Semestre</strong></label>
								</td>
								<td align="Center">
									<label><strong>Grupo</strong></label>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<br>
				<div class="row" id="letra">
					<div class="col-md-12">
						<table class="table table-bordered">
							<tr class="success">
								<td align="Center">
									<label>{{$student->antecedentes->promActual}}</label>
								</td>
								<td align="Center">
									<label>{{$student->antecedentes->studentGrant->nombre}}</label>
								</td>
								<td align="Center">
									@if(($student->antecedentes->actualBeca)=="")
										<label>Ninguna</label>
									@else
										<label>{{$student->antecedentes->actualBeca}}</label>
									@endif
								</td>
								<td align="Center" colspan="2">
									<label>{{$student->antecedentes->historiaAC}}</label>
								</td>
								<td align="Center">
									@if(($student->antecedentes->licenciatura)=="")
										<label>Ninguna</label>
									@else
										<label>{{$student->antecedentes->licenciatura}}</label>
									@endif
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Promedio Actual</strong></label>
								</td>
								<td align="Center">
									<label><strong>Beca a Solicitar</strong></label>
								</td>
								<td align="Center">
									<label><strong>Beca Actual</strong></label>
								</td>
								<td align="Center" colspan="2">
									<label><strong>Historia Acad&eacute;mica</strong></label>
								</td>
								<td align="Center">
									<label><strong>Licenciatura</strong></label>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<br>
				<div class="row" id="letra">
					<div class="col-md-12">
						<table class="table table-bordered">
							<tr class="success">
								<td align="Center">
									<label onshow="foraneo($student->vivienda->municipality->id)">{{$student->vivienda->municipality->nombre}}</label>
								</td>
								<td align="Center">
									<label>{{$student->vivienda->state->nombre}}</label>
								</td>
								<td align="Center">
									<label>{{$student->vivienda->habitantes}}</label>
								</td>
								<td align="Center">
									<label>{{$student->vivienda->habitaciones}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Municipio</strong></label>
								</td>
								<td align="Center">
									<label><strong>Estado</strong></label>
								</td>
								<td align="Center">
									<label><strong>Habitantes de tu casa</strong></label>
								</td>
								<td align="Center">
									<label><strong>Habitaciones de tu casa</strong></label>
								</td>
							</tr>
							<tr class="success">
								<td align="Center">
									<label>{{$student->vivienda->typeHouse->nombre}}</label>
								</td>
								<td align="Center">
									<label>{{$student->vivienda->residencia}}</label>
								</td>
								<td align="Center">
									@if(($student->vivienda->pagoMensual)=="")
										<label>Ninguno</label>
									@else
										<label>{{$student->vivienda->pagoMensual}}</label>
									@endif
								</td>
								<td align="Center" colspan="2">
									<label>{{$student->vivienda->calle}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Tipo de Casa</strong></label>
								</td>
								<td align="Center">
									<label><strong>Residencia</strong></label>
								</td>
								<td align="Center">
									<label><strong>Pago Mensual de Renta</strong></label>
								</td>
								<td align="Center">
									<label><strong>Calle</strong></label>
								</td>
							</tr>
							<tr class="success">
								<td align="Center">
									<label>{{$student->vivienda->colonia}}</label>
								</td>
								<td align="Center">
									<label>{{$student->vivienda->codigoPostal}}</label>
								</td>
								<td align="Center">
									@if(($student->vivienda->numInterior)=="")
										<label>Ninguno</label>
									@else
										<label>{{$student->vivienda->numInterior}}</label>
									@endif
								</td>
								<td align="Center" colspan="2">
									<label>{{$student->vivienda->numExterior}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Colonia</strong></label>
								</td>
								<td align="Center">
									<label><strong>C&oacute;digo Postal</strong></label>
								</td>
								<td align="Center">
									<label><strong>No. Interior</strong></label>
								</td>
								<td align="Center">
									<label><strong>No. Exterior</strong></label>
								</td>
							</tr>
							<tr class="success">
								<td align="Center" colspan="2">
									<label>{{$student->vivienda->tiempo}} hrs</label>
								</td>
								<td align="Center" colspan="2">
									<label>{{$student->vivienda->transport->nombre}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center" colspan="2">
									<label><strong>Tiempo en llegar a la escuela</strong></label>
								</td>
								<td align="Center" colspan="2">
									<label><strong>Medio de transporte</strong></label>
								</td>
							</tr>
							<tr class="success" @if((($student->vivienda->municipality->id)==17) || (($student->vivienda->municipality->id)==58))
										style = "display:none;"
									@endif>
								<td align="Center">
									<label>{{$student->vivienda->viajeMensual}}</label>
								</td>
								<td align="Center">
									<label>{{$student->vivienda->transporte}}</label>
								</td>
								<td align="Center" colspan="2">
									<label>{{$student->vivienda->gastoMensual}}</label>
								</td>
							</tr>
							<tr @if((($student->vivienda->municipality->id)==17) || (($student->vivienda->municipality->id)==58))
										style = "display:none;"
									@endif>
								<td align="Center">
									<label><strong>Veces Viaje Mensual como For&aacute;neo</strong></label>
								</td>
								<td align="Center">
									<label><strong>Transporte como For&aacute;neo</strong></label>
								</td>
								<td align="Center" colspan="2">
									<label><strong>Gasto Mensual de Transporte como For&aacute;neo</strong></label>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<br>
				<div class="row" id="letra">
					<div class="col-md-12">
						<table class="table table-bordered">
							<tr class="success">
								<td align="Center">
									<label>{{$student->gasto->ingresoMensual}}</label>
								</td>
								<td align="Center">
									<label>{{$student->gasto->gastoMensual}}</label>
								</td>
								<td align="Center">
									<label>{{$student->gasto->noIntegrantes}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Ingreso Mensual de tu Familia</strong></label>
								</td>
								<td align="Center">
									<label><strong>Gasto Mensual de tu Familia</strong></label>
								</td>
								<td align="Center">
									<label><strong>No. de Integrantes</strong></label>
								</td>
							</tr>
							<tr class="success">
								<td align="Center">
									<label>{{$student->gasto->apoyo}}</label>
								</td>
								<td align="Center">
									<label>{{$student->gasto->trabajo}}</label>
								</td>
								<td align="Center">
									<label>{{$student->gasto->dependencia}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>No. de Personas que aportan a los gastos</strong></label>
								</td>
								<td align="Center">
									<label><strong>Trabajas</strong></label>
								</td>
								<td align="Center">
									<label><strong>Dependencia de tus padres</strong></label>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<br>
				<div class="row" id="letra">
					<div class="col-md-12">
						<table class="table table-bordered">
							<tr class="success">
								<td align="Center">
									<label>{{$student->personales->telCasa}}</label>
								</td>
								<td align="Center">
									<label>{{$student->personales->telCelular}}</label>
								</td>
								<td align="Center">
									<label>{{$student->personales->telTutor}}</label>
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Tel&eacute;fono de casa</strong></label>
								</td>
								<td align="Center">
									<label><strong>Tel&eacute;fono celular</strong></label>
								</td>
								<td align="Center">
									<label><strong>Tel&eacute;fono del Tutor</strong></label>
								</td>
							</tr>
							<tr class="success">
								<td align="Center">
									<label>{{$student->personales->nomTutor}}</label>
								</td>
								<td align="Center" colspan="2">
									@if(($student->personales->enfermedades)=="")
										<label>Ninguna</label>
									@else
										<label>{{$student->personales->enfermedades}}</label>
									@endif
								</td>
							</tr>
							<tr>
								<td align="Center">
									<label><strong>Nombre del Tutor</strong></label>
								</td>
								<td align="Center" colspan="2">
									<label><strong>Enfermedades</strong></label>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<br><br>
				<input type="hidden" value="{{$student->id}}" id="studentId" name="studentId">
				<div class="row">
					<div class="col-md-12">
						<table align="Center" width="700">
							<tr>
								<td class="col-md-6" align="left">
									<a class="btn-danger btn-lg bs" type="button" style="font-size: 15pt" href="{{asset('/editar')}}">Editar</a>
								</td>
								<td class="col-md-6" align="right">
									<a class="btn-primary btn-lg bs" type="button" style="font-size: 15pt" href="{{asset('/muestraPDF')}}" onclick="descargarPDF();">Confirmar</a>
								</td>
							</tr>
						</table>
					</div>
				</div>

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