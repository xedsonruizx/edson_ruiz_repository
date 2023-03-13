<!-- TOPBAR -->
<header class="header shadow mb-5 bg-body rounded" id="header">
    <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
    </div>
    <!-- <div class="ocean">
        <div class="wave"></div>

        <div class="wave"></div>
    </div> -->
    <div class="pe-4 fw-bolder">
        Bienvenido <span class="d-none d-md-inline">a mí repositorio </span>
    </div>
</header>

<!-- SIDEBAR -->
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class="bx bx-layer nav_logo-icon"></i>
                <span class="nav_logo-name">Edson Ruiz Salinas</span>
            </a>
            <div class="nav_list">
                <a href="{{ route('me')}}" class="nav_link @if ( $page == 'me') active @endif">
                    <i class="bx bx-user nav_icon"></i>
                    <span class="nav_name fw-bolder">Sobre mí</span>
                </a>
                <a href="{{ route('proyects')}}" class="nav_link @if ( $page == 'proyects') active @endif"">
                    <i class="bx bx-grid-alt nav_icon"></i>
                    <span class="nav_name fw-bolder">Mis proyectos</span>
                </a>
                <a href="{{ route('academy')}}" class="nav_link @if ( $page == 'academy') active @endif"">
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
    @yield('content')
</div>