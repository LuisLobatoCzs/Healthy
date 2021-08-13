@extends('layouts.app')

@section('content')
<div class="bg-index">

    <div class="col-12">
        <!-- Doctores -->
        <div class="row justify-content-center pt-5 pb-5 cabecera">
            <div class="col-5">
                <img width="100%" src="{{ asset('img/doctores_celular.png') }}">
            </div>
            <div class="col-6 pt-5">
                <div class="row justify-content-center">
                    <b class="resaltado size4"> ¿Quiénes somos? </b>
                </div>
                <div class="row p-4 size6 justify-content-center">
                    <div class="col-10 justificar">
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
            <div class="col-11">
                <div class="row justify-content-center resaltado cuadro3 size3">
                    <div class="col-8 centrar">
                        <b>
                            Creamos oportunidades de trabajo para escialistas del área de la salud
                        </b>
                    </div>
                </div>
            </div>
        </div>

        <!-- Más texto -->
        <div class="row justify-content-center mt-3">
            <div class="col-8 centrar size6 mb-5">
                <b>
                    En Health& conocemos y entendemos las necesidades de los 
                    profesionistas en la salud ante la falta de oportunidades laborales, por eso
                    ofrecemos a nuestros colaboradores facilidades para brindar
                </b>
            </div>
            <div class="col-8 mb-5"><br></div>
        </div>

    </div>
</div>
@endsection
