@extends('Admin.layout3')

@section('title')
<title>Servicio Becas</title>
@stop

@section('css')
    <link href="{{asset('/Template/css/lib/charts-c3js/c3.min.css')}}" rel="stylesheet" type="text/css">
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
                <h4 class="modal-title" id="windowTitle">¿Desea editar?</h4>
            </div>
            {!!Form::open(array('method'=>'post', 'id'=>'passForm'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Contraseña</label>
                    <input type="password" class="form-control" value="" name="password" id="password">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-danger" formaction="" id="formButton">Editar datos</button>
                </div>
            </div>
          {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->

<div class="box-typical">
    <header class="widgets-header">
        <div class="container-fluid">
            <div class="tbl tbl-outer">
                <div class="tbl-row">              
                    <div class="tbl-cell">
                        <div class="tbl tbl-item">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                    <div class="title">Total de Registros : {{$tenement->count()}}</div>
                                </div>
                                <div class="tbl-cell tbl-cell-progress">
                                </div>
                            </div>
                        </div> <!--tbl tbl-item-->
                    </div> <!--tbl-cell-->
                     <div class="tbl-cell">
                        <div class="tbl tbl-item">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                </div>
                                <div class="tbl-cell tbl-cell-progress">
                                    <div class="col-lg-3 col-md-3">
                     <a href="{{asset('/admin')}}" class="btn btn-rounded btn-primary btn-inline">Regresar</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!--tbl tbl-item-->
                    </div> <!--tbl-cell-->
                </div> <!--tbl-row-->
            </div> <!--tbl tbl-outer-->
        </div> <!--container fluid-->
    </header>
</div>

<div class="container-fluid">
    
@include('alerts.formError')
@include('alerts.sessionAlert')
    
<div class="row">

    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Carreras registradas en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar carreras', 1);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($carrer as $c)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                            {{$c->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$c->user->count()}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Color</div>
                                            <button type="button" class="btn btn-inline btn-lg" style="background-color: {{$c->color}}; border-color: #D0D0D0;"></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Estados registrados en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar estados', 2);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-2-tab-1" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($state as $s)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Estado</div>
                                                {{$s->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                                {{$s->tenement->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
                <div class="tab-pane" id="w-2-tab-2" role="tabpanel">
                    
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Municipios registrados en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar Municipios', 3);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-3-tab-1" role="tabpanel">
                  <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                     @foreach($place as $p)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Municipio</div>
                                           {{$p->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Numero de alumnos</div>
                                            {{$p->tenement->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
                <div class="tab-pane" id="w-3-tab-2" role="tabpanel">
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
</div>

<div class="row">

    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Becas Solicitadas en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar Becas', 4);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-4-tab-1" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($beca as $b)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Beca</div>
                                            {{$b->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$b->record->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
                <div class="tab-pane" id="w-4-tab-2" role="tabpanel">     
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Transportes registrados en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar Transportes', 5);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-5-tab-1" role="tabpanel">
                   <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                 @foreach($transport as $t)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Transporte</div>
                                                {{$t->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                                 {{$t->tenement->count()}}
                                        </td>
                                    </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
                <div class="tab-pane" id="w-5-tab-2" role="tabpanel">
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Tipos de Casa registradas en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar Casas', 6);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-6-tab-1" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                @foreach($typeHouse as $th)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Tipo de Casa</div>
                                             {{$th->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                             {{$th->tenement->count()}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
                <div class="tab-pane" id="w-6-tab-2" role="tabpanel">
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
</div>

@stop

@section('subHead')
@stop

@section('content')
Hola
@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/d3/d3.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/charts-c3js/c3.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/configEdit.js')}}"></script>
@stop