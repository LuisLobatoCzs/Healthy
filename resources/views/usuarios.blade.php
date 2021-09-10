@extends('layouts.app')

@section('content')
<div class="bg-index">

    <div class="col-12">
        <!-- Encabezado -->
        <div class="row justify-content-center pt-5 pb-5 pl-2 pr-2 sombra size2 resaltado bg-blanco">
            <b><u>
                Los mejores especialistas en la salud a un clic de distancia
            </u></b>
        </div>

        <!-- Doctor -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-8">
                <img width="100%" src="{{ asset('img/doctor.png') }}" style="position: relative; top: -20px;">
            </div>
            <div class="col-9">
                <div class="row justify-content-center size4 cabecera pt-5">
                    <b>
                    ¿Qué es Health&?
                    </b>
                </div>
                <div class="row justify-content-center size5 cabecera pt-2">
                    <b class="centrar">
                        Somos una empresa comprometida con la salud de nuestors usuarios ¡Queremos que nuestros
                        clientes se sientan bien desde la comodidad de su casa! por eso facilitamos el contacto con
                        el contacto con especialistas de la salud como médicos generales, fisioterapeutas y enfermeras para que puedas
                        facilitar tus servicios a usuarios que se encuentran cerca de ti.
                    </b>
                </div>
            </div>
        </div>

        <!-- Celular -->
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-md-8 col-sm-11 col-12">
                <img width="100%" src="{{ asset('img/usuariocelular.png') }}">
            </div>
        </div>  
        
        <!-- Cuadro -->
        <div class="row justify-content-center p-5 cuadroblanco sombra2">
            <div class="col-md-10">
                <div class="row justify-content-center size3 resaltado pb-3">
                    <b class="centrar">
                        Pide al especialista de la salud que 
                        <br>
                        necesites de manera segura.
                    </b>
                </div>

                <div class="row justify-content-center size5 cabecera mb-3">
                    <b class="centrar">
                        Health& cuenta con distintas funciones para que puedas recibir consultas de forma
                        segura, desde filtros de verificaciones para los especialistas, hasta poder compartir 
                        con alguna persona de confianza el servicio que estas recibiendo sin tener que
                        compartir el motivo de tu consulta
                    </b>
                </div>

                <div class="row justify-content-center size5 cabecera">
                    <a href="/ayuda">
                        <b><u>
                            Conoce más
                        </u></b>
                    </a>
                </div>
            </div>        
        </div>

        <div class="row"><br><br><br><br></div>

    </div>
</div>
@endsection
