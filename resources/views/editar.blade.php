@extends('layout')

@section('title')
<title>Edicion Servicio Becas</title>
@stop

@section('css')
<script type="text/javascript">
  function foraneo(f){
    ocul = document.getElementById("viajeMensual");
    if ((f.value == "58") && (f.value == "17")) {
        ocul.style = 'disabled';
      }
      else{
      }
  }
</script>
@stop

@section('popUp')
<style>
  #letra{
    font-size: 120%;
  }
</style>
<div class="col-md-13"><br>
{!!Form::model($student,array('url'=>'/muestra', 'method'=>'post'))!!}
  {{csrf_field()}}
            @if(!$errors->isEmpty())
              <div class="alert alert-danger">
                    <p><strong>Ooops!</strong>Errores:</p>
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
              </div>
            @endif
  <div class="col-md-12">
    <div class="block-web">
      <div class="header">
        <h3 class="content-header" align="Center"><strong>Tu Informaci&oacute;n</strong></h3>
      </div>
      <div class="porlets-content">
<!--////////////////Primera Parte-////////////////-->
        <div class="row" id="letra">
          <div class="col-md-12">
            <table class="table table-bordered">
              <tr class="success">
                <td align="Center">
                  {!!Form::text('nombre',$student->nombre, ['class'=>'form-control', 'id'=>'nombre'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('apellidoPaterno',$student->apellidoPaterno, ['class'=>'form-control', 'id'=>'apellidoPaterno'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('apellidoMaterno',$student->apellidoMaterno, ['class'=>'form-control', 'id'=>'apellidoMaterno'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('edad',$student->edad, ['class'=>'form-control', 'id'=>'edad'])!!}
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
                  {!!Form::text('boleta',$student->boleta, ['class'=>'form-control', 'id'=>'boleta'])!!}
                </td>
                <td align="Center">
                  {!!Form::select('carrera',$carrera,$student->carrer->id,['class'=>'select2 form-control'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('semestre',$student->semestre, ['class'=>'form-control', 'id'=>'semestre', 'placeholder'=>'Semestre'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('grupo',$student->grupo, ['class'=>'form-control', 'id'=>'grupo'])!!}
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
<!--////////////////Segunda Parte-////////////////-->
        <br>
        <div class="row" id="letra">
          <div class="col-md-12">
            <table class="table table-bordered">
              <tr class="success">
                <td align="Center">
                  {!!Form::text('promActual',$student->antecedentes->promActual, ['class'=>'form-control', 'id'=>'promActual'])!!}
                </td>
                <td align="Center">
                  {!!Form::select('beca', $beca, $student->antecedentes->studentGrant->id, ['class'=>'select2 form-control'])!!}
                </td>
                <td align="Center">
                  @if(($student->antecedentes->actualBeca)=="")
                    <div class="col-sm-12">
                        <div class="rdio rdio-primary">
                          <input type="radio" name="becaA" value="si" id="becaA" onclick="">
                          <label>Si</label> &nbsp;&nbsp;
                          <input type="radio" name="becaA" value="no" id="becaAA" checked>
                          <label>No</label>
                        </div>
                      </div>
                  @else
                    <div class="col-sm-12">
                        <div class="rdio rdio-primary">
                          <input type="radio" name="becaA" value="si" id="becaA" checked>
                          <label>Si</label> &nbsp;&nbsp;
                          <input type="radio" name="becaA" value="no" id="becaAA">
                          <label>No</label>
                        </div>
                      </div>
                  @endif
                </td>
                <td align="Center">
                  {!!Form::select('actualBeca',$beca,0, ['class'=>'select2 form-control','placeholder'=>'Selecciona Tu Beca'])!!}
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
                  <label><strong>¿Cuentas con una beca actualmente?</strong></label>
                </td>
                <td align="Center">
                  <label><strong>¿Cuál?</strong></label>
                </td>
              </tr>
              <tr class="success">
                <td align="Center" colspan="2">
                  <select name="historiaAC">
                      <option>Selecciona una opcion</option>
                      <option value="1">Regular</option>
                      <option value="2">Irregular</option>
                  </select>
                </td>
                <td align="Center">
                  @if(($student->antecedentes->licenciatura)=="")
                    <div class="col-sm-12">
                        <div class="rdio rdio-primary">
                          <input type="radio" name="lic" value="si" id="lic">
                          <label>Si</label> &nbsp;&nbsp;
                          <input type="radio" name="lic" value="no" id="licA" checked>
                          <label>No</label>
                        </div>
                      </div>
                  @else
                    <div class="col-sm-12">
                        <div class="rdio rdio-primary">
                          <input type="radio" name="lic" value="si" id="lic" checked>
                          <label>Si</label> &nbsp;&nbsp;
                          <input type="radio" name="lic" value="no" id="licA">
                          <label>No</label>
                        </div>
                      </div>
                  @endif
                </td>
                <td align="Center">
                  {!!Form::text('licenciatura',$student->antecedentes->licenciatura, ['class'=>'col-sm-3 form-control', 'id'=>'licenciatura'])!!}
                </td>
              </tr>
              <tr>
                <td align="Center" colspan="2">
                  <label><strong>Historia Acad&eacute;mica</strong></label>
                </td>
                <td align="Center">
                  <label><strong>¿Cuentas con una licenciatura termianda?</strong></label>
                </td>
                <td align="Center">
                  <label><strong>¿Cuál?</strong></label>
                </td>
              </tr>
            </table>
          </div>
        </div>
<!--////////////////Tercera Parte-////////////////-->
        <br>
        <div class="row" id="letra">
          <div class="col-md-12">
            <table class="table table-bordered">
              <tr class="success">
                <td align="Center">
                  {!!Form::select('municipio',$municipio,$student->vivienda->municipality->id, ['class'=>'select2 form-control','onchange'=>'foraneo(this)'])!!}
                </td>
                <td align="Center">
                  {!!Form::select('estado',$estado,$student->vivienda->state->id, ['class'=>'select2 form-control'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('habitantes',$student->vivienda->habitantes, ['class'=>'col-sm-6 form-control', 'id'=>'habitantes'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('habitaciones',$student->vivienda->habitaciones, ['class'=>'col-sm-6 form-control', 'id'=>'habitaciones'])!!}
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
                  {!!Form::select('tCasa',$tCasa,$student->vivienda->typeHouse->id, ['class'=>'select2 form-control'])!!}
                </td>
                <td align="Center">
                    <label>
                      <select class="form-control" name="residencia">
                            <option>Selecciona una opcion</option>
                            <option value="1">Permanente</option>
                            <option value="2">Prestada</option>
                            <option value="3">Rentada</option>
                      </select>
                    </label>
                </td>
                <td align="Center">
                  {!!Form::text('pagoMensual',null, ['class'=>'col-sm-6 form-control', 'id'=>'pagoMensual'])!!}
                </td>
                <td align="Center" colspan="2">
                  {!!Form::text('calle',$student->vivienda->calle,['class'=>'col-sm-6 form-control', 'id'=>'calle'])!!}
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
                  {!!Form::text('colonia',$student->vivienda->colonia, ['class'=>'col-sm-6 form-control', 'id'=>'colonia'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('codigoPostal',$student->vivienda->codigoPostal,['class'=>'col-sm-6 form-control', 'id'=>'codigoPostal'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('numInterior',$student->vivienda->numInterior,['class'=>'col-sm-6 form-control', 'id'=>'numInterior'])!!}
                </td>
                <td align="Center" colspan="2">
                  {!!Form::text('numExterior',$student->vivienda->numExterior, ['class'=>'col-sm-6 form-control', 'id'=>'numExterior'])!!}
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
                  <select class="form-control" name="tiempo">
                    <option>Selecciona una Opcion</option>
                    <option value="0 - 0.15">0 a 15 min</option>
                    <option value="0.15 - 0.30">15 a 30 min</option>
                    <option value="0.30 - 1">30 a 1 hr</option>
                    <option value="1 - 1.30">1 a 1.30 hrs</option>
                    <option value="1.30 - 2">1.30 a 2 hrs</option>
                    <option value="2 - +">2 a mas hrs</option>
                  </select>
                </td>
                <td align="Center" colspan="2">
                  {!!Form::select('transporte', $transporte,$student->vivienda->transport->id, ['class'=>'select2 form-control'])!!}
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
            </table>
          </div>
        </div>
        <br>
        <div class="row" id="letra">
          <div class="col-md-12">
            <table class="table table-bordered">
              <tr class="success">
                <td align="Center">
                {!!Form::text('viajeMensual',$student->vivienda->viajeMensual, ['class'=>'form-control', 'id'=>'viajeMensual'])!!}
                </td>
                <td align="Center">
                  {!!Form::select('transporte2',$transporte,0, ['class'=>'select2 form-control','placeholder'=>'Selecciona una Opcion'])!!}
                </td>
                <td align="Center" colspan="2">
                  {!!Form::text('gastoMensual2',$student->vivienda->gastoMensual, ['class'=>'form-control', 'id'=>'gastoMensual2'])!!}
                </td>
              </tr>
              <tr>
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
<!--////////////////Cuarta Parte-////////////////-->
        <br>
        <div class="row" id="letra">
          <div class="col-md-12">
            <table class="table table-bordered">
              <tr class="success">
                <td align="Center">
                  {!!Form::text('ingresoMensual',$student->gasto->ingresoMensual, ['class'=>'form-control', 'id'=>'ingresoMensual'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('gastoMensual',$student->gasto->gastoMensual, ['class'=>'form-control', 'id'=>'gastoMensual'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('noIntegrantes',$student->gasto->noIntegrantes, ['class'=>'form-control', 'id'=>'noIntegrantes'])!!}
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
                  {!!Form::text('apoyo',$student->gasto->apoyo,['class'=>'form-control', 'id'=>'apoyo'])!!}
                </td>
                <!--<td align="Center">
                  <label>{{$student->gasto->trabajo}}</label>
                </td>-->
                <td align="Center">
                  @if(($student->gasto->trabajo)=="No")
                    <div class="col-sm-12">
                        <div class="rdio rdio-primary">
                          <input type="radio" name="trabajo" value="Si" id="trabajo">
                          <label>Si</label> &nbsp;&nbsp;
                          <input type="radio" name="trabajo" value="No" id="trabajoA" checked>
                          <label>No</label>
                        </div>
                      </div>
                  @else
                    <div class="col-sm-12">
                        <div class="rdio rdio-primary">
                          <input type="radio" name="trabajo" value="Si" id="trabajo" checked>
                          <label>Si</label> &nbsp;&nbsp;
                          <input type="radio" name="trabajo" value="No" id="trabajoA">
                          <label>No</label>
                        </div>
                      </div>
                  @endif
                </td>
                <td align="Center">
                  <select name="dependencia">
                    <option>Seleciona una opcion</option>
                    <option value="1">Si, totalmente</option>
                    <option value="2">Si, medianamente</option>
                    <option value="3">No depende</option>
                    <option value="4">Mantienes a tu familia</option>
                  </select>
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
<!--////////////////Quinta Parte-////////////////-->
        <br>
        <div class="row" id="letra">
          <div class="col-md-12">
            <table class="table table-bordered">
              <tr class="success">
                <td align="Center">
                {!!Form::text('telCasa',$student->personales->telCasa, ['class'=>'form-control', 'id'=>'telCasa'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('telCelular',$student->personales->telCelular, ['class'=>'form-control', 'id'=>'telCelular'])!!}
                </td>
                <td align="Center">
                  {!!Form::text('telTutor',$student->personales->telTutor, ['class'=>'form-control', 'id'=>'telTutor'])!!}
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
                  {!!Form::text('nomTutor',$student->personales->nomTutor, ['class'=>'form-control', 'id'=>'nomTutor'])!!}
                </td>
                <td align="Center">
                  @if(($student->personales->enfermedades)=="")
                    <div class="col-sm-12">
                        <div class="rdio rdio-primary">
                          <input type="radio" name="enfe" value="si" id="enfe">
                          <label>Si</label> &nbsp;&nbsp;
                          <input type="radio" name="enfe" value="no" id="enfee" checked>
                          <label>No</label>
                        </div>
                      </div>
                  @else
                    <div class="col-sm-12">
                        <div class="rdio rdio-primary">
                          <input type="radio" name="enfe" value="si" id="enfe" checked>
                          <label>Si</label> &nbsp;&nbsp;
                          <input type="radio" name="enfe" value="no" id="enfee">
                          <label>No</label>
                        </div>
                      </div>
                  @endif
                </td>
                <td>
                  {!!Form::text('enfermedades',$student->personales->enfermedades, ['class'=>'col-sm-6 form-control', 'id'=>'enfermedades'])!!}
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
<!--////////////////Botones de Opcion////////////////-->
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12" align="Center">
              <input type="hidden" value="{{$student->id}}" id="studentId" name="studentId">
              <button class="btn-success btn-lg bs" type="submit" style="font-size: 14pt; width: 190px">Actualizar</button>
            </div>
          </div>
        </div>

        <br><br>

      </div>
    </div>
  </div>
  {!!Form::close()!!}
</div>
@stop

@section('subHead')
@stop

@section('content')
@stop

@section('scripts')
@stop