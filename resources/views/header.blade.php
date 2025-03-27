@section('header')
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{route('inicio')}}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('assets/img/logo.png')}}" alt="Uteg Logo">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
            <li><a href="{{route('inicio')}}">Inicio<br></a></li>
            <!--li><a href="#info">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li-->
            <li class="dropdown"><a href="{{route("disruptores")}}"><span>Disruptores endocrinos</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                <li><a href="{{route("disruptores")}}">¿Que son los disruptores endocrinos?</a></li>
                <li><a href="{{route("disruptores")}}">¿Qué es el metabolismo humano?</a></li>
                </ul>
            </li>
            <li><a href="{{route('juego-inicio')}}">Juego</a></li>
            <li><a href="{{route('bibliografias')}}">Bibliografías</a></li>
            <li><a href="{{route('integrantes')}}">Integrantes</a></li>
            <!--li><a href="#contact">Contact</a></li-->
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{route('about')}}">Comenzar a aprender</a>

        </div>
    </header>
@endsection