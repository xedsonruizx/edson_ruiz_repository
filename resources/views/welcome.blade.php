<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edson Ruiz Salinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link href="{{ asset('scss/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome-free-6.3.0-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome-free-6.3.0-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome-free-6.3.0-web/css/solid.css') }}" rel="stylesheet">

    <!-- <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> -->

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <div class="pe-4 fw-bolder">
            Bienvenido <span class="d-none d-md-inline">a mí repositorio </span>
            
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class="bx bx-layer nav_logo-icon"></i>
                    <span class="nav_logo-name">Edson Ruiz Salinas</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class="bx bx-user nav_icon"></i>
                        <span class="nav_name fw-bolder">Sobre mí</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-grid-alt nav_icon"></i>
                        <span class="nav_name fw-bolder">Mis proyectos</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-message-square-detail nav_icon"></i>
                        <span class="nav_name fw-bolder">Estudios</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-bookmark nav_icon"></i>
                        <span class="nav_name fw-bolder">Certificaciones <br> y titulos</span>
                    </a>
                    <!-- <a href="#" class="nav_link">
                        <i class="bx bx-folder nav_icon"></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
                        <span class="nav_name">Stats</span>
                    </a> -->
                </div>
            </div>
            <!-- <a href="#" class="nav_link">
                <i class="bx bx-log-out nav_icon"></i>
                <span class="nav_name">SignOut</span>
            </a> -->
        </nav>
    </div>
    <div class=" cuerpo">


        <!-- @include('secciones.about_me') -->
        @include('secciones.my_proyects')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="{{ asset('js/sidebar.js') }}"></script>


</body>

</html>