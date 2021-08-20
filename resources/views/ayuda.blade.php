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
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(1)"> ¿Cómo me registro para ser usuario? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(2)"> ¿Cómo puedo cambiar la informacion en mi perfil? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(3)"> ¿Cómo agrego un contacto de emergencía? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(4)"> ¿Se realiza algún cargo de Pre-autorización? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(5)"> ¿Qué métodos de pago son aceptados en Health&? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(6)"> ¿Cómo se realiza el cobro del servicio? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(7)"> ¿Puedo programar una cita con algún especialista? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(8)"> ¿Puedo dar propinas? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(9)"> ¿Cómo solicito un servicio de algun especialista? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(10)"> ¿Cómo puedo identificar a mi especialista? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(11)"> ¿Qué debo hacer si se realizo un cobro sin recibir el servicio? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(12)"> ¿Cuenta con tarifa dinamica? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(13)"> ¿Puedo pedir Health& para algún conocido o familiar? </a> </dd>
                    <dd> <a href="" class="resaltado" ng-click="selectorPU(14)"> ¿Qué hacer en caso de emergencia? </a> </dd>
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
                            <b> <u> ¿Cómo puedo cambiar la información en mi perfil?  </u></b>
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
                            <b> <u> ¿Cómo agrego un contacto de emergencia?
                             </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Para ingresar a tus contactos de emergencia da clic en el 
                            botón “mi perfil” después, selecciona “contactos de emergencia”, 
                            posteriormente clic en “añadir contacto de emergencia” y regístralos. 
                            En caso de querer actualizar los contactos establecidos, puedes 
                            borrar el contacto previo y dar de alta el nuevo.

                            </b>
                        </div>
                    </div>
                    <!-- Fin PU3 -->
                    <!-- Inicio PU4 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu4">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u>¿Se realiza algún cargo de Pre-autorización? </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Por seguridad de las cuentas la plataforma realiza un cargo previo 
                            de autorización. Este cargo no es válido y será re integrado a tu 
                            cuenta de manera inmediata, sin embargo, puede que este reembolso t
                            arde de 7 a 10 días en verse reflejado en tu cuenta, en caso de que 
                            no sea así, te recomendamos que contactes a tu banco para que puedas 
                            recibir asesoría.

                            </b>
                        </div>
                    </div>
                    <!-- Fin PU4 -->
                    <!-- Inicio PU5 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu5">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Qué métodos de pago son aceptados en Healthy?</u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Por el momento aceptamos todas las tarjetas de crédito
                            y débito Visa y MasterCard. 
                            
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU5 -->
                    <!-- Inicio PU6 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu6">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Cómo se realiza el cobro del servicio? </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Antes de poder realizar alguna cita con nuestros especialistas, 
                            primero debes dar de alta una tarjeta de crédito en la aplicación, 
                            una vez que se da por finalizada la consulta se realiza el cobro. 
                            En Healthy es primordial que puedas tener una consulta tranquila y segura. 

                            </b>
                        </div>
                    </div>
                    <!-- Fin PU6 -->
                    <!-- Inicio PU7 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu7">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Puedo programar una cita con algún especialista?</u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Por el momento Healthy no cuenta con esta función, ya que buscamos que 
                            nuestros especialistas tengan la libertar de poder elegir cuándo y cómo 
                            trabajar en la aplicación, sin embargo, puedes pedir una consulta en el 
                            momento que desees y con el especialista que desees. 
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU7 -->
                    <!-- Inicio PU8 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu8">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Puedo dar propinas? </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            ¡Por supuesto! Si deseas darle una propina al especialista puedes 
                            hacerlo por medio de la app al terminar tu consulta califica a tu 
                            especialista y posterior selecciona la cantidad de propina que deseas añadir. 
                            Recuerda que NO ES OBLIGATORIO y no pueden cobrar más que el monto por el 
                            que solicitaste el servicio, si tu especialista te solicitó propina o dinero 
                            en efectivo, por favor repórtalo inmediatamente a Soporte Healthy
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU8 --> 
                    <!-- Inicio PU9 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu9">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Cómo solicito un servicio de algún especialista? </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Al momento de ingresar a la app veras en la parte superior tres esferas (médico general, fisioterapeuta y enfermera) da clic en alguna de ella acorde con tus necesidades, si no te encuentras seguro de que especialista es el adecuado para tu necesidad, puedes escribir el motivo de consulta y la app te direccionará al especialista que necesites. Posteriormente, en la parte inferior aparecerá el monto aproximado del cobro y los especialistas que se encuentran disponibles, podrás elegir la ubicación en donde necesites el servicio. 
                            Si el servicio es requerido para otra persona tendrás que especificarlo. Por último, confirma tu consulta y listo, el especialista llegará hasta la ubicación brindada.

                            </b>
                        </div>
                    </div>
                    <!-- Fin PU9 --> 
                    <!-- Inicio PU10 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu10">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Cómo puedo identificar a mi especialista?</u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Al pedir tu consulta, te aparecerá un recuadro con los datos del
                             especialista y ubicación que te ayudaran a identificarlo con facilidad: <br>
                            1. Nombre. <br>
                            2. Foto. <br>
                            3. Cedula profesional. <br>
                            Antes de iniciar la consulta el especialista se presentará contigo, asegúrate que los datos proporcionados coincidan con los que se indican en la app. Si ves que alguno de los datos no concuerda, cancela la consulta, eligiendo opción asociada y contacta a Soporte Healthy.

                            </b>
                        </div>
                    </div>
                    <!-- Fin PU10--> 
                    <!-- Inicio P11 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu11">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u>  ¿Qué debo hacer si se realizó un cobro sin recibir el servicio? </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            De parte del equipo Healthy te ofrecemos una disculpa por esto. 
                            Entra a tu app y en el menú da clic en el botón “Mi perfil”, selecciona 
                            Registro de Consultas y da clic en la consulta donde sucedió el percance, 
                            por último, elige “Soporte Técnico” y el equipo de Healthy te ofrecerá 
                            la mejor solución.

                            </b>
                        </div>
                    </div>
                    <!-- Fin PU11 --> 
                    <!-- Inicio PU12 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu12">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Cuenta con tarifa dinámica? </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Si, contamos con Tarifa dinámica en nuestras consultas, pero podrás consultar si tu cita se encuentra afectada por este motivo. 
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU12 --> 
                    <!-- Inicio PU13 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu13">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Puedo pedir Healthy para algún conocido o familiar?</u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            ¡Si es posible! Antes de confirmar la consulta puedes seleccionar si el servicio es para ti o para alguien más. Este paso es importante ya que el especialista tiene prohibido brindar el servicio para alguien más que no sea el usuario que lo solicitó, esto por motivos de seguridad, sugerimos que tu conocido también descargue la app en caso de ser mayor de edad. ¡Recuerda que refiriendo a tu conocido, ambos recibirán beneficios!
                          </b>
                        </div>
                    </div>
                    <!-- Fin PU13 --> 
                    <!-- Inicio PU14 --> 
                    <div class="col-10 cuadro2 m-2" ng-show="pu14">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u> ¿Qué hacer en caso de emergencia? </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                            Si te encuentras en una emergencia durante la consulta en Healthy: Da clic al icono del estetoscopio con escudo localizado en la parte inferior izquierda de la pantalla principal de tu app. Este botón abre el menú de seguridad, selecciona “911” para que enlace una línea directa con un equipo especializado que te brindaran apoyo.
                            </b>
                        </div>
                    </div>
                    <!-- Fin PU14 --> 
                </div>
            </div>
        </div>

        <!-- Especialistas-->
        <div class="row p-5">
            <div class="col-6">
                <b class="size4 cabecera"> Especialistas: </b>
                <br>
                <dl class="size5">
                    <dd> <a href="" class="resaltado" ng-click="selectorPE(1)"> ¿Qué documentos necesito para convertirme en especialista de Health&? </a> </dd>
                    <dd> <a href="" class="resaltado"> ¿Qué áreas de especialistas se encuentran disponibles? </a> </dd>
                    <dd> <a href="" class="resaltado"> Tengo una discapacidad ¿Puedo usar Health&? </a> </dd>
                    <dd> <a href="" class="resaltado"> Tengo problemas con el registro </a> </dd>
                    <dd> <a href="" class="resaltado"> ¿Cómo se calculan las tarifas en Health&? </a> </dd>
                    <dd> <a href="" class="resaltado"> No puedo terminar el servicio </a> </dd>
                    <dd> <a href="" class="resaltado"> ¿Cómo acepto una consulta? </a> </dd>
                    <dd> <a href="" class="resaltado"> ¿Cómo puedo identificar a mi usuario cuando me encuentre en el domicilio? </a> </dd>
                    <dd> <a href="" class="resaltado"> ¿Dónde puedo encontrar mi historial de consultas? </a> </dd>
                    <dd> <a href="" class="resaltado"> Tuve una mala experiencia en una consulta </a> </dd>
                    <dd> <a href="" class="resaltado"> ¿Qué debo hacer en caso de emergencía? </a> </dd>
                    <dd> <a href="" class="resaltado"> ¿Cómo agrego un contacto de emergencía? </a> </dd>
                </dl>
            </div>
            <div class="col-6">
                <div class="row justify-content-center">
                    <!-- Inicio PE1 --> 
                    <div class="col-10 cuadro5 m-2" ng-show="pe1">
                        <div class="row p-3 justify-content-center cabecera size6">
                            <b> <u>titulo </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3 cabecera ">
                            <b>
                                texto
                            </b>
                        </div>
                    </div>
                    <!-- Fin PE1 --> 
                </div>
        </div>


    </div>
</div>
@endsection
