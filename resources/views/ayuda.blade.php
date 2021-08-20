@extends('layouts.app')

@section('content')
<div class="bg-index" ng-init="hello()">

    <div class="col-12">
        <!-- Título -->
        <div class="row justify-content-center pt-5 pb-5 cabecera">
            <h2> <b> Repondemos tus dudas </b> </h2>
        </div>

        <!-- Usuarios Cuadro Azul -->
        <div class="row cuadro1 pl-5 pr-5 pt-2 pb-2">
            <div class="col-6">
                <b class="size4 cabecera"> Usuarios: </b>
                <br>
                <dl class="size5">
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(1)"> ¿Cómo me registro para ser usuario? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(2)"> ¿Cómo puedo cambiar la informacion en mi perfil? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cómo agrego un contacto de emergencía? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Se realiza algún cargo de Pre-autorización? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Qué métodos de pago son aceptados en Health&? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cómo se realiza el cobro del servicio? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Puedo programar una cita con algún especialista? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Puedo dar propinas? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cómo solicito un servicio de algun especialista? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cómo puedo identificar a mi especialista? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Qué debo hacer si se realizo un cobro sin recibir el servicio? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cuenta con tarifa dinamica? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Puedo pedir Health& para algún conocido o familiar? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Qué hacer en caso de emergencia? </a> </dd>
                </dl>

            </div>
            <div class="col-6">
                <div class="row justify-content-center">
                    <!-- Inicio PU1 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu1">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u>¿Cómo me registro para ser nuevo usuario? </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Registrarte como usuario en Health& es muy sencillo.
                            Primero, agrega la forma de registro por la que te 
                            quieras dar de alta en la app y acepta los términos y
                            condiciones (no olvides leerlos bien antes de
                            aceptarlos). Una vez finalizado este paso llenarás un 
                            formulario con algunos datos importantes como 
                            contraseña y aspectos básicos de tu perfil. Finalmente 
                            te pediremos que nos compartas tus datos e 
                            información de pago y ¡Ya estás listo para recibir 
                            consultas Health&!
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU1 --> 
                    <!-- Inicio PU2 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu2">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> Pregunta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                                Texto
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU2 --> 
                </div>
            </div>
        </div>

        <!-- Especialistas-->
        <div class="row p-5">
            <div class="col-12  ">
                <b class="size4 cabecera"> Especialistas: </b>
                <br>
                <dl class="size5">
                    <dd> <a href="#" class="resaltado"> ¿Qué documentos necesito para convertirme en especialista de Health&? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Qué áreas de especialistas se encuentran disponibles? </a> </dd>
                    <dd> <a href="#" class="resaltado"> Tengo una discapacidad ¿Puedo usar Health&? </a> </dd>
                    <dd> <a href="#" class="resaltado"> Tengo problemas con el registro </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cómo se calculan las tarifas en Health&? </a> </dd>
                    <dd> <a href="#" class="resaltado"> No puedo terminar el servicio </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cómo acepto una consulta? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cómo puedo identificar a mi usuario cuando me encuentre en el domicilio? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Dónde puedo encontrar mi historial de consultas? </a> </dd>
                    <dd> <a href="#" class="resaltado"> Tuve una mala experiencia en una consulta </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Qué debo hacer en caso de emergencía? </a> </dd>
                    <dd> <a href="#" class="resaltado"> ¿Cómo agrego un contacto de emergencía? </a> </dd>
                </dl>

            </div>
        </div>

    </div>
</div>
@endsection
