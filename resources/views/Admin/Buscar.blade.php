@extends('Admin.layout2')

@section('title')
<title>Buscar Servicio Becas</title>
@stop

@section('css')
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
            {!!Form::open(array('url'=>'/admin/search/{{$u->id}}','method'=>'post', 'id'=>'passForm'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Contraseña</label>
                    <input type="password" class="form-control" value="" name="clave" id="clave" placeholder="Clave">
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
<div class="row">
	<div class="page-contenct">
		<div class="container-fluid">
			<div class="box-typical-body">
				<div class="col-md-8 col-sm-6 col-lg-6 col-lg-offset-3 col-md-offset-2">
		            <div class="form-group input-group">
		                <input type="text" class="form-control" aria-label="Text input with dropdown button" id="info" placeholder="Nombre y Apellido Paterno o Boleta">
		                <div class="input-group-btn">
                            <button type="button" onclick="identification(1);" class="btn btn-inline btn-secondary">Nombre</button>
                            <button type="button" onclick="identification(2);" class="btn btn-inline btn-secondary">Boleta</button>
		                </div>
		            </div>
		        </div>
			</div>
		</div>
	</div>
</div>

{!!Form::open(array('url'=>'/admin/search', 'method'=>'post', 'id'=>'forms'))!!}
    <input type="hidden" id="opc" name="opc">
    <input type="hidden" id="busqueda" name="busqueda">
{!!Form::close()!!}

@if(isset($user))
<style type="text/css">
 p{ color: black; }
</style>

    <div class="container">
        <div class="row">
            <section class="widget widget-activity">
                <header class="widget-header">
                    Resultados
                    <span class="label label-pill label-primary">{{count($user)}}</span>
                </header>
                <div>
                @foreach($user as $u)
                <div class="widget-activity-item">
                    <div class="user-card-row">
                        <div class="tbl-row">
                            <div class="tbl-cell tbl-cell-photo">
                                <img src="{{asset('/Template/img/Escudo.png')}}" alt="" style="height:70px;width:auto;">
                            </div>
                            <div class="tbl-cell">
                                <p class="strong">
                                    Nombre : {{$u->__toString()}} 
                                </p>
                                <p>
                                    Boleta: {{$u->boleta}}
                                </p>
                                <p>
                                    Carrera: {{$u->carrer->nombre}}
                                </p>
                                <p>
                                    Semestre: {{$u->semestre}} 
                                </p>
                                <p class="">
                                    Grupo: {{$u->grupo}} 
                                </p>
                                <p>
                                    <button type="button" class="btn btn-rounded btn-inline btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Resetear', {{$u->id}});" id="formButton">Eliminar Registro</button>
                                </p>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </section><!--.widget-tasks-->
        </div>
    </div>
@endif

@stop

@section('scripts')
<script src="{{asset('/Template/js/custom/search.js')}}"></script>
<script src="{{asset('/Template/js/custom/desabilitar.js')}}"></script>
@stop
