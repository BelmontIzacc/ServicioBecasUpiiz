<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Registro Becas</title>
            <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
            <link href="/Templates/css/font-awesome.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/css/animate.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/css/admin.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/toggle-switch/toggles.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/checkbox/icheck.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/checkbox/minimal/blue.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/checkbox/minimal/green.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/checkbox/minimal/grey.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/checkbox/minimal/orange.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/checkbox/minimal/pink.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/checkbox/minimal/purple.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
            <link href="/Templates/plugins/dropzone/dropzone.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="/Templates/plugins/bootstrap-datepicker/css/datepicker.css" />
            <link rel="stylesheet" type="text/css" href="/Templates/plugins/bootstrap-timepicker/compiled/timepicker.css" />
            <link rel="stylesheet" type="text/css" href="/Templates/plugins/bootstrap-colorpicker/css/colorpicker.css" />
        </head>

<body>
  <div class="container-fluid">
    <br>
    <div class="block-web">
            <div class="header" align="Center">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Registro</h3>
            </div>
            <div class="porlets-content">
              <div class="basic-wizard" id="progressWizard">
              <!--Partes deslizables-->
                <ul class="nav nav-pills nav-justified">
                  <li class="active"><a data-toggle="tab" href="#ptab1"><span>Parte 1:</span> Antecedentes de Estudio</a></li>
                  <li><a data-toggle="tab" href="#ptab2"><span>Parte 2:</span> Características de vivienda</a></li>
                  <li><a data-toggle="tab" href="#ptab3"><span>Parte 3:</span> Gasto Familiar</a></li>
                  <li><a data-toggle="tab" href="#ptab4"><span>Parte 4:</span> Transporte</a></li>
                  <li><a data-toggle="tab" href="#ptab5"><span>Parte 5:</span> Personales</a></li>
                </ul>
                <!--Fin Partes deslizables-->
                <div class="tab-content">

                <!--Barra de progreso-->
                  <div class="progress progress-striped active">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar" style="width: 33.3333%;"></div>
                  </div>
                <!--Fin Barra de progreso-->

                <!--Parte 1-->
                  <div id="ptab1" class="tab-pane active">
                    <form class="form" role="form" method="POST">

                      <div class="form-group">
                        <label>Tipo de Beca a solicitar:</label>
                        <div class="col-sm-16">
                          <select name="becas">
                            <option value="">Selecciona una opcion</option>
                            <option value="">Nuevo Becario</option>
                            <option value="">Telmex</option>
                            <option value="">Bécalos</option>
                            <option value="">Institucional tipo: A,B,C</option>
                            <option value="">Manutención: 1er.ciclo, 2do.ciclo, 3er.ciclo, 4to.ciclo</option>
                          </select>
                        </div>
                      </div>

                      </br>
                      
                      <div class="form-group">
                        <label class="col-sm-16">Cuentas con alguna licenciatura terminada</label>
                        <div class="col-sm-16">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" value="m" id="male2" checked="checked">
                            <label for="male2">Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" id="female2" value="f">
                            <label for="female2">No</label>
                          </div>
                        </div>
                      </div>

                      </br>

                      <div class="form-group">
                        <label class="col-sm-16">Cuentas actuamente con alguna Beca o Apoyo Económico de alguna otra Institución o Dependencia</label>
                        <div class="col-sm-16">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radios" value="ma" id="male2" checked="checked">
                            <label for="male2">Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radios" id="female2" value="fe">
                            <label for="female2">No</label>
                          </div>
                        </div>
                      </div>

                      </br>

                      <div class="form-group">
                        <label class="col-sm-16">Historia Académico dentro de la Unidad Académica UPIIZ</label>
                        <div class="col-sm-16">
                          <select>
                            <option value="">Selecciona una opcion</option>
                            <option value="">Regular</option>
                            <option value="">Irregular 1 adeudo</option>
                            <option value="">Irregular 2 adeudos</option>
                            <option value="">Mas de 3 adeudos</option>
                          </select>
                        </div>
                      </div>

                    </form>
                  </div>
                <!--Fin Parte 1-->

                <!--Parte 2-->
                  <div id="ptab2" class="tab-pane active">
                    <form class="form">

                    <br>

                      <div class="form-group">
                        <label class="col-sm-3">De que Municipio y estado viene:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="product_id">
                        </div>
                        <div class="col-sm-3"></div>
                      </div>

                      <br>
                      <br>

                      <div class="form-group">
                        <label class="col-sm-3">Tu residencia mientras estudias es:</label>
                        <div class="col-sm-6">
                          <select class="form-control">
                            <option value="">Selecciona una opcion</option>
                            <option value="">Permanente</option>
                            <option value="">Prestada</option>
                            <option value="">Rentada</option>
                          </select>
                        </div>
                        <div class="col-sm-3"></div>
                      </div>

                      <br>
                      <br>

                      <div class="form-group">
                        <label class="col-sm-3">En qué tipo de casa habita tu familia:</label>
                        <div class="col-sm-6">
                          <select class="form-control">
                            <option value="">Selecciona una opcion</option>
                            <option value="">Casa sola</option>
                            <option value="">Departamento</option>
                            <option value="">Vecindario</option>
                            <option value="">Cuarto de huéspedes</option>
                            <option value="">Cuarto de azotea</option>
                          </select>
                        </div>
                        <div class="col-sm-3"></div>
                      </div>

                      <br>
                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuántas personas viven en tu casa (incluyéndote)?</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="product_id">
                        </div>
                      </div>

                      <br>
                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuántas habitaciones tiene tu casa (cocina, baños, cuartos)?</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" name="product_id">
                        </div>
                      </div>

                    </form>
                  </div>
                <!--Fin Parte 2-->

                <!--Parte 3-->
                  <div id="ptab3" class="tab-pane active">
                    <form class="form">

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuál es el ingreso mensual en tu familia (aproximadamente)?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="cardno">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuál es el egreso mensual en tu familia (aproximadamente)?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="cardno">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿No. de integrantes de la familia donde vives?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="cardno">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuántas personas aportan a los gastos de tu casa?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="cardno">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Trabajas?</label>
                        <div class="col-sm-6">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" value="m" id="male2" checked="checked">
                            <label for="male2">Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" id="female2" value="f">
                            <label for="female2">No</label>
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Dependes económicamente de tus padres o tutores?</label>
                        <div class="col-sm-6">
                            <select class="form-control">
                              <option value="">Seleciona una opcion</option>
                              <option value="">Si, totamente</option>
                              <option value="">Si, medianamente</option>
                              <option value="">No depende</option>
                              <option value="">Mantienes a tu familia</option>
                            </select>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuántas personas dependen de sus padres ó de ti si asi fuera el caso?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="csv">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Has estado becado en el Programa PROSPERA o alguna otra Beca fuera del IPN?</label>
                        <div class="col-sm-6">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" value="m" id="male2" checked="checked">
                            <label for="male2">Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" id="female2" value="f">
                            <label for="female2">No</label>
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                    </form>
                  </div>
                <!--Fin Parte 3-->

                <!--Parte 4-->
                  <div id="ptab4" class="tab-pane active">
                    <form class="form">

                      <div class="form-group">
                        <label class="col-sm-4">¿Dónde se ubica tu domicilio? (municipio, estado)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="product_id">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuántos autos tienen en tu casa?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="product_name">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-5">¿Qué medio(s) de transporte utilizas para trasladarte a la escuela diariamente?</label>
                        <div class="col-sm-5">
                          <select class="form-control">
                            <option value="">Automóvil</option>
                            <option value="">Taxi o uber</option>
                            <option value="">Ruta o camion</option>
                            <option value="">Caminando</option>
                          </select>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group">
                        <label class="col-sm-4">¿Qué tiempo haces de tu casa a la escuela?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="product_name">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                      <br>

                      <div class="form-group" align="Center">
                        <label class="col-sm-12"><STRONG> Respode a lo siguiente solo en caso de provenir de un municipio o estado alejado de la escuela</STRONG></label>
                      </div>  
                      <div class="form-group">
                        <label class="col-sm-12"></label>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuántas veces viajas a tu domicilio <STRONG>mensualmente</STRONG>?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="product_name">
                        </div>
                        <div class="col-sm-2"></div>
                      </div> 

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuál es el medio de transporte para dirigirse a tu domicilio?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="product_name">
                        </div>
                        <div class="col-sm-2"></div>
                      </div> 

                      <div class="form-group">
                        <label class="col-sm-4">¿Cuánto gastas al mes en trasladarte a tu domicilio (ida y venida)?</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="product_name">
                        </div>
                        <div class="col-sm-2"></div>
                      </div>                 

                    </form>
                  </div>
                <!--Fin Parte 4-->

                <!--Parte 5-->
                  <div id="ptab5" class="tab-pane active">
                    <form class="form">

                      <div class="form-group">
                        <label class="col-sm-4">¿Tu o algún familiar cercano (Padres/Hermanos) padecen de alguna enfermedad crónica degenerativa?</label>
                        <div class="col-sm-6">
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" value="m" id="male2" checked="checked">
                            <label for="male2">Si</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input type="radio" name="radio" id="female2" value="f">
                            <label for="female2">No</label>
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                    </form>
                  </div>
                <!--Fin Parte 5-->
                </div><!-- /tab-content -->
                
                <ul class="pager wizard">
                  <li class="previous"><a href="javascript:void(0)">Previous</a></li>
                  <li class="next"><a href="javascript:void(0)">Next</a></li>
                </ul>

              </div><!--/progressWizard-->
      </div><!--/porlets-content--> 
    </div><!--/block-web--> 
  </div>

  <script src="/Templates/js/jPushMenu.js"></script> 
  <script src="/Templates/js/side-chats.js"></script>
  <script src="/Templates/js/jquery-2.1.0.js"></script>
  <script src="/Templates/js/bootstrap.min.js"></script>
  <script src="/Templates/js/common-script.js"></script>
  <script src="/Templates/js/jquery.slimscroll.min.js"></script>
  <script type="text/javascript"  src="/Templates/plugins/toggle-switch/toggles.min.js"></script> 
  <script src="/Templates/plugins/checkbox/zepto.js"></script>
  <script src="/Templates/plugins/checkbox/icheck.js"></script>
  <script src="/Templates/js/icheck-init.js"></script>
  <script type="text/javascript" src="/Templates/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
  <script type="text/javascript" src="/Templates/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> 
  <script type="text/javascript" src="/Templates/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
  <script type="text/javascript" src="/Templates/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
  <script type="text/javascript" src="/Templates/js/form-components.js"></script> 
  <script type="text/javascript"  src="/Templates/plugins/input-mask/jquery.inputmask.min.js"></script> 
  <script type="text/javascript"  src="/Templates/plugins/input-mask/demo-mask.js"></script> 
  <script type="text/javascript"  src="/Templates/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
  <script type="text/javascript"  src="/Templatse/plugins/dropzone/dropzone.min.js"></script> 
  <script type="text/javascript" src="/Templates/plugins/ckeditor/ckeditor.js"></script>
  <script src="/Templates/plugins/validation/parsley.min.js"></script>
  <script type="text/javascript">
    $('.next').click(function(){
      $('.nav-pills > .active').next('li').find('a').trigger('click');
    });
    
    $('.previous').click(function(){
      $('.nav-pills > .active').prev('li').find('a').trigger('click');
    });    
  </script>


</body>
</html>