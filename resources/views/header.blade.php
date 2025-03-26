@section('header')
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{route('Inicio')}}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('assets/img/logo.png')}}" alt="Uteg Logo">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
            <li><a href="{{route('Inicio')}}">Inicio<br></a></li>
            <!--li><a href="#info">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li-->
            <li class="dropdown"><a href="#"><span>Disruptores endocrinos</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                <li><a href="#">¿Que son los disruptores endocrinos?</a></li>
                <li><a href="#">¿Qué es el metabolismo humano?</a></li>
                </ul>
            </li>
            <li><a href="#game">Juego</a></li>
            <li><a href="bibliografias.html">Bibliografías</a></li>
            <li><a href="#team">Integrantes</a></li>
            <!--li><a href="#contact">Contact</a></li-->
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="#about">Comenzar a aprender</a>

        </div>
    </header>
@endsection