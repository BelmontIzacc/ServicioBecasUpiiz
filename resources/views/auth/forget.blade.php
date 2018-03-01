@extends('Admin.layout2')

@section('title')
<title>Olvide mi Contraseña</title>
@stop

@section('css')
@stop

@section('popUp')
<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
        	<div class="container">
			    <div class="row">
			        <div class="col-md-8 col-sm-6 col-lg-6 col-lg-offset-3 col-md-offset-2">
                        <a href="{{asset('/')}}">
                            <button type="button" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </a>
			            <div class="form-group input-group">
			                <input type="text" class="form-control" aria-label="Text input with dropdown button" id="info" placeholder="Ingresa Tu Boleta">
			                <div class="input-group-btn">
			                    <button type="button" class="btn btn-rounded btn-inline btn-secondary" onclick="identification(2);" >Buscar</button>
			                </div>
			            </div>
			        </div>
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
<script src="{{asset('/Template/js/custom/search.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@stop