@extends('layouts.app')

@section('content')
<div class="col-12 bg-index al-fondo">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-8 col-12">
            <div class="row pt-5" style="position: relative;">
                <!-- Foto -->
                <div class="col-md-3 col-sm-5 col-5 centrar" style="position:relative">
                    <img class="img-fluid" src="/img/perfil/perfil.png" alt="">
                </div>
                <!-- Edad -->
                <div class="col-md-7 col-sm-10 col-7 color6 atras" style="position: absolute; left:7em; top:4em; font-size: calc(1em + 0.5vw);">
                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <b> Edad: </b>
                </div>
                <!-- Peso -->
                <div class="col-md-7 col-sm-10 col-7 color6 atras" style="position: absolute; left:7em; top:6em; font-size: calc(1em + 0.5vw);">
                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <b> Peso: </b>
                </div>
                <!-- Estatura -->
                <div class="col-md-7 col-sm-10 col-7 color6 atras" style="position: absolute; left:7em; top:8em; font-size: calc(1em + 0.5vw);">
                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <b> Estatura: </b>
                </div>
            </div>

            <div class="row pb-5 centerY">
                <!-- Nombre -->
                <div class="col-md-3 col-sm-6 col-5 centrar">
                    Nombre y apellidos
                </div>
                <!-- Edad -->
                <div class="col-md-3 col-sm-6 col-5 atras">
                    <img class="img-fluid" src="/img/perfil/estrellas.png" alt="">
                </div>
            </div>

            <div class="row p-2">
                <div class="color7 col-9">
                    <div class="col-md-3">
                        <object class="img-fluid" type="image/svg+xml" data="/img/perfil/tarjeta.svg" type=""></object>                    
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="color7 col-9">
                    <div class="col-md-3">
                        <object class="img-fluid" type="image/svg+xml" data="/img/perfil/direccion.svg" type=""></object>                    
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="color7 col-9">
                    <div class="col-md-3">
                        <object class="img-fluid" type="image/svg+xml" data="/img/perfil/healthy coins.svg" type=""></object>                    
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="color7 col-9">
                    <div class="col-md-3">
                        <object class="img-fluid" type="image/svg+xml" data="/img/perfil/favoritos.svg" type=""></object>                    
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="color7 col-9">
                    <div class="col-md-3">
                        <object class="img-fluid" type="image/svg+xml" data="/img/perfil/registro de consultas.svg" type=""></object>                    
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="color7 col-9">
                    <div class="col-md-3">
                        <object class="img-fluid" type="image/svg+xml" data="/img/perfil/centro de ayuda.svg" type=""></object>                    
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="color7 col-9">
                    <div class="col-md-3">
                        <object class="img-fluid" type="image/svg+xml" data="/img/perfil/terminos y condiciones.svg" type=""></object>                    
                    </div>
                </div>
            </div>

            <div class="row p-2 justify-content-center">
                <a href="/"><h3 class="colorTexto4">Cerrar Sesión</h3></a>
            </div>

            <br><br><br>

            
        </div>
    </div>
</div>
@endsection