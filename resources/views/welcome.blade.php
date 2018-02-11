<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Registro</title>
            <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
            <link href="/Templates/css/font-awesome.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="/Templates/css/admin.css" rel="stylesheet" type="text/css" />
        </head>

<body class="light_theme  fixed_header left_nav_fixed">

    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <img src="/Templates/images/user.png">
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->

    <!--\\\\\\\ wrapper Start \\\\\\-->

    <div class="registration">
    <div class="panel-heading border login_heading">Regístrate</div>    
 
    <form action="/datos" role="form" method="POST" class="form-horizontal">
    {{csrf_field()}}
      <div class="form-group">
        <div class="col-sm-10">
          <input type="text" placeholder="Nombre(s)" id="Nombre" name="nombre" class="form-control">
        </div>
      </div>

      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" placeholder="Apellido Paterno" id="ApPat" name="apellidoPaterno" class="form-control">
        </div>
      </div>

      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" placeholder="Apellido Materno" id="ApMat" name="apellidoMaterno" class="form-control">
        </div>
      </div>

      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" placeholder="Boleta" id="boleta" name="boleta" class="form-control">
        </div>
      </div>

      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" placeholder="Promedio Actual" id="promAct" name="promActual" class="form-control">
        </div>
      </div>

      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" placeholder="Periodo Escolar" id="perEsc" name="periodoEscolar" class="form-control">
        </div>
      </div>

      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" placeholder="Edad" id="edad" name="edad" class="form-control">
        </div>
      </div>

      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" placeholder="Semestre" id="semestre" name="semestre" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          <input type="text" placeholder="Grupo" id="grupo" name="grupo" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          <input type="text" placeholder="Teléfono de Casa" id="telCa" name="telCasa" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          <input type="text" placeholder="Teléfono Celular" id="telCe" name="telCel" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          <input type="text" placeholder="Teléfono del Tutor" id="telT" name="telTutor" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class=" col-sm-10">
          <div class="checkbox checkbox_margin">
              <button class="btn btn-default pull-right" type="submit">Siguiente</button>
          </div>
        </div>
      </div>
      
    </form>
 </div>
<!--\\\\\\\ wrapper end\\\\\\-->

<script src="/Templates/js/jquery-2.1.0.js"></script>
<script src="/Templates/js/bootstrap.min.js"></script>
<script src="/Templates/js/common-script.js"></script>
<script src="/Templates/js/jquery.slimscroll.min.js"></script>
</body>
</html>