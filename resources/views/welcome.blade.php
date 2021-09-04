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
                <div style="position: absolute; left: 0px; top: 50px;" class="aux color5 p-3 col-md-5 col-sm-6 col-12">
                    <h5> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h5> 
                </div>
                <!-- Botones -->
                <div style="position: absolute; right: 0px; top: 50px;" class="not_priority p-3 col-md-2 col-sm-4">
                    <a href="#">
                        <object class="img-fluid" data="{{ asset('img/appstore.svg') }}" type="image/svg+xml"></object>
                    </a>
                    <br><br>
                    <a href="#">
                        <object class="img-fluid" data="{{ asset('img/playstore.svg') }}" type="image/svg+xml"></object>
                    </a>
                </div>
                <img class="d-block w-100" src="{{ asset('img/s1.jpg') }}">
            </div>
            <div class="carousel-item" style="position: relative;">
                <!-- Cuadro de texto flotante-->
                <div style="position: absolute; left: 0px; top: 50px;" class="not_priority color4 p-3 col-md-5 col-sm-6 col-12">
                    <h2> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h2> 
                </div>
                <div style="position: absolute; left: 0px; top: 50px;" class="aux color5 p-3 col-md-5 col-sm-6 col-12">
                    <h5> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h5> 
                </div>
                <!-- Botones -->
                <div style="position: absolute; right: 0px; top: 50px;" class="not_priority p-3 col-md-2 col-sm-4">
                    <a href="#">
                        <object class="img-fluid" data="{{ asset('img/appstore.svg') }}" type="image/svg+xml"></object>
                    </a>
                    <br><br>
                    <a href="#">
                        <object class="img-fluid" data="{{ asset('img/playstore.svg') }}" type="image/svg+xml"></object>
                    </a>
                </div>
                
                <img class="d-block w-100" src="{{ asset('img/s2.jpg') }}">
            </div>
            <div class="carousel-item" style="position: relative;">
                <!-- Cuadro de texto flotante-->
                <div style="position: absolute; left: 0px; top: 50px;" class="not_priority color4 p-3 col-md-5 col-sm-6 col-12">
                    <h2> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h2> 
                </div>
                <div style="position: absolute; left: 0px; top: 50px;" class="aux color5 p-3 col-md-5 col-sm-6 col-12">
                    <h5> <b> ¡Ten a tu alcance los mejores especialistas del área de la salud! </b> </h5> 
                </div>
                <!-- Botones -->
                <div style="position: absolute; right: 0px; top: 50px;" class="not_priority p-3 col-md-2 col-sm-4">
                    <a href="#">
                        <object class="img-fluid" data="{{ asset('img/appstore.svg') }}" type="image/svg+xml"></object>
                    </a>
                    <br><br>
                    <a href="#">
                        <object class="img-fluid" data="{{ asset('img/playstore.svg') }}" type="image/svg+xml"></object>
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
        <div class="row justify-content-center pc" style="position: relative;">
            <img class="col-12" src="{{ asset('img/pantallaCompleta.png') }}" >
        </div> 

        <div class="row justify-content-center tablet" style="position: relative;">
            <img class="col-12" src="{{ asset('img/tablet.png') }}" >
        </div>    
        
        <div class="row justify-content-center celular" style="position: relative;">
            <img class="col-12" src="{{ asset('img/celular.png') }}" >
        </div>   

        <br><br><br><br>

        <!-- Leyenda -->
        <div class="row pt-1 justify-content-center cabecera">
            <p> <h1> <b>¿Cómo funciona?</b> </h1> </p>
        </div>

        <!-- Login & Register -->
        <div class="row pt-5 pb-5 justify-content-center">
            
            
            <!-- Usuario -->
            <div class="col-md-5 col-12 centrar cabecera pb-5">
                <h2> <b> Usuario </b> </h2>
                <br>
                <h6 class="pb-4">
                    - Descarga nuestra app, regístrate. <br>
                    - Elige al especialista que necesites.<br>
                    -Indica el motivo de la consulta.<br>
                    -Escoge el lugar en donde se realizará el servicio.<br>
                    -Recibe tu especialista en el lugar del servicio.<br>
                </h6>

                <!-- Botones -->
                <a href="/registro-usuario">
                    <button class="btn color3 mt-4 edge size6 p-3"> <span class="pc">&nbsp;&nbsp;&nbsp;</span> Regístrate como usuario <span class="pc">&nbsp;&nbsp;&nbsp;</span> </button>
                </a>
                <a href="#">
                    <img class="mt-3 col-md-8 col-sm-7 col-10" src="{{ asset('img/rgoogle.jpg') }}">
                </a>
                <br>    
                <a href="#">
                    Ya tengo cuenta de usuario
                </a>

            </div>
            
            <!-- Linea divisora-->
            <div class="vl pc"> </div> 
            
            
            <!-- Especialista -->
            <div class="col-md-5 col-12 centrar cabecera pb-5">
                <h2> <b> Especialista </b> </h2>
                <br>
                <h6>
                   <p>Registrate en nuestra app y cumple con los requisitos, espera de 3 a 5 días 
                   para ser aceptado, una vez aceptado deberas cambiar tu estado a DISPONIBLE
                   y así comenzarás a recibir solicitudes. Todas tus consultas tienen un rango
                   máximo de 6km a la redonda partiendo desde tu ubicación</p> 
                    
                </h6>

                <!-- Botones -->
                <a href="/registro-especialista">
                    <button class="btn color3 mt-4 edge size6 p-3"> <span class="pc">&nbsp;&nbsp;&nbsp;</span> Regístrate como especialista <span class="pc">&nbsp;&nbsp;&nbsp;</span> </button>
                </a>
                <a href="#">
                    <img class="mt-3 col-md-8 col-sm-7 col-10" src="{{ asset('img/rgoogle.jpg') }}">
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
