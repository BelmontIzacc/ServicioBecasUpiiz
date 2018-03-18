@extends('Admin.layout2')
<?php
$index=4;
?>
@section('title')
<title>Olvide Contraseña</title>
@stop

@section('css')
@stop

@section('popUp')
<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                {!!Form::open(array('url'=>'/password/email', 'method'=>'post'))!!}
                {!! csrf_field() !!}
                @if(count($errors) > 0)
                     <div class="alert alert-danger alert-icon alert-close alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                        <i class="font-icon font-icon-warning"></i>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               <!-- @include('alerts.formError')-->
                @include('alerts.sessionAlert')
                    <div class="col-md-8 col-sm-6 col-lg-6 col-lg-offset-3 col-md-offset-2">
                        <a href="{{asset('/')}}">
                            <button type="button" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </a>

                        <div class="form-group input-group">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Ingresa Tu Correo">
                            <div class="input-group-btn">
                                <button class="btn btn-rounded btn-inline btn-secondary"  type="submit">Buscar</button>
                            </div>
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div><!--.page-center-->
@stop

@section('subHead')

@stop

@section('content')

@stop

@section('scripts')

@stop