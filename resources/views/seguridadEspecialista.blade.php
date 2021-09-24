@extends('layouts.app')

@section('content')
<div class="col-12 bg-index colorTexto1">
    <div class="row centerY justify-content-center pt-3">
        <div class="col-3">
            <img src="/img/doctores2.png" alt="doctores" class="img-fluid">
        </div>
        <div class="col-7">
            <div class="row justify-content-center">
                <div class="col-10">
                    <p class="size4 text-center"><b> 
                        Realiza tus consultas tranquilamente
                    </b></p>
                    <p class="size5 text-center"><b>
                        Nos esforzamos por brindarte funciones especificas para realizar una consulta de forma segura
                    </b></p>
                </div>
            </div>
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
                            Verifica que la zona donde te encuentres sea la ideal, revisa el horario y lugar para realizar tus consultas de la manera más segura.<br><br>
                            Implementamos la verificación facial de los usuarios<br><br>
                            En caso de que el servicio sea para otra persona, asegúrate que los datos proporcionados coincidan con los del usuario a quien le proporcionarás el servicio. <br><br>
                            Encriptamos tu número de teléfono para que el usuario no tenga tus datos reales.<br>
                            Solo podrás contactarte con el usuario a través de la aplicación.<br><br>
                            Podrás elegir contactos de emergencias con los cuales podrás comunicarte si existiera algún incidente. <br><br>

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
                            Si necesitas ayuda presiona el botón de emergencia dentro de tu app para comunicarte al 911 Healthy te brinda tu ubicación exacta.<br><br>
                            Podrás compartir la ubicación de tu consulta.<br><br>
                            Implementamos la función de grabar audio en caso de que exista una emergencia.<br><br>
                            Monitoreamos todas las consultas en caso de algún incidente.

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
                        	Mantenemos una línea abierta de soporte ante diversas situaciones.<br><br>
                            Caliﬁca al usuario después de cada servicio, en caso de tener una mala experiencia puedes seleccionar no volver a consultar a ese usuario y reportar cualquier conducta inapropiada.<br><br>
                            Te brindamos un espacio para que puedas anotar las observaciones que encontraste al momento de la consulta. 
                        </b>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
