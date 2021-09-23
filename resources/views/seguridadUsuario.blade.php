@extends('layouts.app')

@section('content')
<div class="col-12 bg-index colorTexto1">
    <div class="row centerY justify-content-center pt-3">
        <div class="col-3">
            <img src="/" alt="familia" class="img-fluid">
        </div>
        <div class="col-7">
            <p class="size4 text-center"><b> 
                texto
            </b></p>
        </div>
    </div>

    
    <!-- Secciones de consulta -->
    <div class="row p-5" id="especialistas">
            <div class="col-6">
                <dl class="size4">
                    <dd> <a href="" class="colorTexto1 add" ng-click="selectorSU(1)"> <b> Antes </b> </a> </dd>
                    <dd> <a href="" class="colorTexto1 add" ng-click="selectorSU(2)"> <b> Durante </b> </a> </dd>
                    <dd> <a href="" class="colorTexto1 add" ng-click="selectorSU(3)"> <b> Después </b> </a> </dd>
                </dl>
            </div>
            <div class="col-6">
                <div class="row justify-content-center textoBlanco">
                    <!-- Antes --> 
                    <div class="col-md-10 col-12 cuadro6 m-2" ng-show="su1">
                        <div class="row p-3 justify-content-center size6">
                            <b> <u> Antes </u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3">
                            <b>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sunt architecto, repudiandae sit assumenda soluta consectetur, incidunt eum unde nostrum enim molestiae ad pariatur! Tempora nisi doloribus numquam sequi voluptate.
                            </b>
                        </div>
                    </div>
                    
                    <!-- Durante --> 
                    <div class="col-md-10 col-12 cuadro6 m-2" ng-show="su2">
                        <div class="row p-3 justify-content-center size6">
                            <b> <u>Durante</u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3">
                            <b>
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur facere nulla exercitationem, quaerat doloremque hic harum excepturi nihil ratione deleniti maxime necessitatibus placeat blanditiis ut quibusdam enim iste et aut?
                            </b>
                        </div>
                    </div>
                   
                    <!-- Después --> 
                    <div class="col-md-10 col-12 cuadro6 m-2" ng-show="su3">
                        <div class="row p-3 justify-content-center size6">
                            <b> <u>Después</u></b>
                        </div>
                        <div class="row pl-5 pr-5 pb-3">
                            <b>   
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum provident doloremque obcaecati in consequatur at totam. Quam sapiente quis quos quae repellat veniam earum nam culpa nemo? Unde, eum omnis?
                            </b>
                        </div>
                    </div>
                    
                    
                </div>
        </div>





</div>

@endsection
