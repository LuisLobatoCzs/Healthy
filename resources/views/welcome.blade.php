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
                                <svg viewBox="0 0 220 73">
                                    <image id="appstore" width="220" height="73" xlink:href="data:img/png;base64,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"/>
                                </svg>
                            </a>
                            <br><br>
                            <a href="#">
                                <svg viewBox="0 0 217 71">
                                    <image id="google_play_" data-name="google play " width="217" height="71" xlink:href="data:img/png;base64,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"/>
                                </svg>

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
        <div class="row pt-3 justify-content-center" style="position: relative;">
            
                <img class="col-4" src="{{ asset('img/telefono.png') }}" >
                
                <div class="cuadro4" style="position: absolute; left:3rem; top:5rem">
                    <b>Se acabaron las filas y las citas que nunca llegan</b>
                    <p>No hagas filas ni citas en hospitales</p>
                </div>

                <div class="cuadro4" style="position: absolute; right:3rem; top:15rem">
                    <b>24/7</b>
                    <p>texto</p>
                </div>

                <div class="cuadro4" style="position: absolute; left:3rem; bottom:12rem">
                    <b>Consultas seguras</b>
                    <p>texto</p>
                </div>

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
