@extends('Admin.layout2')
<?php
$index=4;
?>
@section('title')
<title>Inicio Servicio Becas</title>
@stop

@section('css')
@stop

@section('popUp')
<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
            {!!Form::open(array('url'=>'/password/reset', 'class'=>'sign-box', 'method'=>'post'))!!}
            {!! csrf_field() !!}
                <div class="sign-avatar">
                    <img src="{{asset('Template/img/upiiz4.svg')}}" alt="" style="height:100px;width:auto;">
                </div>
                <input type="hidden" name="token" value="{{ $token }}">
                @if(count($errors) > 0)
                <div class="alert alert-danger alert-icon alert-close alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 
                <header class="sign-title">Cambiar Contraseña</header>
                <div class="form-group">
                    {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Correo', 'id'=>'email'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'id'=>'password'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Nueva Contraseña', 'id'=>'password_confirmation'])!!}
                </div>
                <button type="submit" class="btn btn-rounded">Reset Password</button>
                
                <a href="{{asset('/')}}"><button type="button" class="close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            {!!Form::close()!!}
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