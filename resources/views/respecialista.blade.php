@extends('layouts.app')

@section('content')
<div class="col-12 bg-index">

    <!-- Carousel -->
    <div id="carousel" class="carousel slide row" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active" style="position: relative;">
                <img class="d-block w-100" src="{{ asset('img/formularios/regEspecialista.png') }}">
            </div>
            <!-- Cuadro de texto flotante-->
            <div style="position: absolute; left: 0px; bottom: 50px;" class="not_priority color4 p-3 col-md-5 col-sm-6 col-12">
                <h1> <b> Regístrate como Especialista </b> </h1> 
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
        </div>
    </div>

    <div class="row justify-content-center p-5">
        <div class="col-8">
            <form action="">
                
                <div class="row size5">
                    <div class="col-6">
                        <div class="col-12 cabecera">
                            <b>
                                Nombre (obligatorio)
                            </b>
                        </div>
                        <input type="text" class="form-control col-10">
                    </div>
                    <div class="col-6">
                        <div class="col-12 cabecera">
                            <b>
                                Apellidos (obligatorio)
                            </b>
                        </div>
                        <input type="text" class="form-control col-10">
                    </div>
                </div>
                <br><br>
                
                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu número de teléfono                        
                        </b>
                    </div>
                    <select name="" id="" class="col-2 form-control">
                        <option value="">+52</option>
                    </select>
                    <input type="text" class="form-control col-6" placeholder="Número de teléfono">
                    <object width="20vh"  style="position:relative; left: -25px;" data="{{ asset('img/formularios/telefono.svg') }}" type="image/svg+xml">
                    </object>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu correo electrónico (obligatorio)                        
                        </b>
                    </div>
                    <input type="text" class="form-control col-8" placeholder="Correo electrónico">
                    <object width="20vh"  style="position:relative; left: -25px;" data="{{ asset('img/formularios/mail.svg') }}" type="image/svg+xml">
                    </object>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu contraseña (obligatorio)                        
                        </b>
                    </div>
                    <input type="text" class="form-control col-8" placeholder="Contraseña">
                    <object width="20vh"  style="position:relative; left: -25px;" data="{{ asset('img/formularios/candado.svg') }}" type="image/svg+xml">
                    </object>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu cédula profesional (obligatorio)                        
                        </b>
                    </div>
                    <input type="text" class="form-control col-8" placeholder="Cédula profesional">
                    <object width="20vh"  style="position:relative; left: -20px;" data="{{ asset('img/formularios/cedula.svg') }}" type="image/svg+xml">
                    </object>
                </div>
                <br><br>

                <div class="row">
                    <input type="checkbox" class="col-1">     
                    Acepto términos y condiciones
                </div>
                <br><br>

                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <button class="btn btn-success edge size5"> &nbsp;&nbsp;&nbsp; Regístrate como usuario &nbsp;&nbsp;&nbsp; </button>
                            <div class="col-9 size7 justificar">
                                Al hacer clic en registrarme aceptas los términos de uso de Healthy y reconoces que leíste la política de privacidad. Además aceptas recibir llamadas o mensajes por SMS de Healthy.
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="row p-5"><br></div>

</div>
@endsection
