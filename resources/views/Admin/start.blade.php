@extends('Admin.layout2')
<?php
  $classSizeForms = "col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2";
?>

@section('title')
<title>Inicio Servicio Becas</title>
@stop

@section('css')
<link rel="stylesheet" href="{{asset('/Template/css/lib/bootstrap-sweetalert/sweetalert.css')}}"/>
<link rel="stylesheet" href="{{asset('/Template/css/lib/clockpicker/bootstrap-clockpicker.min.css')}}"/>

@stop

@section('popUp')

<div class="modal fade bd-example-modal-sm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="windowTitle">¿Resetear la Base de Datos?</h4>
            </div>
            {!!Form::open(array('method'=>'post', 'id'=>'passForm'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Contraseña</label>
                    <input type="password" class="form-control" value="" name="clave" id="clave">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-danger" formaction="" id="formButton">Aceptar</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->

@stop

@section('subHead')
@stop

@section('content')

<section class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-lg-offset-0 col-md-12 col-sm-1 col-xs-6">
                                <section class="widget widget-simple-sm-fill grey">
                                    <div class="widget-simple-sm-icon">
                                                {{$tenement->count()}}
                                    </div>
                                    <div class="widget-simple-sm-fill-caption">Alumnos Registrados</div>
                                </section><!--.widget-simple-sm-fill-->
                            </div>                            
                        </div>
<div class="col-md-3">
    <div class="card">
        <div class="card-header text-center">
                Resetear Base de Datos
            </div>
            <div class="row">
                <div class="card-block">
                    <p class="card-text">
                        <div class="col-md-6">
                            <div class="form-group">
                               <div class="btn-group" role="group" aria-label="Basic example center">
                                    <button type="button" class="btn btn-inline btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Resetear', 1);" id="formButton"

                                        @if($variable == 0)
                                            
                                        @elseif($variable == 1)
                                            disabled=""        
                                        @endif

                                    >Resetear Registros</button>
                                    <button type="button" class="btn btn-inline btn-danger" 

                                        @if($variable == 0)
                                            disabled=""
                                        @elseif($variable == 1)
                                                    
                                        @endif

                                        @if($tenement->count()>0)
                                            onclick="reset('Resetear', 1);"
                                        @elseif($tenement->count()==0)
                                            onclick="reset('Resetear', 2);"
                                        @endif

                                     >Reseteo</button>
                                </div>
                            </div>
                        </div>   
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="text-center">
            <div class="col-lg-3 col-md-3">
                <button type="button" class="btn btn-rounded btn-inline btn-success" onclick="descargarExcell();" id="formButton2"

                        @if($tenement->count() > 0)
                                                                
                        @elseif($tenement->count() == 0)
                            disabled=""        
                        @endif

                >Listado de los Registros</button>
            </div> 
        </div>
    </div>
</div>
</div>
</section>



<section class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-6">
{!!Form::open(array('url'=>'/admin/Date', 'method'=>'post', 'id'=>'DateForm'))!!}
    <div class="card">
        <div class="card-header text-center">
                Cambiar Fechas de Registro
            </div>
            <div class="row">
                <div class="card-block">
                    <p class="card-text">
                        <div class="col-md-12">
                             <div class="{{$classSizeForms}}">
                                <fieldset class="form-group">
                                    <label class="form-label">Inicio</label>
                                      <div class='input-group date'>
                                            {!!Form::text('Date1', null, ['class'=>'form-control', 'id'=>'date_box', 'placeholder'=>'00/00/0000'])!!}
                                            <span class="input-group-addon">
                                                <i class="font-icon font-icon-calend"></i>
                                            </span>
                                      </div>
                                </fieldset>
                            </div>
                        </div>   
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="card-block">
                    <p class="card-text">
                        <div class="col-md-12">
                             <div class="{{$classSizeForms}}">
                                <fieldset class="form-group">
                                    <label class="form-label">Fin</label>
                                      <div class='input-group date'>
                                            {!!Form::text('Date2', null, ['class'=>'form-control', 'id'=>'date_box2', 'placeholder'=>'00/00/0000'])!!}
                                            <span class="input-group-addon">
                                                <i class="font-icon font-icon-calend"></i>
                                            </span>
                                      </div>
                                </fieldset>
                            </div>
                        </div>   
                    </p>
                </div>
            </div>
             <div class="text-center">
                <button type="submit" class="btn btn-rounded btn-inline btn-warning" id="formButton2">Guardar</button>
            </div>
        </div>
    </div>              
{!!Form::close()!!}

<div class="col-md-6">
{!!Form::open(array('url'=>'/admin/Date', 'method'=>'post', 'id'=>'DateForm'))!!}
    <div class="card">
        <div class="card-header text-center">
                Cambiar Fechas de Registro
            </div>
            <div class="row">
                <div class="card-block">
                    <p class="card-text">
                        <div class="col-md-12">
                             <div class="{{$classSizeForms}}">
                                <fieldset class="form-group">
                                    <label class="form-label">Inicio</label>
                                        <div class='input-group date'>
                                            <input type="text" value="{{$dateSE->find(1)->fechaInicio->format('d-m-Y')}}" class="form-control" name="nacimiento" disabled="">
                                                <span class="input-group-addon">
                                                    <i class="font-icon font-icon-calend"></i>
                                                </span>
                                        </div>
                                </fieldset>
                            </div>
                        </div>   
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="card-block">
                    <p class="card-text">
                        <div class="col-md-12">
                             <div class="{{$classSizeForms}}">
                                <fieldset class="form-group">
                                    <label class="form-label">Fin</label>
                                        <div class='input-group date'>
                                            <input type="text" value="{{$dateSE->find(1)->fechaFin->format('d-m-Y')}}" class="form-control" name="nacimiento" disabled="">
                                                <span class="input-group-addon">
                                                    <i class="font-icon font-icon-calend"></i>
                                                </span>
                                        </div>
                                </fieldset>
                            </div>
                        </div>   
                    </p>
                </div>
            </div>
        </div>
    </div>             
{!!Form::close()!!}
            </div>
        </div><!--.row-->
    </div>
</section>    

@stop

@section('scripts')

    <script src="{{asset('/Template/js/lib/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/desabilitar.js')}}"></script>

    <script src="{{asset('/Template/js/lib/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>

    <script src="{{asset('/Template/js/lib/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/clockpicker/bootstrap-clockpicker-init.js')}}"></script>
    <script src="{{asset('/Template/js/lib/daterangepicker/daterangepicker.js')}}"></script>

@stop

<!--
<div class="col-md-5">
    <div class="card">
        <div class="card-header text-center">
                Fechas de Registro
            </div>
            <div class="row">
                <div class="card-block">
                    <p class="card-text">
                        <div class="col-md-12">
                             <div class="{{$classSizeForms}}">
                                <fieldset class="form-group">
                                    <label class="form-label">Inicio</label>
                                        <div class='input-group date'>
                                            <input type="text" value="{{$dateSE->find(1)->fechaInicio->format('d-m-Y')}}" class="form-control" name="nacimiento" disabled="">
                                                <span class="input-group-addon">
                                                    <i class="font-icon font-icon-calend"></i>
                                                </span>
                                        </div>
                                </fieldset>
                            </div>
                        </div>   
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="card-block">
                    <p class="card-text">
                        <div class="col-md-12">
                             <div class="{{$classSizeForms}}">
                                <fieldset class="form-group">
                                    <label class="form-label">Fin</label>

                                </fieldset>
                            </div>
                        </div>   
                    </p>
                </div>
            </div>
        </div>
    </div> 
</div>
</div> -->
