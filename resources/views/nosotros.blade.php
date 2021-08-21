@extends('layouts.app')

@section('content')
<div class="bg-index">

    <div class="col-12">
        <!-- Doctores -->
        <div class="row justify-content-center pt-5 cabecera" style="position: relative;">
            <div class="col-12" style="position: absolute; left: -15px; top: 200px;">
                <img width="100%" src="{{ asset('img/onda.png') }}">
            </div>
            <div class="col-5" style="position: relative;">
                <img width="100%" src="{{ asset('img/doctores_celular.png') }}">
            </div>
            
            <div class="col-6 pt-3">
                <div class="row justify-content-center">
                    <b class="resaltado size3"> ¿Quiénes somos? </b>
                </div>
                <div class="row p-4 size5 justify-content-center">
                    <div class="col-12 justificar">
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

        <!-- Cuadro blanco -->
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center resaltado cuadro3 size3" style="position: relative; left: -5px;">
                    <div class="col-10 centrar">
                        <b>
                            Creamos oportunidades de trabajo para
                            <br>
                            escialistas del área de la salud
                        </b>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo -->
        <div class="row justify-content-center mt-3">
            <div class="col-8 centrar size2 mb-5">
                <b>
                    Con
                </b>
                <img width="20%" src="{{ asset('img/logo.png') }}" alt="logo" style="position: relative; top: 5px">
            </div>
        </div>

        <!-- Cuadros -->
        <div class="row justify-content-center">
            <div class="col-3 m-1 cuadrofilas">
                <img src="{{ asset('img/nofilas.png') }}" class="top img-fluid"> 
                <img src="{{ asset('img/nofilas_2.png') }}" class="back img-fluid"> 
            </div>
            <div class="col-3 m-1 cuadroservicio24">
                <img src="{{ asset('img/servicio24.png') }}" class="top img-fluid"> 
                <img src="{{ asset('img/servicio24_2.png') }}" class="back img-fluid">
            </div>
            <div class="col-3 m-1 cuadroseguridad">
                <img src="{{ asset('img/seguridad.png') }}" class="top img-fluid"> 
                <img src="{{ asset('img/seguridad_2.png') }}" class="back img-fluid">
            </div>
        </div>

        <!-- Texto -->
        <div class="row justify-content-center">
            <div class="col-9 centrar p-5 size5">
                <b>
                    En Healthy conocemos y entendemos las necesidades de los profesionistas en la salud ante la falta de oportunidades laborales, por eso ofrecemos a nuestros colaboradores facilidades para brindar servicios directamente en el domicilio del paciente con pagos justos que beneficien al paciente y al especialista.
                </b>
            </div>
        </div>

    </div>
</div>
@endsection
