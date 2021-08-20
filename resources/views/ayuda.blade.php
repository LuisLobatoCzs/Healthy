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
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(3)"> ¿Cómo agrego un contacto de emergencía? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(4)"> ¿Se realiza algún cargo de Pre-autorización? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(5)"> ¿Qué métodos de pago son aceptados en Health&? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(6)"> ¿Cómo se realiza el cobro del servicio? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(7)"> ¿Puedo programar una cita con algún especialista? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(8)"> ¿Puedo dar propinas? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(9)"> ¿Cómo solicito un servicio de algun especialista? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(10)"> ¿Cómo puedo identificar a mi especialista? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(11)"> ¿Qué debo hacer si se realizo un cobro sin recibir el servicio? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(12)"> ¿Cuenta con tarifa dinamica? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(13)"> ¿Puedo pedir Health& para algún conocido o familiar? </a> </dd>
                    <dd> <a href="#" class="resaltado" ng-click="selectorPU(14)"> ¿Qué hacer en caso de emergencia? </a> </dd>
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
                            Puedes cambia la información de tu perfil haciendo clic en el botón 
                            “mi perfil“ y luego en “cuenta”, aquí podrás editar: Foto de perfil, 
                            Nombre Completo, Número de Teléfono asociado a tu cuenta, Correo Electrónico 
                            y Contraseña.
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU2 -->
                    <!-- Inicio PU3 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu3">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> Pregunta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Por seguridad de las cuentas la plataforma realiza un cargo previo 
                            de autorización. Este cargo no es válido y será re integrado a tu cuenta de manera 
                            inmediata, sin embargo, puede que este reembolso tarde de 7 a 10 días en verse 
                            reflejado en tu cuenta, en caso de que no sea así, te recomendamos que contactes a 
                            tu banco para que puedas recibir asesoría.
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU3 -->
                    <!-- Inicio PU4 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu4">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> Pregunta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Puedes cambia la información de tu perfil haciendo clic en el botón 
                            “mi perfil“ y luego en “cuenta”, aquí podrás editar: Foto de perfil, 
                            Nombre Completo, Número de Teléfono asociado a tu cuenta, Correo Electrónico 
                            y Contraseña.
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU4 -->
                    <!-- Inicio PU5 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu5">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> Pregunta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Puedes cambia la información de tu perfil haciendo clic en el botón 
                            “mi perfil“ y luego en “cuenta”, aquí podrás editar: Foto de perfil, 
                            Nombre Completo, Número de Teléfono asociado a tu cuenta, Correo Electrónico 
                            y Contraseña.
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU5 -->
                    <!-- Inicio PU6 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu6">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> Pregunta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Puedes cambia la información de tu perfil haciendo clic en el botón 
                            “mi perfil“ y luego en “cuenta”, aquí podrás editar: Foto de perfil, 
                            Nombre Completo, Número de Teléfono asociado a tu cuenta, Correo Electrónico 
                            y Contraseña.
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU6 -->
                    <!-- Inicio PU7 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu7">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> Pregunta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Puedes cambia la información de tu perfil haciendo clic en el botón 
                            “mi perfil“ y luego en “cuenta”, aquí podrás editar: Foto de perfil, 
                            Nombre Completo, Número de Teléfono asociado a tu cuenta, Correo Electrónico 
                            y Contraseña.
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU7 -->
                    <!-- Inicio PU8 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu8">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> Pregunta </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Puedes cambia la información de tu perfil haciendo clic en el botón 
                            “mi perfil“ y luego en “cuenta”, aquí podrás editar: Foto de perfil, 
                            Nombre Completo, Número de Teléfono asociado a tu cuenta, Correo Electrónico 
                            y Contraseña.
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU8 --> 
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
