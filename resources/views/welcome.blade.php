@extends('layouts.app')

@section('content')

    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/s1.jpg') }}">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/s2.jpg') }}">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/s3.jpg') }}">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>  
    </div>

    <!-- Contenido -->
    <div class="container">
        <!-- Área COVID -->
        <br><br><br><br><br><br><br>
        <div class="row pt-5">
            <div class="col-6 justificar pt-5"><h2>
                En Healthy tu seguridad es primordial con funciones específicamente desarrolladas para que tu consulta sea una experiencia agradable y de calidad te invitamos a conocer cada una de estas funciones
            </h2></div>
            
            <div class="col-6">
                <img class="d-block w-100" src="{{ asset('img/s4.jpg') }}">
            </div>
        </div>
        <br><br><br><br><br><br><br>

        <div class="row pt-5">
            <div class="col-4 color1 pt-5">
                <div class="row justify-content-center">
                    <svg width="20%" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase-medical" class="svg-inline--fa fa-briefcase-medical fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 128h-80V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v48H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V176c0-26.5-21.5-48-48-48zM192 96h128v32H192V96zm160 248c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48z"></path></svg>
                </div>
                <div class="row justify-content-center pt-3 pb-5">
                    <div class="col-10 justificar">
                        <h3>
                            Realiza tus consultas con Healthy.
                        </h3>
                        <br>
                    </div>
                    <a href="/register">
                        <button class="btn btn-outline-light">Quiero ser especialista</button>
                    </a>
                </div>
            </div>
            <div class="col-4 color2 pt-5">
                <div class="row justify-content-center">
                    <svg width="20%" class="col-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-md" class="svg-inline--fa fa-user-md fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3.9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3.9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2.7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z"></path></svg>
                </div>
                <div class="row justify-content-center pt-3 pb-5">
                    <div class="col-10 justificar">
                        <h3>
                            Pide al especialista que necesites.
                        </h3>
                        <br>
                    </div>
                    <a href="">
                        <button class="btn btn-outline-light">Descargar Healthy</button>
                    </a>
                </div>
            </div>
            <div class="col-4 color1 pt-5">
                <div class="row justify-content-center">
                    <svg width="20%" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shield-alt" class="svg-inline--fa fa-shield-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path></svg>
                </div>
                <div class="row justify-content-center pt-3 pb-5">
                    <div class="col-10 justificar">
                        <h3>
                            En Healthy tu seguridad es primordial.
                        </h3>
                        <br>
                    </div>
                    <a href="/info">
                        <button class="btn btn-outline-light">Conóce más</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row p-5"></div>
        <div class="row p-5"></div>


    </div>

@endsection
