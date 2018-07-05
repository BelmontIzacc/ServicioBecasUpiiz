<!DOCTYPE html>
<html>
<head>
	<title>Constancia de Registro</title>
</head>
<style>
  .letra{
    width: 100%;
    height: 100%;
    background-image: Templates/img/Firma.jpg;
	background-repeat: no-repeat;
  }
</style>
<body background="https://i.imgur.com/skuzQSZ.jpg" id="letra" style="background-repeat: no-repeat; background-position: center center;"> 
	<div class="col-md-12" align="Center">
		<br>
		<table align="Center">
			<tr>
				<td width="10" rowspan="4">
					<img src="https://i.imgur.com/ugGjMSR.jpg" width="80" height="90" align="right">
				</td>
				<td width="360" align="Center">
					<strong><FONT FACE="arial" size="14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSTITUTO POLIT&Eacute;CNICO NACIONAL</FONT></strong>
				</td>
				<td width="10" rowspan="4">
					<img src="https://i.imgur.com/Uq21MHj.jpg" width="80" height="80" align="left">
				</td>
			</tr>
			<tr>
				<td align="Center">
					<strong><font face="arial" size="13">UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERIA</font></strong>
				</td>
			</tr>
			<tr>
				<td align="Center">
					<strong><font face="arial" size="13">CAMPUS ZACATECAS</font></strong>
				</td>
			</tr>
			<tr>
				<td align="Center">
					<font face="arial" size="13">Comprobante de Registro</font>
				</td>
			</tr>
		</table>
		<br><br>
		<table align="Center">
			<tr>
				<td colspan="3">
					<p align="right">
						<h5 align="Center"><font face="arial" size="13">Servicio de Registro de Becas (SRBe)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$date->formatLocalized('%A %d de %B %Y')}}</font></h5>
					</p>
				</td>
			</tr>
			<tr>
				<td width="30">&nbsp;</td>
				<td align="Center" width="420">
					<p align="justify">
						<font face="arial" size="12">
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
						</font>
					</p>
				</td>
				<td width="30">&nbsp;</td>
			</tr>
					<tr>
						<td colspan="3">
							<p align="Center">
								<br><br><br><br>
								<img src="https://i.imgur.com/wEtjBJv.png" width="180" height="110">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________
							</p>
							<p>
								<h5 align="Center"><font face="arial">Firma de Validaci&oacute;n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma del Alumno</font></h5>
							</p>
						</td>
					</tr>
		</table>
	</div>
</body>
</html>