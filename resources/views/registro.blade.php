@extends('layout')

@section('title')
<title>Registro Servicio Becas</title>
@stop


@section('popUp')
<body class="light_theme  fixed_header left_nav_fixed">
    <div class="registration">
    <div class="panel-heading border login_heading">Regístrate</div>

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

    <form action="{{asset('/registro')}}" role="form" method="POST" class="form-horizontal">
    {{csrf_field()}}
      <div class="form-group">
        <div class="col-sm-10">
          {!!Form::text('nombre', null, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Nombre(s)'])!!}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          {!!Form::text('apellidoPaterno', null, ['class'=>'form-control', 'id'=>'apellidoPaterno', 'placeholder'=>'Apellido Paterno'])!!}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          {!!Form::text('apellidoMaterno', null, ['class'=>'form-control', 'id'=>'apellidoMaterno', 'placeholder'=>'Apellido Materno'])!!}
        </div>
      </div>


      <div class="form-group">
      <div class="col-sm-10">
          {!!Form::text('edad', null, ['class'=>'form-control', 'id'=>'edad', 'placeholder'=>'Edad'])!!}
        </div>
      </div>

      <div class="form-group">
      <div class="col-sm-10">
          {!!Form::text('boleta', null, ['class'=>'form-control', 'id'=>'boleta', 'placeholder'=>'Boleta'])!!}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          {!!Form::select('carrera', $carrera, 0, ['class'=>'select2 form-control', 'placeholder'=>'Selecciona una Carrera'])!!}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          {!!Form::text('grupo', null, ['class'=>'form-control', 'id'=>'grupo', 'placeholder'=>'Grupo'])!!}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          {!!Form::text('semestre', null, ['class'=>'form-control', 'id'=>'semestre', 'placeholder'=>'Semestre en el que estas (Ej: 2 o 9)'])!!}
        </div>
      </div>
      
      <div align="Center">
      <table align="Center">
        <tr align="Center">
          <td align="Center">
            <div class="form-group" align="Center">
              <div class=" col-sm-10" align="Center">
                <div class="checkbox checkbox_margin" align="Center">
                    <a href="{{asset('/')}}" class="btn btn-default pull-right" type="button">Volver</a>
                </div>
              </div>
            </div>
          </td>
          <td align="Center">
            <div class="form-group" align="Center">
              <div class=" col-sm-10" align="Center">
                <div class="checkbox checkbox_margin" align="Center">
                    <button class="btn btn-default pull-right" type="submit">Siguiente</button>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
      </div>
    </form>
 </div>
</body>
@stop

@section('subHead')

@stop

@section('content')
@stop

@section('scripts')
<script src="{{asset('/Templates/js/jquery-2.1.0.js')}}"></script>
<script src="{{asset('/Templates/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/Templates/js/common-script.js')}}"></script>
<script src="{{asset('/Templates/js/jquery.slimscroll.min.js')}}"></script>
@stop