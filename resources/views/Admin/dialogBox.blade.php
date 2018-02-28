@extends('Admin.layout2')

@section('title')
<title>Inicio servicio medico</title>
@stop

@section('css')
<link rel="stylesheet" href="{{asset('/Template/css/lib/colorpicker/bootstrap-colorpicker.min.css')}}">
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
                <h4 class="modal-title" id="windowTitle">Editar</h4>
            </div>
            {!!Form::open(array('method'=>'patch'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Nombre</label>
                    {!!Form::text('nombre', null, array('class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Ej: Ingeniería en Sistemas Computacionales'))!!}
                    <input type="hidden" name="idVal" id="idVal" value="">
                
                    @if($variable == 1)
                        <br/>
                        <label class="form-label">Color</label>
                        <div id="cp2" class="input-group colorpicker-component">
                            <input type="text" value="#00AABB" class="form-control" name="color" id="color2"/> 
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    @elseif($variable == 6)
                    <br/>
                    <label class="form-label" for="exampleInputDisabled2">Municipio</label>
                    <!--{{$place=\App\place::lists('nombre', 'id')}} -->
                    {!!Form::select('municipio', $place, 0, ['class'=>'select2 form-control', 'id'=>'municipio2'])!!}
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Numero de clínica</label>
                        <input id="numero2" type="text" value="" name="numero">
                    </div>
                    <label class="form-label" for="hide-show-password">Mapa de la ubicación (opcional)</label>
                    {!!Form::textarea('mapa', null, array('class'=>'form-control', 'id'=>'mapa', 'placeholder'=>'Ej: <iframe></iframe>', 'size'=>'3x5'))!!}
                    @endif
                </div>
            </div>
            
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary btn-warning" formaction="/" id="formButton">Guardar</button>
                </div>
            </div>
            {!!Form::close()!!}
            
            <div class="modal-footer">
                <div class="text-center">
                    <a onclick="toggle();" id="more">Mostrar más</a>
                </div>
            </div>
            
            {!!Form::open(array('method'=>'delete', 'style'=>'display:none', 'class'=>'details'))!!}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">¿Seguro que quiere eliminar el registro?</label>
                    </div>
                </div>
            
                <input type="hidden" name="idVal2" id="idVal2" value="">
                <div class="modal-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-rounded btn-primary btn-danger" formaction="/" id="formButton2">Eliminar</button>
                    </div>
                    <br/>
                    <div class="text-center">
                        <button type="button" class="btn btn-rounded btn-primary" onclick="toggle();">Cancelar</button>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->

<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-lg-4 col-md-6"></div>
    <div class="col-lg-4 col-md-6">
        <section class="widget widget-time">
            <header class="widget-header-dark with-btn">
                Editar @if($variable == 1)
                            carrera
                        @elseif($variable == 2)
                            estado
                        @elseif($variable == 3)
                            institución médica
                        @elseif($variable == 4)
                            municipio
                        @elseif($variable == 5)
                            estatus
                        @elseif($variable == 6)
                            clínicas
                        @endif
                <a href="{{asset('/admin/config')}}"><button type="button" class="widget-header-btn">
                    <i class="font-icon font-icon-del"></i>
                </button></a>
            </header>
            <div class="widget-time-content">
            
            @include('alerts.formError')
            
                {!!Form::open(array('method'=>'post'))!!}
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputDisabled2">Nombre de
                                @if($variable == 1)
                                    la carrera
                                @elseif($variable == 2)
                                    el estado
                                @elseif($variable == 3)
                                    la institución
                                @elseif($variable == 4)
                                    el municipio
                                @elseif($variable == 5)
                                    el estatus
                                @elseif($variable == 6)
                                    la clínica
                                @endif
                            </label>
                            <input name="nombre" type="text" class="form-control" 
placeholder="
@if($variable == 1)
Ej: Ingeniería en Sistemas Computacionales
@elseif($variable == 2)
Ej: Zacatecas
@elseif($variable == 3)
Ej: IMSS
@elseif($variable == 4)
Ej: Guadalupe
@elseif($variable == 5)
Ej: Inscrito
@elseif($variable == 6)
Ej: HGZMF
@endif" value="">
                        
                        @if($variable == 1)
                        <br/>
                            <label class="form-label">Color</label>
                            <div id="cp3" class="input-group colorpicker-component">
                                <input type="text" value="#a0125a" class="form-control" name="color" id="color"/> 
                                <span class="input-group-addon"><i></i></span>
                            </div>
                        @elseif($variable == 6)
                        <br/>
                        <!--{{$place=\App\place::lists('nombre', 'id')}} -->
                        <label class="form-label" for="exampleInputDisabled2">Municipio</label>
                        {!!Form::select('municipio', $place->prepend('Seleccionar', 0), 0, ['class'=>'select2 form-control'])!!}
                        <br/>
                        <br/>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputDisabled2">Numero de clínica</label>
                            <input id="numero" type="text" value="" name="numero">
                        </div>
                        <label class="form-label" for="hide-show-password">Mapa de la ubicación (opcional)</label>
                        {!!Form::textarea('mapa', null, array('class'=>'form-control', 'id'=>'mapa', 'placeholder'=>'Ej: <iframe></iframe>', 'size'=>'3x5'))!!}
                        @endif
                        
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary btn-warning" formaction="{{asset('/admin/config/insert')}}/{{$variable}}">Agregar</button>
                </div>
                {!!Form::close()!!}
                
                <h5 class="m-t-lg with-border">
                    @if($variable == 1)
                        Carreras registradas
                    @elseif($variable == 2)
                        Estados registrados
                    @elseif($variable == 3)
                        Instituciones registradas
                    @elseif($variable == 4)
                        Municipios registrados
                    @elseif($variable == 5)
                        Estatus registrados
                    @elseif($variable == 6)
                        Clínicas registradas
                    @endif
                en el sistema</h5>
                
                <div class="pre-scrollable">
                    <table class="table table-hover">
                        <tbody>
                            
                            @if($variable == 1)
                                @foreach(\App\carrer::all() as $carrer)
                                <tr>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                        {{$carrer->nombre}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                        {{$carrer->students->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Color</div>
                                        <button type="button" class="btn btn-inline btn-lg" style="background-color: {{$carrer->color}}; border-color: #D0D0D0;"></button>
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                        <button type="button"
                                                    class="btn btn-inline btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-sm" onclick="updateInputs3('Editar carrera', '{{$carrer->nombre}}', 1, {{$carrer->id}}, '{{$carrer->color}}');">
                                                    <span class="font-icon font-icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @elseif($variable == 2)
                                @foreach(\App\state::all() as $state)
                                <tr>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Estado</div>
                                        {{$state->nombre}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                        {{$state->students->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                        <button type="button"
                                                    class="btn btn-inline btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-sm" onclick="updateInputs('Editar estado', '{{$state->nombre}}', 2, {{$state->id}});">
                                                    <span class="font-icon font-icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @elseif($variable == 3)
                                @foreach(\App\medicalInstitute::all() as $institute)
                                <tr>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Institucione médica</div>
                                        {{$institute->nombre}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de registros</div>
                                        {{$institute->medicalData->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                        <button type="button"
                                                    class="btn btn-inline btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-sm" onclick="updateInputs('Editar institución', '{{$institute->nombre}}', 3, {{$institute->id}});">
                                                    <span class="font-icon font-icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @elseif($variable == 4)
                                @foreach(\App\place::all() as $place)
                                <tr>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Municipio</div>
                                        {{$place->nombre}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                        {{$place->students->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de clínicas</div>
                                        {{$place->clinics->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                        <button type="button"
                                                    class="btn btn-inline btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-sm" onclick="updateInputs('Editar municipio', '{{$place->nombre}}', 4, {{$place->id}});">
                                                    <span class="font-icon font-icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @elseif($variable == 5)
                                @foreach(\App\status::all() as $status)
                                <tr>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Estatus</div>
                                        {{$status->nombre}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                        {{$status->students->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                        <button type="button"
                                                    class="btn btn-inline btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-sm" onclick="updateInputs('Editar estatus', '{{$status->nombre}}', 5, {{$status->id}});">
                                                    <span class="font-icon font-icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @elseif($variable == 6)
                                @foreach(\App\clinic::all() as $clinic)
                                <tr>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Clínica</div>
                                        {{$clinic}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de registros</div>
                                        {{$clinic->medicalData->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                        <button type="button"
                                                    class="btn btn-inline btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-sm" onclick="updateInputs2('Editar clínicas', '{{$clinic->tipo}}', 6, {{$clinic->id}}, {{$clinic->municipio_id}}, {{$clinic->numero}}, '{{$clinic->mapa}}');">
                                                    <span class="font-icon font-icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        </section><!--.widget-time-->
    </div>
    <div class="col-lg-4 col-md-6"></div>
</div>

</div>
</div>

@stop

@section('subHead')
@stop

@section('content')
Hola
@stop

@section('scripts')
    <script src="{{asset('/Template/js/custom/configEdit.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    
    <script>
        $(document).ready(function(){
            $("input[name='numero']").TouchSpin();
        });
        $(document).ready(function(){
            $("input[name='numero2']").TouchSpin();
        });
        $(function() {
            $('#cp2').colorpicker();
            $('#cp3').colorpicker();
        });
    </script>
@stop
