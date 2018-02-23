@extends('Admin.layout2')

@section('title')
<title>Login Servicio Becas</title>
@stop

@section('css')

@stop

@section('popUp')
<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
            {!!Form::open(array('url'=>'/login', 'class'=>'sign-box', 'method'=>'post'))!!}
                <div class="sign-avatar">
                    <img src="{{asset('Template/img/avatar-sign.png')}}" alt="">
                </div>
                
                @include('alerts.formError')
                
                <header class="sign-title">Iniciar sesión</header>
                <div class="form-group">
                    {!!Form::text('boleta', null, ['class'=>'form-control', 'placeholder'=>'Identificación', 'id'=>'boleta'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'id'=>'password'])!!}
                </div>
                
                <div class="form-group">
                    <div class="checkbox float-left">
                        <input type="checkbox" id="remember" name="remember"/>
                        <label for="remember">Recordarme</label>
                    </div>
                    <div class="float-right reset">
                        <a href="">¡Olvide mi Contraseña!</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-rounded">Entrar</button>
                
                <a href="{{asset('/')}}"><button type="button" class="close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.page-center-->
@stop

@section('scripts')

@stop