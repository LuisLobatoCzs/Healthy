@extends('layouts.app')

@section('content')
<div class="col-12 bg-index colorTexto1">
    <div class="row centerY justify-content-center pt-3">
        <div class="col-md-3 col-sm-8 col-10">
            <img src="/img/familia.png" alt="familia" class="img-fluid">
        </div>
        <div class="col-md-7 col-sm-12 col-12">
            <p class="size4 text-center"><b> 
                Con Healthy cuida la salud de tu familia sin preocupaciones 
            </b></p>
        </div>
    </div>

    
    <!-- Secciones de consulta -->
    <div class="row p-2 justify-content-center" id="especialistas">
            <div class="col-md-3 col-sm-10 col-10 text-center">
                <dl class="size4">
                    <dd> <a href="" class="colorTexto1 add" ng-click="selectorSU(1)"> <b> Antes de la consulta: </b> </a> </dd>
                    <dd> <a href="" class="colorTexto1 add" ng-click="selectorSU(2)"> <b> Durante la consulta: </b> </a> </dd>
                    <dd> <a href="" class="colorTexto1 add" ng-click="selectorSU(3)"> <b> Después la consulta: </b> </a> </dd>
                </dl>
            </div>
            <div class="col-md-7 col-sm-10 col-10">
                <div class="row justify-content-center textoBlanco">
                    <!-- Antes --> 
                    <div class="col-md-10 col-12 cuadro6 m-2" ng-show="su1">
                        <div class="row p-3 justify-content-center size6">
                            <b> <u> Antes de la consulta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 text-center">
                            <b>
                                Revisamos atentamente la selección de especialistas, con ayuda de nuestros filtros validamos cada solicitud de acuerdo con las leyes locales, además agregamos requisitos extras para mayor seguridad.
                                <br><br>
                                Antes de iniciar tu consulta la aplicación te mostrara el nombre y foto del especialista, los filtros de seguridad por los cuales pasó para poder darte una consulta, cedula profesional, el número de consultas que ha brindado dentro de la plataforma, cuánto tiempo ha estado registrado dentro de Helthy y su caliﬁcación.
                                <br><br>
                                Puedes compartir con un contacto de confianza que estás en consulta antes, durante y al ﬁnalizar tu servicio, sin necesidad de que este sepa el motivo de tu consulta.
                            </b>
                        </div>
                    </div>
                    
                    <!-- Durante --> 
                    <div class="col-md-10 col-12 cuadro6 m-2" ng-show="su2">
                        <div class="row p-3 justify-content-center size6">
                            <b> <u>Durante la consulta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 text-center">
                            <b>
                                Hemos desarrollado un botón de emergencia que enlaza tu teléfono al 911 ante cualquier circunstancia de peligro.
                                <br><br>
                                Grabación de Audio, te otorgamos la función de grabar audio en la caja de emergencia, solo activándolo cuando se reporta algún incidente.
                                <br><br>
                                Rastreamos por GPS todas las consultas que se realizan, de esta forma podemos mantener un control de seguridad para el usuario y los especialistas.
                            </b>
                        </div>
                    </div>
                   
                    <!-- Después --> 
                    <div class="col-md-10 col-12 cuadro6 m-2" ng-show="su3">
                        <div class="row p-3 justify-content-center size6">
                            <b> <u>Después de la consulta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 text-center">
                            <b> 
                                Contamos con un sistema de Soporte al cliente activo las 24 horas del día los 7 día de la semana. Contacta a soporte técnico.
                                <br><br>
                                Podrás caliﬁcar a tu especialista de acuerdo con la experiencia que tuviste con él, puedes reportar cualquier incidente o calificarlo con cinco estrellas si el servicio fue de tu agrado.
                            </b>
                        </div>
                    </div>
                    
                    
                </div>
        </div>





</div>

@endsection
