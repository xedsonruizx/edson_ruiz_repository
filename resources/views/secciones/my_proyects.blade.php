@extends('welcome')
@section('content')

<div class="text-center justify-content-center d-flex ">
    <div class="contener">
        <div class="presentation-proyects py-5 text-wrap  ">
            <h1 class="fw-bolder  lh-2">Mis proyectos</h1>
            Esta seccion corresponde a los proyectos que he estado realizando en mi tiempo libre y como forma de
            estudio.
            <br>
            Desarrollandome principalmente como desarrollador front end.
            <br>
            <span class="fw-bolder">Tecnologias como: html, php laravel, js,
                <br> vue js, react y css</span>
        </div>
    </div>
</div>
<main>
    <div class="container">

        <!-- <nav class="cards-container">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link  active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
            </div>
        </nav> -->



        <div class="cards-container">
            <div class="nav nav-tabs navs" id="nav-tab" role="tablist">
                <button class="btn btn-primary proyect-tabs col-4 px-2 mt-md-0 mt-2 nav-link  active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Html y Css Vanilla</button>
                <button class="btn btn-primary proyect-tabs  col-4 px-2 mt-md-0 mt-2  nav-link  " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">React js y Vue js</button>
                <button class="btn btn-primary proyect-tabs  col-4 px-2 mt-lg-0 mt-2 nav-link  " id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Laravel</button>
            </div>
        </div>
        <div class="tab-content d-flex" id="nav-tabContent">
            @include('secciones.my_proyects_folder.vanilla')
            @include('secciones.my_proyects_folder.react')
            @include('secciones.my_proyects_folder.laravel')
        </div>
    </div>
</main>
@endsection