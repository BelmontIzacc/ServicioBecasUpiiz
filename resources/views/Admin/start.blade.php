@extends('Admin.layout2')

@section('title')
<title>Inicio Servicio Becas</title>
@stop

@section('css')
<link rel="stylesheet" href="{{asset('/Template/css/lib/bootstrap-sweetalert/sweetalert.css')}}"/>
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
                <div class="widget-simple-sm-fill-caption">Alumnos Registrados</div>
            </section><!--.widget-simple-sm-fill-->
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="text-center">
            <div class="col-lg-3 col-md-3">
                 <a href="{{asset('/ExportExcelAll')}}" class="btn btn-rounded btn-incline btn-info">Listado de los Registrados</a>
            </div> 
            <div class="col-lg-3 col-md-3">
                 <a href="{{asset('/eliminarAll')}}" class="btn btn-rounded btn-incline btn-info">Eliminar Registros</a>
            </div>   
        </div>
    </div>
</div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Cancel message
                            </div>
                            <div class="card-block">
                                <p class="card-text">
                                    <button class="btn btn-primary swal-btn-cancel">Try Alert!</button>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Input message
                            </div>
                            <div class="card-block">
                                <p class="card-text">
                                    <button class="btn btn-primary swal-btn-input">Try Alert!</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-inline" name="o" id="o" >Button</button>
                    <button type="button" class="btn btn-inline swal-btn-cancel" id="test" name="test" >Button disabled</button>

                    <input name="boton1" id="boton1" type="button" value="Boton 1" onclick="desactivar(this.name,'boton1,boton2,boton3')" />
                    <input name="boton2" id="boton2" type="button" value="Boton 2" onclick="desactivar(this.name,'boton1,boton2,boton3')"/>
                    <input name="boton3" id="boton3" type="button" value="Boton 3" onclick="desactivar(this.name,'boton1,boton2,boton3')" />
 
<script type="text/javascript">
//Esta funcion servira, pone en nombreBotones los nombres de los botones separados por coma como se ve en el ejemplo de arriba
function desactivar(name,nombreBotones){
    var partesBotones = nombreBotones.split(",");
    for(i=0;i<partesBotones.length;i++){
        var boton = document.getElementById(partesBotones[i]);
        if(boton.name == name)boton.disabled = false;
        else boton.disabled = true;
    }
}
</script>

@stop

@section('scripts')

    <script src="{{asset('/Template/js/lib/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/desabilitar.js')}}"></script>
<script>
        $(document).ready(function() {

            $('.swal-btn-cancel').click(function(e){
                e.preventDefault();
                swal({
                            title: "Are you sure?",
                            text: "You will not be able to recover this imaginary file!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Yes, delete it!",
                            cancelButtonText: "No, cancel plx!",
                            closeOnConfirm: false,
                            closeOnCancel: false
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                swal({
                                    title: "Deleted!",
                                    text: "Your imaginary file has been deleted.",
                                    type: "success",
                                    confirmButtonClass: "btn-success"
                                });
                            } else {
                                swal({
                                    title: "Cancelled",
                                    text: "Your imaginary file is safe :)",
                                    type: "error",
                                    confirmButtonClass: "btn-danger"
                                });
                            }
                        });
            });

            $('.swal-btn-input').click(function(e){
                e.preventDefault();
                swal({
                    title: "An input!",
                    text: "Write something interesting:",
                    type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    inputPlaceholder: "Write something"
                }, function (inputValue) {
                    if (inputValue === false) return false;
                    if (inputValue === "") {
                        swal.showInputError("You need to write something!");
                        return false
                    }
                    swal("Nice!", "You wrote: " + inputValue, "success");
                });
            });
        });
    </script>
@stop
