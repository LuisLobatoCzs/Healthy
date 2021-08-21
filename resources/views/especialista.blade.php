@extends('layouts.app')

@section('content')
<div class="bg-index">

    <div class="col-12">
        <!-- Doctores -->
        <div class="row justify-content-center pt-5 cabecera" style="position: relative;">
            <div class="col-4">
                <img width="100%" src="{{ asset('img/doctores.png') }}">
            </div>
            <div class="col-12" style="position: absolute; left: -15px; top: 335px;">
                <img width="100%" src="{{ asset('img/onda2.png') }}">
            </div>
            
            <div class="col-6 pt-2">
                <div class="row">
                    <b class="size2 colorTexto3"> ¿Qué es </b>
                    <img width="20%" src="{{ asset('img/logo.png') }}" alt="logo" style="position: relative; top: 5px">
                    <b class="colorTexto3 size2"> ? </b>
                </div>
                <div class="row p-4 size6 justify-content-center">
                    <div class="col-11 justificar">
                        <b>
                            Somos una empresa enfocada a la salud,
                            conectamos a usuarios que necesiten
                            servicios médicos con profesionales de 
                            salud dispuestos a ofrecer consultas a 
                            domicilio, obten nuestros servicios 
                            desde donde estes bajando nuestra App.
                        </b>
                    </div>
                </div>
            </div>            
        </div>

        <!-- Beneficios -->
        <div class="row justify-content-center pt-5">
            <div class="col-5 pt-4  ">
                <img src="{{ asset('img/nube.png') }}" class="img-fluid" alt="" style="position:relative; left:100px;">
            </div>
            <div class="col-7">
                <div class="row pt-5 pb-4"></div>
                <div class="row justify-content-center cabecera size2">
                    <b class="colorTexto3"> Beneficios! </b>
                </div>
                <div class="row justify-content-center size6 cabecera">
                    <p class="centrar"><b >
                        Genera ingresos extra en donde estés <br> 
                        Tú decides la cantidad de ingresos <br> que quieres obtener <br>
                        Maneja tus tiempos fácilmente <br>
                        Realiza consultas cuando quieras <br>
                        Tú tienes el control de tus consultas
                    </b></p>
                    <br>
                </div>
                <div class="row justify-content-center">
                    <p class="col-3">
                        <a href="" >
                            <object class="img-fluid" data="{{ asset('img/requisitos.svg') }}" type="image/svg+xml">
                                <!-- Imagen alternativa si el SVG no puede cargarse -->
                                <img src="alternativo.png" alt="alternativa">
                            </object>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Teléfono -->
        <div class="row justify-content-center mt-3 pb-5">
            <div class="col-12 centrar size2 mb-1">
                <b class="colorTexto3">
                    ¿Cómo funciona?
                </b>
            </div>
            <img src="{{ asset('img/1234.png') }}" alt="Definir imagen aqui" class="col-6 img-fluid" >
        </div>

        <!-- Texto y escudo -->
        <div class="row centerY derecha">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="row justify-content-center size4">
                    <b class="colorTexto3 size2 centrar">
                        Brinda consultas de forma segura
                    </b>
                </div>
                <div class="row justify-content-center size6">
                    <b class="centrar">
                        Contamos con normas estrictas de seguridad para nuestros usuarios y colaboradores, dentro de la aplicación puedes encontrar diferentes funciones para mantenerte seguro, <a href="">da clic aquí y conócelas todas.</a> 
                    </b>
                </div>
            </div>
            <div class="col-2">
                <object class="img-fluid" data="{{ asset('img/seguridad.svg') }}" type="image/svg+xml">
                    <!-- Imagen alternativa si el SVG no puede cargarse -->
                    <img src="alternativo.png" alt="alternativa">
                </object>
            </div>
        </div>

        <!-- Texto y botón -->
        <div class="row justify-content-center pt-5 pb-5">
            <b class="colorTexto3 size2 centrar col-10">
                ¿Quieres ser parte de nuestro equipo de especialistas?
            </b>
            <b class="centrar col-11">
                Da clic aquí para conocer nuestros requisitos 
            </b>
            
            <p class="col-2 pt-3">
                <a href="">
                    <object class="img-fluid" data="{{ asset('img/requisitos.svg') }}" type="image/svg+xml">
                        <!-- Imagen alternativa si el SVG no puede cargarse -->
                        <img src="alternativo.png" alt="alternativa">
                    </object>
                </a>
            </p>
                
        </div>

    </div>
</div>
@endsection
