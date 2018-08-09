@extends('layout')

@section('title')
<title>Registro Servicio Becas</title>
@stop

@section('css')
<script type="text/javascript">
  function mostrarEnf(){
    element = document.getElementById("content");
    check = document.getElementById("enf");
    if(check.checked){
      element.style.display='block';
    }
    else{
      element.style.display='none';
    }
  }
  function mostrarLic(){
    e = document.getElementById("licF");
    c = document.getElementById("lic");
    if (c.checked) {
      e.style.display = 'block';
    }
    else{
      e.style.display = 'none';
    }
  }
  function mostrarBecaAnt(){
    b = document.getElementById("becaAF");
    bb = document.getElementById("becaA");
    if (bb.checked) {
      b.style.display = 'block';
    }
    else{
      b.style.display = 'none';
    }
  }
  function mostrarPago(p){
    pp = document.getElementById("pagoM");
    if(p.value == "3"){
      pp.style.display = 'block';
    }
    else{
      pp.style.display = 'none';
    }
  }
  function foraneo(p){
    f = document.getElementById("fora");
    if ((p.value != "58") && (p.value != "17")) {
      f.style.display = 'block';
    }
    else{
      f.style.display = 'none';
    }
  }
</script>
@stop

@section('popUp')
<style type="text/css">
  #licenciatura{
    text-transform: capitalize;
  }
  #calle{
    text-transform: capitalize;
  }
  #colonia{
    text-transform: capitalize;
  }
  #nomTutor{
    text-transform: capitalize;
  }
  #numInterior{
    text-transform: uppercase;
  }
  #numExterior{
    text-transform: uppercase;
  }
</style>
<br>
  <div class="container-fluid">
{!!Form::open(array('url'=>'/registro2', 'method'=>'post'))!!}
  {{csrf_field()}}
    <div class="block-web">
            <div class="header" align="Center">
              <div class="actions"> 
                <a class="minimize" href="#">
                  <i class="fa fa-chevron-down"></i>
                </a>
                <a class="close-down" href="#">
                  <i class="fa fa-times"></i>
                </a> 
              </div>
              <h3 class="content-header">Registro</h3>
            </div>

      <div class="porlets-content">

            @if(!$errors->isEmpty())
              <div class="alert alert-danger">
                    <p><strong>Ooops!</strong></p>
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
              </div>
            @endif

          <div class="basic-wizard" id="progressWizard">
              <!--Partes deslizables-->
                <ul class="nav nav-pills nav-justified">
                  <li class="active"><a data-toggle="tab" href="#ptab1"><span>Parte 1:</span> Antecedentes de Estudio</a></li>
                  <li><a data-toggle="tab" href="#ptab2"><span>Parte 2:</span> Características de vivienda</a></li>
                  <li><a data-toggle="tab" href="#ptab3"><span>Parte 3:</span> Gasto Familiar</a></li>
                  <li><a data-toggle="tab" href="#ptab4"><span>Parte 4:</span> Personales</a></li>
                </ul>
                <!--Fin Partes deslizables-->
            <div class="tab-content">

                <!--Parte 1-->
                  <div id="ptab1" class="tab-pane active">
                  
                    <div class="progress progress-striped active">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar" style="width: 25%;"></div>
                    </div>

                    </br>

                      <div class="form-group">
                        <label class="col-sm-12">Promedio Actual:</label>
                        <div class="col-sm-4">
                          {!!Form::text('promActual', null, ['class'=>'form-control','id'=>'promActual','placeholder'=>'Ej: 7.1 o 7'])!!}
                        </div>
                      </div>

                      </br></br></br>
                    
                      <div class="form-group">
                        <label class="col-sm-12">Tipo de Beca a solicitar:</label>
                        <div class="col-sm-4">
                          {!!Form::select('beca', $beca, 0, ['class'=>'select2 form-control', 'placeholder'=>'Selecciona una Opcion'])!!}
                        </div>
                      </div>

                      </br></br></br>
                      
                      <div class="form-group">
                        <label class="col-sm-12">¿Cuentas con alguna licenciatura terminada?</label>
                        <div class="col-sm-12">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="lic" value="si" id="lic" onclick="mostrarLic();">
                            <label>Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="lic" value="no" id="licc" onclick="mostrarLic();">
                            <label>No</label>
                          </div>
                        </div>
                        <!--Bloque Oculto-->
                        <div id="licF" class="col-sm-12" style="display:none;">
                          <label class="col-sm-12">¿Cuál?</label>
                          <div class="col-sm-12">
                            {!!Form::text('licenciatura', null, ['class'=>'col-sm-3', 'id'=>'licenciatura','style'=>'text-transform: capitalize;'])!!}
                          </div>
                        </div>
                        <!--Bloque Oculto-->
                      </div>

                      </br></br></br>

                      <div class="form-group">
                        <label class="col-sm-12">¿Cuentas actuamente con alguna Beca o Apoyo Económico de alguna otra Institución o Dependencia?</label>
                        <div class="col-sm-12">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="becaA" value="si" id="becaA" onclick="mostrarBecaAnt();">
                            <label>Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="becaA" value="no" id="becaAA" onclick="mostrarBecaAnt();">
                            <label>No</label>
                          </div>
                        </div>
                        <!--Bloque Oculto-->
                        <div id="becaAF" class="col-sm-12" style="display:none;">
                          <label class="col-sm-12">¿Cuál?</label>
                          <div class="col-sm-3">
                            {!!Form::select('actualBeca', $beca, 0, ['class'=>'select2 form-control', 'placeholder'=>'Selecciona una Opcion'])!!}
                          </div>
                        </div>
                        <!--Bloque Oculto-->
                      </div>

                      </br></br></br>

                      <div class="form-group">
                        <label class="col-sm-12">Historia Académico dentro de la Unidad Académica UPIIZ</label>
                        <div class="col-sm-12">
                          <select name="historiaAC">
                            <option>Selecciona una opcion</option>
                            <option value="1">Regular</option>
                            <option value="2">Irregular</option>
                          </select>
                        </div>
                      </div>
                  </div>
                <!--Fin Parte 1-->

                <!--Parte 2-->
                  <div id="ptab2" class="tab-pane">
                      <div class="progress progress-striped">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar" style="width: 50%;">
                        </div>
                      </div>

                    </br>

                      <div class="row">
                        <label class="col-sm-4">De que Municipio y Estado vienes:</label>
                        <div class="col-sm-3">
                          {!!Form::select('estado', $estado, 0, ['class'=>'select2 form-control','placeholder'=>'Estado'])!!}
                        </div>
                        <div class="col-sm-3">
                          {!!Form::select('municipio', $municipio, 0, ['class'=>'select2 form-control','placeholder'=>'Municipio','onchange'=>'foraneo(this);'])!!}
                        </div>
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿Cuántas personas viven en tu casa (incluyéndote)?</label>
                        {!!Form::text('habitantes', null, ['class'=>'col-sm-6', 'id'=>'habitantes','placeholder'=>'Ej: 3'])!!}
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿Cuántas habitaciones tiene tu casa (cocina, baños, cuartos)?</label>
                        {!!Form::text('habitaciones', null, ['class'=>'col-sm-6', 'id'=>'habitaciones','placeholder'=>'Ej: 8'])!!}
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">En qué tipo de casa habita tu familia:</label>
                        <div class="col-sm-6">
                          {!!Form::select('tCasa', $tCasa, 0, ['class'=>'select2 form-control','placeholder'=>'Selecciona una Opcion'])!!}
                        </div>
                      </div>

                      </br>                      

                      <div class="row">
                        <label class="col-sm-4">Tu residencia <strong>mientras estudias</strong> es:</label>
                        <div class="col-sm-6">
                          <select class="form-control" name="residencia" onchange="mostrarPago(this);">
                            <option>Selecciona una opcion</option>
                            <option value="1">Permanente</option>
                            <option value="2">Prestada</option>
                            <option value="3">Rentada</option>
                          </select>
                        </div>
                        <!--Bloque Oculto-->
                        <div id="pagoM" class="col-sm-12" style="display:none;">
                        </br>   
                          <label class="col-sm-4">¿Cuánto pagas mensualmente?</label>
                          {!!Form::text('pagoMensual', null, ['class'=>'col-sm-6', 'id'=>'pagoMensual'])!!}
                        </div>
                        <!--Bloque Oculto-->
                      </div>

                      </br>

                      <div class="row">
                        <div class="col-sm-12">
                          <label>Tu dirección <STRONG>mientras estudias:</STRONG></label>
                        </div>
                      </div>

                      </br>

                      <div class="row">
                        <div class="col-sm-4">
                          <label class="col-sm-6">Calle:</label>
                          {!!Form::text('calle', null, ['class'=>'col-sm-6', 'id'=>'calle'])!!}
                        </div>
                        <div class="col-sm-4">
                          <label class="col-sm-6">Colonia:</label>
                          {!!Form::text('colonia', null, ['class'=>'col-sm-6', 'id'=>'colonia'])!!}
                        </div>
                        <div class="col-sm-4">
                          <label class="col-sm-6">Código Postal:</label>
                          {!!Form::text('codigoPostal', null, ['class'=>'col-sm-6', 'id'=>'codigoPostal'])!!}
                        </div>
                      </div>

                      </br>

                      <div class="row">
                        <div class="col-sm-4">
                          <label class="col-sm-6">No. Interior:</label>
                          {!!Form::text('numInterior', null, ['class'=>'col-sm-6', 'id'=>'numInterior'])!!}
                        </div>
                        <div class="col-sm-4">
                          <label class="col-sm-6">No. Exterior:</label>
                          {!!Form::text('numExterior', null, ['class'=>'col-sm-6', 'id'=>'numExterior'])!!}
                        </div>
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿Cuánto tardas en llegar a la escuela?</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="tiempo">
                            <option>Selecciona una Opcion</option>
                            <option value="0 - 0.15">0 a 15 min</option>
                            <option value="0.15 - 0.30">15 a 30 min</option>
                            <option value="0.30 - 1">30 a 1 hr</option>
                            <option value="1 - 1.30">1 a 1.30 hrs</option>
                            <option value="1.30 - 2">1.30 a 2 hrs</option>
                            <option value="2 - +">2 a mas hrs</option>
                          </select>
                        </div>
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿Cuál es tu medio de transporte?</label>
                        <div class="col-sm-4">
                          {!!Form::select('transporte', $transporte, 0, ['class'=>'select2 form-control','placeholder'=>'Selecciona una Opcion'])!!}
                        </div>
                      </div>

                      </br>

                      <!--Bloque Oculto-->
                        <div id="fora" class="row" align="Center" style="display:none;">
                          </br>
                          <div class="col-sm-12" align="Center">
                            <strong><h6 align="Center">Como Foráneo</h6></strong>
                          </div>

                          </br></br>

                          <div class="row">
                            <label class="col-sm-5">¿Cuántas veces viajas a tu domicilio <strong>mensualmente</strong>?</label>
                            <div class="col-sm-6">
                              {!!Form::text('viajeMensual', null, ['class'=>'form-control', 'id'=>'viajeMensual'])!!}
                            </div>
                            <div class="col-sm-1"></div>
                          </div>

                          </br>

                          <div class="row">
                            <label class="col-sm-5">¿Cuál es tu medio de transporte para dirigirte a tu domicilio?</label>
                            <div class="col-sm-6">
                              {!!Form::select('transporte2', $transporte, 0, ['class'=>'select2 form-control','placeholder'=>'Selecciona una Opcion'])!!}
                            </div>
                            <div class="col-sm-1"></div>
                          </div>

                          </br>

                          <div class="row">
                            <label class="col-sm-5">¿Cuánto gastas al mes en trasladarte a tu domicilio (ida y venida)?</label>
                            <div class="col-sm-6">
                              {!!Form::text('gastoMensual2', null, ['class'=>'form-control', 'id'=>'gastoMensual2'])!!}
                            </div>
                            <div class="col-sm-1"></div>
                          </div>
                        </div>
                      <!--Bloque Oculto-->
                  </div>
                <!--Fin Parte 2-->

                <!--Parte 3-->
                  <div id="ptab3" class="tab-pane">
                    <div class="progress progress-striped">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar" style="width: 75%;"></div>
                    </div>

                    </br>

                      <div class="row">
                        <label class="col-sm-4">¿Cuál es el ingreso mensual en tu familia (aproximadamente)?</label>
                        <div class="col-sm-6">
                          {!!Form::text('ingresoMensual',null, ['class'=>'form-control', 'id'=>'ingresoMensual','placeholder'=>'Ej: 10000.50 o 10000'])!!}
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿Cuál es el gasto mensual en tu familia (aproximadamente)?</label>
                        <div class="col-sm-6">
                          {!!Form::text('gastoMensual',null, ['class'=>'form-control', 'id'=>'gastoMensual','placeholder'=>'Ej: 6000.50 o 6000'])!!}
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿No. de integrantes de la familia donde vives?</label>
                        <div class="col-sm-6">
                          {!!Form::text('noIntegrantes',null, ['class'=>'form-control', 'id'=>'noIntegrantes','placeholder'=>'Ej: 10'])!!}
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿Cuántas personas aportan a los gastos de tu casa?</label>
                        <div class="col-sm-6">
                          {!!Form::text('apoyo',null,['class'=>'form-control', 'id'=>'apoyo','placeholder'=>'Ej: 3'])!!}
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row" align="Center">
                        <label class="col-sm-4">¿Trabajas?</label>
                        <div class="col-sm-6" align="left">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="trabajo" value="Si">
                            <label>Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="trabajo" value="No">
                            <label>No</label>
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿Dependes económicamente de tus padres o tutores?</label>
                        <div class="col-sm-6">
                            <select name="dependencia">
                              <option>Seleciona una opcion</option>
                              <option value="1">Si, totalmente</option>
                              <option value="2">Si, medianamente</option>
                              <option value="3">No depende</option>
                              <option value="4">Mantienes a tu familia</option>
                            </select>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>
                  </div>
                <!--Fin Parte 3-->

                <!--Parte 4-->
                <div id="ptab4" class="tab-pane">
                  <div class="progress progress-striped">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar" style="width: 100%;"></div>
                    </div>

                    </br>

                      <div class="row" align="Center">
                        <label class="col-sm-4">Teléfono de Casa:</label>
                        <div class="col-sm-6">
                          {!!Form::text('telCasa', null, ['class'=>'form-control', 'id'=>'telCasa','placeholder'=>'Ej: 9212345    o    92 12 34 5    o    92-12-34-5'])!!}
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row" align="Center">
                        <label class="col-sm-4">Teléfono Celular:</label>
                        <div class="col-sm-6">
                          {!!Form::text('telCelular', null, ['class'=>'form-control', 'id'=>'telCelular', 'placeholder'=>'Ej: (01)4921234567    o    4921234567    o    492 123 45 67    o    492-123-45-67'])!!}
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row" align="Center">
                        <label class="col-sm-4">Nombre del Tutor:</label>
                        <div class="col-sm-6">
                          {!!Form::text('nomTutor', null, ['class'=>'form-control', 'id'=>'nomTutor', 'placeholder'=>'Nombre Completo'])!!}
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row" align="Center">
                        <label class="col-sm-4">Teléfono del Tutor:</label>
                        <div class="col-sm-6">
                          {!!Form::text('telTutor', null, ['class'=>'form-control', 'id'=>'telTutor','placeholder'=>'Ej: (01)4921234567    o    4921234567    o    492 123 45 67    o    492-123-45-67'])!!}
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      </br>

                      <div class="row">
                        <label class="col-sm-4">¿Tu o algún familiar cercano (Padres/Hermanos) padecen de alguna enfermedad crónica degenerativa?</label>
                        <div class="col-sm-6">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="enfe" value="si" onclick="mostrarEnf();" id="enf">
                            <label>Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="enfe" value="no" onclick="mostrarEnf();" id="enff">
                            <label>No</label>
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <!--Bloque Oculto-->
                        <div id="content" class="col-sm-12" style="display:none;" align="Center">
                        </br>
                          <label class="col-sm-4">¿Cuales?</label>
                          {!!Form::text('enfermedades', null, ['class'=>'col-sm-6', 'id'=>'enfermedades'])!!}
                        </div>
                        <!--Bloque Oculto-->
                      </div>

                      </br>
                      </br>
                      </br>
                      
                        <div class="col-sm-12" align="Center">
                          <button type="submit" class="btn-primary btn-lg bs" style="font-size: 11pt; width: 200px">Finalizar</button>
                        </div>
                </div>
                <!--Fin Parte 4-->
                </div><!-- /tab-content -->

                <ul class="pager wizard">
                  <li class="previous"><a>Anterior</a></li>
                  <li class="next" id="next" onclick="finalizar();"><a>Siguiente</a></li>
                </ul>

              </div><!--/progressWizard-->
      </div><!--/porlets-content--> 
    </div><!--/block-web--> 
{!!Form::close()!!}
  </div>

@stop

@section('subHead')
@stop

@section('content')
@stop

@section('scripts')
  <script src="{{asset('/Templates/js/jPushMenu.js')}}"></script> 
  <script src="{{asset('/Templates/js/side-chats.js')}}"></script>
  <script src="{{asset('/Templates/js/jquery-2.1.0.js')}}"></script>
  <script src="{{asset('/Templates/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/Templates/js/common-script.js')}}"></script>
  <script src="{{asset('/Templates/js/jquery.slimscroll.min.js')}}"></script>
  <script type="text/javascript"  src="{{asset('/Templates/plugins/toggle-switch/toggles.min.js')}}"></script> 
  <script src="{{asset('/Templates/plugins/checkbox/zepto.js')}}"></script>
  <script src="{{asset('/Templates/plugins/checkbox/icheck.js')}}"></script>
  <script src="{{asset('/Templates/js/icheck-init.js')}}"></script>
  <script type="text/javascript" src="{{asset('/Templates/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templates/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templates/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templates/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templates/js/form-components.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templates/plugins/input-mask/jquery.inputmask.min.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templates/plugins/input-mask/demo-mask.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templates/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templatse/plugins/dropzone/dropzone.min.js')}}"></script> 
  <script type="text/javascript" src="{{asset('/Templates/plugins/ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('/Templates/plugins/validation/parsley.min.js')}}"></script>
  <script type="text/javascript">
    $('.next').click(function(){
      $('.nav-pills > .active').next('li').find('a').trigger('click');
    });
    
    $('.previous').click(function(){
      $('.nav-pills > .active').prev('li').find('a').trigger('click');
    });    
  </script>
@stop