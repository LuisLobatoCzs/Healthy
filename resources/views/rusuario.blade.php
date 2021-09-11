@extends('layouts.app')

@section('content')
<div class="col-12 bg-index">

    <!-- Carousel -->
    <div id="carousel" class="carousel slide row" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active" style="position: relative;">
                <img class="d-block w-100" src="{{ asset('img/formularios/regUsuario.png') }}">
            </div>
            <!-- Cuadro de texto flotante-->
            <div style="position: absolute; left: 0px; bottom: 50px;" class="not_priority color4 p-3 col-md-5 col-sm-6 col-12">
                <h1> <b> Regístrate como usuario </b> </h1> 
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

    <div class="row justify-content-center pt-5 pb-5 pl-3 pr-3">
        <div class="col-md-8 col-12">
            <form method="POST" action="/registrar-usuario">
                @csrf
                <div class="row size5">
                    <div class="col-md-6 col-sm-6 col-12 pb-4">
                        <div class="row">
                            <div class="col-12 cabecera">
                                <b>
                                    Nombre (obligatorio)
                                </b>
                            </div>
                            <input name="name" id="name" type="text" class="form-control col-md-10 col-sm-10 col-11">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="row">
                            <div class="col-12 cabecera">
                                <b>
                                    Apellidos (obligatorio)
                                </b>
                            </div>
                            <input name="last-name" id="last-name" type="text" class="form-control col-md-10 col-sm-10 col-11">
                        </div>
                    </div>
                </div>
                <br><br>
                
                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu número de teléfono                        
                        </b>
                    </div>
                    <select name="phone-code" id="phone-code" class="col-md-2 col-3 form-control">
                        <option value="">+52</option>
                    </select>
                    <input name="phone" id="phone" type="text" class="form-control col-md-6 col-8" placeholder="Número de teléfono">
                    <object width="15vh"  style="position:relative; left: -40px;" data="{{ asset('img/formularios/telefono.svg') }}" type="image/svg+xml">
                    </object>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu correo electrónico (obligatorio)                        
                        </b>
                    </div>
                    <input name="email" id="email" type="text" class="form-control col-md-8 col-11" placeholder="Correo electrónico">
                    <object width="25vh"  style="position:relative; left: -50px;" data="{{ asset('img/formularios/mail.svg') }}" type="image/svg+xml">
                    </object>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu contraseña (obligatorio)                        
                        </b>
                    </div>
                    <input name="password" id="password" type="text" class="form-control col-md-8 col-11" placeholder="Contraseña">
                    <object width="15vh" style="position:relative; left: -40px;" data="{{ asset('img/formularios/candado.svg') }}" type="image/svg+xml">
                    </object>
                </div>
                <br><br>

                <div class="row">
                    <input name="conditions" id="conditions" type="checkbox" class="col-1">     
                    Acepto términos y condiciones
                </div>
                <br><br>

                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-md-6 col-sm-10 col-12">
                        <div class="row justify-content-center">
                            <button type="submit" class="btn color3 edge size5"> &nbsp;&nbsp; Regístrate como usuario &nbsp;&nbsp; </button>
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
