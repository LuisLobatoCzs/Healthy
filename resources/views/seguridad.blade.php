@extends('layouts.app')

@section('content')

<div class="col-12 colorTexto1">
    <div class="row pt-5" style="position: relative;">
        <div class="col-6">
            <img class="img-fluid" src="/img/abuelos.png" alt="">
        </div>
        <div class="col-6 justify-content-center ">
            <p class="size3 text-center"><b>
                titulo
            </b></p>
            <br>
            <p class="size5">
                texto
            </p>
        </div>
        <img class="img-fluid" src="/img/barra.png" style="position: absolute; bottom: -85px;">
    </div>

    <div class="row pt-5 pb-5 justify-content-center">
        <div class="size3 pt-5">
            titulo
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row pb-5 centerY">
                <div class="col-4">
                    <img src="/img/chica.png" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    texto
                </div>
            </div>
            <div class="row pb-5 centerY">
                <div class="col-4">
                    <img src="/img/chico.png" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    texto
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
