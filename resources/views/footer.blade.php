@section('footer')

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
            <a href="{{route('inicio')}}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png')}}" alt="Uteg Logo">
            </a>
            <p>Página web destinada a promover el conocimiento sobre los disruptores endocrinos | Infórmate sobre su impacto en la salud y gracias por acompañarnos en esta misión de concienciación médica.</p>
            </div>

            <div class="col-lg-2 col-6 footer-links">
            <h4>Menú</h4>
            <ul>
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li><a href="#">Disruptores endocrinos</a></li>
                <li><a href="{{route('juego-inicio')}}">Juego</a></li>
                <li><a href="{{route('bibliografias')}}">Bibliografías</a></li>
                <li><a href="{{route('integrantes')}}">Integrantes</a></li>
            </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
            <h4>Disruptores endocrinos</h4>
            <ul>
                <li><a href="{{route("definiciones")}}">¿Qué son los disruptores endocrinos?</a></li>
                <li><a href="{{route("tipos")}}">Tipos de disruptores endocrinos: naturales y artificiales</a></li>
                <li><a href="{{route("efectos")}}">Efectos bioquímicos de los disruptores endocrinos</a></li>
                <li><a href="{{route("enfermedades")}}">Principales enfermedades o alteraciones por disruptores endocrinos artificiales (DEA)</a></li>
            </ul>
            </div>
            
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contáctanos</h4>
                <p>C. Héroes Ferrocarrileros 1325</p>
                <p>La Aurora, 44460</p>
                <p>Guadalajara, Jal.</p>
                <p class="mt-4"><strong>Telefono:</strong> <span>33 1078 8000</span></p>
            </div>

        </div>
        </div>

        <div class="container copyright text-center mt-4">
        <p>© 2025 - <span>Copyright</span> <strong class="px-1 sitename">Uteg Centro Universitario</strong> <span>Todos los derechos reservados</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
        </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
@endsection