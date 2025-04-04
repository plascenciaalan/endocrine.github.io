@extends('app')
@extends('head')
@extends('header')
@extends('footer')


@section('title')
    <title>Definiciones</title>
@endsection

@section('content')

    <main class="main">
        <section id="definiciones" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Disruptores endocrinos</h2>
            </div>
            <!-- End Section Title -->

            <section id="about-alt" class="about-alt section">
                <div class="container">
                  <div class="row gy-4">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                      <div class="col-lg-12 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset("assets/img/info/disruptores-endocrinos.jpg")}}" class="img-fluid" alt="">
                        <a href="{{asset("assets/img/info/disruptores-endocrinos.jpg")}}" class="glightbox pulsating-play-btn"></a>
                      </div>
                      <div><span class="reference">Kistinegarcia. (2024, 13 marzo). Disruptores endocrinos, informe del estado de la ciencia. Futuro Sin Tóxicos. https://futurosintoxicos.org/2024/03/13/disruptores-endocrinos-informe/ </span></div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5 content" data-aos="fade-up" data-aos-delay="200">
                      <h3>¿Qué son los disruptores endocrinos?</h3>
                      <p>
                        Los disruptores endocrinos son compuestos químicos que pueden interferir con el sistema endocrino, que regula las hormonas en los seres vivos. Estos disruptores pueden alterar la producción, liberación, transporte, metabolismo o eliminación de las hormonas, lo que afecta diversos procesos biológicos y metabólicos.
                      </p>
                      <p>Los efectos de los disruptores endocrinos son variados y pueden incluir problemas en la fertilidad, alteraciones en el desarrollo fetal, aumento en el riesgo de ciertos tipos de cáncer, trastornos metabólicos (como la obesidad y la diabetes) y disfunción del sistema inmunológico. Además, algunos estudios sugieren que la exposición a estos compuestos puede tener efectos perjudiciales en el comportamiento y la cognición.</p>
                      <p>La exposición a estos compuestos es difícil de evitar por completo, pero existen esfuerzos para limitar su uso y aumentar la conciencia sobre sus riesgos.</p>
                    </div>
                  </div>
                </div>
            </section>

            <section id="about-alt" class="about-alt section">
              <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-5 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>¿Qué es el metabolismo humano?</h3>
                    <p>El metabolismo humano es el conjunto de procesos bioquímicos que ocurren en el cuerpo para convertir los alimentos en energía, construir y reparar tejidos, y regular funciones vitales. Se divide en dos fases principales: catabolismo, donde las moléculas complejas se descomponen para liberar energía, y anabolismo, que utiliza esa energía para crear moléculas complejas necesarias para el crecimiento y mantenimiento del cuerpo. El metabolismo involucra varias rutas metabólicas, como la glucólisis, el ciclo de Krebs y la cadena de transporte de electrones, que ayudan a mantener el equilibrio energético y a regular la temperatura corporal.</p>
                    <p>La tasa metabólica, que es la velocidad a la que el cuerpo usa la energía, varía según factores como la edad, el género, la genética, la actividad física y la dieta.</p>
                  </div>
                  <div class="col-lg-2"></div>
                  <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                      <img src="{{asset("assets/img/info/metabolismo.jpg")}}" class="img-fluid" alt="">
                      <a href="{{asset("assets/img/info/metabolismo.jpg")}}" class="glightbox pulsating-play-btn"></a>
                    </div>
                    <div><span class="reference">AlvaroLuque. (2023, 21 junio). ¿A partir de qué edad desciende mi metabolismo? Entrenamiento Personal y Con Electroestimulación En el Puerto de Santa María. https://bodyquick.es/a-partir-de-que-edad-desciende-mi-metabolismo/ </span></div>
                  </div>
                </div>
              </div>
            </section>

            <section id="about-alt" class="about-alt section">
              <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                      <img src="{{asset("assets/img/info/sistema-endocrino.jpg")}}" class="img-fluid" alt="">
                      <a href="{{asset("assets/img/info/sistema-endocrino.jpg")}}" class="glightbox pulsating-play-btn"></a>
                    </div>
                    <div><span class="reference">Maita, L. (2025, 6 marzo). Sistema endocrino: Funciones, partes y trastornos comunes. Discapnet. https://www.discapnet.es/salud/sistemas-del-cuerpo-humano/sistema-endocrino </span></div>
                  </div>
                  <div class="col-lg-2"></div>
                  <div class="col-lg-5 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>¿Qué es el sistema endocrino?</h3>
                    <p>El sistema endocrino es un conjunto de glándulas y órganos que producen y secretan hormonas. Estas hormonas son mensajeros químicos que regulan diversas funciones del cuerpo, como el crecimiento, el metabolismo, el estado de ánimo y la reproducción. Las principales glándulas endocrinas incluyen la tiroides, las glándulas suprarrenales, la hipófisis y los ovarios o testículos. El sistema endocrino trabaja en estrecha colaboración con el sistema nervioso para mantener el equilibrio y la homeostasis en el cuerpo.</p>
                  </div>
                </div>
              </div>
            </section>

        </section>
    </main>

@endsection