@extends('layouts.app')

@section('content')
<div class="bg-index">

    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active" style="position: relative;">
                <!-- Cuadro de texto flotante-->
                <div style="position: absolute; left: 0px; top: 50px;" class="not_priority color4 p-3 col-md-5 col-sm-6 col-12">
                            <h2> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h2> 
                        </div>
                        <div style="position: absolute; left: 0px; top: 80px;" class="aux color4 p-3 col-md-5 col-sm-6 col-12">
                            <h5> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h5> 
                        </div>
                        <!-- Botones -->
                        <div style="position: absolute; right: 0px; top: 50px;" class="not_priority p-3 col-md-2 col-sm-4">
                            <a href="#">
                            
                                <img width="100%" src="{{ asset('img/appstore.svg') }}">
                            </a>
                            <br><br>
                            <a href="#">
                                <img width="100%" src="{{ asset('img/playstore.svg') }}">
                            </a>
                        </div>
                <img class="d-block w-100" src="{{ asset('img/s1.jpg') }}">
            </div>
            <div class="carousel-item" style="position: relative;">
                <!-- Cuadro de texto flotante-->
                <div style="position: absolute; left: 0px; top: 50px;" class="not_priority color4 p-3 col-md-5 col-sm-6 col-12">
                    <h2> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h2> 
                </div>
                <div style="position: absolute; left: 0px; top: 80px;" class="aux color4 p-3 col-md-5 col-sm-6 col-12">
                    <h5> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h5> 
                </div>
                <!-- Botones -->
                <div style="position: absolute; right: 0px; top: 50px;" class="not_priority p-3 col-md-2 col-sm-4">
                    <a href="#">
                        <img width="100%" src="{{ asset('img/appstore.svg') }}">
                    </a>
                    <br><br>
                    <a href="#">
                        <img width="100%" src="{{ asset('img/playstore.svg') }}">
                    </a>
                </div>
                
                <img class="d-block w-100" src="{{ asset('img/s2.jpg') }}">
            </div>
            <div class="carousel-item" style="position: relative;">
                <!-- Cuadro de texto flotante-->
                <div style="position: absolute; left: 0px; top: 50px;" class="not_priority color4 p-3 col-md-5 col-sm-6 col-12">
                    <h2> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h2> 
                </div>
                <div style="position: absolute; left: 0px; top: 80px;" class="aux color4 p-3 col-md-5 col-sm-6 col-12">
                    <h5> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h5> 
                </div>
                <!-- Botones -->
                <div style="position: absolute; right: 0px; top: 50px;" class="not_priority p-3 col-md-2 col-sm-4">
                    <a href="#">
                    
                        <img width="100%" src="{{ asset('img/appstore.svg') }}">
                    </a>
                    <br><br>
                    <a href="#">
                        <img width="100%" src="{{ asset('img/playstore.svg') }}">
                    </a>
                </div>
                
                <img class="d-block w-100" src="{{ asset('img/s3.jpg') }}">
            </div>
        </div>
         
    </div>

    <!-- Contenido -->
    <div class="container">
        <!-- Teléfono -->
        <br><br><br>
        <div class="row pt-5 justify-content-center">
            <img width="80%" src="{{ asset('img/telefono.png') }}">
        </div>
        <br><br><br><br>

        <!-- Leyenda -->
        <div class="row pt-1 justify-content-center cabecera">
            <p> <h1> <b>¿Cómo funciona?</b> </h1> </p>
        </div>

        <!-- Login & Register -->
        <div class="row p-5 justify-content-center">
            
            
            <!-- Usuario -->
            <div class="col-5 centrar cabecera">
                <h2> <b> Usuario </b> </h2>
                <br>
                <h5>
                    - Descarga nuestra app, regístrate. <br>
                    - Elige al especialista que necesites.<br>
                    -Indica el motivo de la consulta.<br>
                    -Escoge el lugar en donde se realizará el servicio.<br>
                    -Recibe tu especialista en el lugar del servicio.<br>
                </h5><br><br>

                <!-- Botones -->
                <a href="/registro-usuario">
                    <button class="btn btn-success mt-4 edge size5 p-3"> &nbsp;&nbsp;&nbsp; Regístrate como usuario  &nbsp;&nbsp;&nbsp; </button>
                </a>
                <a href="#">
                    <img class="mt-3" width="60%" src="{{ asset('img/rgoogle.jpg') }}">
                </a>
                <br>    
                <a href="#">
                    Ya tengo cuenta de usuario
                </a>

            </div>
            
            <!-- Linea divisora-->
            <div class="vl"> </div> 
            
            
            <!-- Especialista -->
            <div class="col-5 centrar cabecera">
                <h2> <b> Especialista </b> </h2>
                <br>
                <h5>
                   <p>Registrate en nuestra app y cumple con los requisitos, espera de 3 a 5 días 
                   para ser aceptado, una vez aceptado deberas cambiar tu estado a DISPONIBLE
                   y así comenzarás a recibir solicitudes. Todas tus consultas tienen un rango
                   máximo de 6km a la redonda partiendo desde tu ubicación</p> 
                    
                </h5>

                <!-- Botones -->
                <a href="/registro-especialista">
                    <button class="btn btn-success mt-4 edge size5 p-3"> &nbsp;&nbsp;&nbsp; Regístrate como especialista  &nbsp;&nbsp;&nbsp; </button>
                </a>
                <a href="#">
                    <img class="mt-3" width="60%" src="{{ asset('img/rgoogle.jpg') }}">
                </a>
                <br>    
                <a href="#">
                    Ya tengo cuenta de especialista
                </a>
            </div>
        </div>

        <div class="row p-5"></div>


    </div>

</div>
@endsection
