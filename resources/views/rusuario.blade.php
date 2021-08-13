@extends('layouts.app')

@section('content')
<div class="bg-index">

    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active" style="position: relative;">
                <img class="d-block w-100" src="{{ asset('img/p1.png') }}">
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
                </div>
                <br><br>

                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu correo electrónico (obligatorio)                        
                        </b>
                    </div>
                    <input type="text" class="form-control col-8" placeholder="Correo electrónico">
                </div>
                <br><br>

                <div class="row">
                    <div class="col-12 cabecera size5">
                        <b>
                            Ingresa tu contraseña (obligatorio)                        
                        </b>
                    </div>
                    <input type="text" class="form-control col-8" placeholder="Contraseña">
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
