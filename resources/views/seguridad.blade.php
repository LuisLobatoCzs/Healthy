@extends('layouts.app')

@section('content')

<div class="col-12 colorTexto1 bg-index">
    <div class="row pt-5" style="position: relative;">
        <div class="col-6">
            <img class="img-fluid" src="/img/abuelos.png" alt="">
        </div>
        <div class="col-6 justify-content-center ">
            <p class="size3 text-center"><b>
               <b> Tu seguridad es primordial</b>
            </b></p>
            <br>
            <p class="size5 text-center">
            En healthy tu seguridad es primordial, por eso, implementamos 
            funciones específicamente desarrolladas para que tu consulta sea una experiencia increíble, 
            te invitamos a conocer cada una de estas funciones de seguridad.
            </p>
        </div>
        <img class="img-fluid" src="/img/barra.png" style="position: absolute; bottom: -85px;">
    </div>

    <div class="row pt-5 pb-5 justify-content-center">
        <div class="size3 pt-5">
         <b>   Conoce más de las funciones de seguridad de Healthy</b>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row pb-5 centerY">
                <div class="col-4">
                    <img src="/img/chica.png" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    <b>Seguridad para usuarios</b>
                </div>
                <div >
                    <a href="#">
                        <object class="img-fluid" data="{{ asset('img/conoce.svg') }}" type="image/svg+xml"></object>
                    </a>
                </div>
            </div>
            <div class="row pb-5 centerY">
                <div class="col-4">
                    <img src="/img/chico.png" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    <b>Seguridad para especialistas</b>
                </div>
                <div >
                    <a href="#">
                        <object class="img-fluid" data="{{ asset('img/conoce.svg') }}" type="image/svg+xml"></object>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
