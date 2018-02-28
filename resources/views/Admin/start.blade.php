@extends('Admin.layout2')

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
<div class="container">
    <div class="row">
        <div class="col-lg-offset-0 col-lg-2 col-md-3 col-sm-3 col-xs-6">
            <section class="widget widget-simple-sm-fill grey">
                <div class="widget-simple-sm-icon">
                    {{$tenement->count()}}
                </div>
                <div class="widget-simple-sm-fill-caption">Alumnos</div>
            </section><!--.widget-simple-sm-fill-->
        </div>
    </div>
</div>
@stop

@section('scripts')

@stop
