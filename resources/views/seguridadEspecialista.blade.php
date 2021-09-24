@extends('layouts.app')

@section('content')
<div class="col-12 bg-index colorTexto1">
    <div class="row centerY justify-content-center pt-3">
        <div class="col-3">
            <img src="/img/.png" alt="doctores" class="img-fluid">
        </div>
        <div class="col-7">
            <p class="size4 text-center"><b> 
                texto
            </b></p>
            <p class="size5 text-center">
                texto2
            </p>
        </div>
    </div>

    
    <!-- Secciones de consulta -->
    <div class="row p-2 justify-content-center" id="especialistas">
        <div class="col-3 text-center">
            <dl class="size4">
                <dd> <a href="" class="colorTexto1 add" ng-click="selectorSE(1)"> <b> Antes de la consulta: </b> </a> </dd>
                <dd> <a href="" class="colorTexto1 add" ng-click="selectorSE(2)"> <b> Durante la consulta: </b> </a> </dd>
                <dd> <a href="" class="colorTexto1 add" ng-click="selectorSE(3)"> <b> Después la consulta: </b> </a> </dd>
            </dl>
        </div>
        <div class="col-7">
            <div class="row justify-content-center textoBlanco">
                <!-- Antes --> 
                <div class="col-md-10 col-12 cuadro6 m-2" ng-show="se1">
                    <div class="row p-3 justify-content-center size6">
                        <b> <u> Antes de la consulta </u></b>
                    </div>
                    <div class="row pl-5 pr-5 pb-3 text-center">
                        <b>
                            texto
                        </b>
                    </div>
                </div>
                
                <!-- Durante --> 
                <div class="col-md-10 col-12 cuadro6 m-2" ng-show="se2">
                    <div class="row p-3 justify-content-center size6">
                        <b> <u>Durante la consulta </u></b>
                    </div>
                    <div class="row pl-5 pr-5 pb-3 text-center">
                        <b>
                            texto
                        </b>
                    </div>
                </div>
                
                <!-- Después --> 
                <div class="col-md-10 col-12 cuadro6 m-2" ng-show="se3">
                    <div class="row p-3 justify-content-center size6">
                        <b> <u>Después de la consulta </u></b>
                    </div>
                    <div class="row pl-5 pr-5 pb-3 text-center">
                        <b> 
                            texto
                        </b>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
