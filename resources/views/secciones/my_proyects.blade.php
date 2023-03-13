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
        <div class="cards-container">
            <button class="btn btn-primary proyect-tabs col-4 px-2 mt-md-0 mt-2">Html y Css</button>
            <button class="btn btn-primary proyect-tabs  col-4 px-2 mt-md-0 mt-2">React js y Vue js</button>
            <button class="btn btn-primary proyect-tabs  col-4 px-2 mt-lg-0 mt-2" >Laravel</button>
        </div>

        <!-- CARDS -->
        <div class="cards-container">
            <!-- first card -->
            <div class="card">
                <div class="elms-animation">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                    <span class="four"></span>
                </div>
                <img src="{{ asset('assets/img/qr.png') }}" alt="">
                <div class="content">

                    <div class="d-block text-center">
                        <div><span class="text-white"><strong>QR challenge </strong><br> HTML + CSS
                            </span></div>
                        <div class="my-3"> <a href="https://github.com/xedsonruizx/QrChallenge/tree/QR" target="_blank"
                                class="text-decoration-none text-white">
                                <i class="fa-brands fa-github fs-4"></i></a>
                        </div>
                        <div>
                            <a href="https://xedsonruizx.github.io/QrChallenge/"
                                target="_blank"><button>Visualizar</button></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- second card -->
            <div class="card" style="background: #0e1011;">
                <div class="elms-animation">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                    <span class="four"></span>
                </div>
                <img src="{{ asset('assets/img/react_crud.png') }}" alt="" style="object-fit:contain !important">
                <div class="content">
                    <!-- first card -->
                    <div class="d-block text-center">
                        <div><span class="text-white"><strong>Simple Crud</strong> <br> React + Node + Postgre SQL
                            </span></div>
                        <div class="my-3 row"> 
                                <div class="col-6"><a href="https://gitlab.com/edsonruizsalinas/challengetcitback" target="_blank"
                                class="text-decoration-none text-white">
                                Back End <br>
                                <i class="fa-brands fa-github fs-4"></i></a></div>
                                <div class="col-6"><a href="https://gitlab.com/edsonruizsalinas/challengetcitfront" target="_blank"
                                class="text-decoration-none text-white">
                                Front End <br>
                                <i class="fa-brands fa-github fs-4"></i></a></div>
                        </div>  
                        <div class="">
                            <a 
                                target="_blank"><button class="btn" disabled>Visualizar</button></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="elms-animation">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                    <span class="four"></span>
                </div>
                <img src="https://images.unsplash.com/photo-1586348943529-beaae6c28db9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bmF0dXJlfGVufDB8MXwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                    alt="" />
                <div class="content">
                    <button>Discover</button>
                </div>
            </div>
            <div class="card">
                <div class="elms-animation">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                    <span class="four"></span>
                </div>
                <img src="https://images.unsplash.com/photo-1414609245224-afa02bfb3fda?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fG5hdHVyZXxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                    alt="" />
                <div class="content">
                    <button>Discover</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@push('scripts')
<script>
const triggerTabList = document.querySelectorAll('#myTab button')
triggerTabList.forEach(triggerEl => {
    const tabTrigger = new bootstrap.Tab(triggerEl)

    triggerEl.addEventListener('click', event => {
        event.preventDefault()
        tabTrigger.show()
    })
})


const triggerEl = document.querySelector('#myTab button[data-bs-target="#profile"]')
bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

const triggerFirstTabEl = document.querySelector('#myTab li:first-child button')
bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab
</script>
@endpush