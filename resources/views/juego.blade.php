@extends('app')
@extends('head')
@extends('header')
@extends('footer')


@section('title')
    <title>Juego</title>
@endsection

@section('content')

    <main class="main">

        <!-- Faq Section -->
        <section id="bibliografia" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Juegos</h2>
            </div>
            <!-- End Section Title -->
    
            <div class="container">
    
            <div class="row justify-content-center">
    
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
    
                    <div class="faq-container">
                        <div class="faq-item faq-content">
                            ¡Prepárate para una aventura épica! Sumérgete en un juego dinámico que no solo te hará vibrar de emoción, sino que también despertará tu mente y te enseñará cosas nuevas en cada paso. ¡Olvídate del aburrimiento y lánzate a aprender mientras te diviertes como nunca! ¿Estás listo para el desafío? ¡Vamos, el juego te espera!
                        </div>
                    </div>

                </div>

                <div class="space"></div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-container">
                        <div class="faq-item faq-content">
                            <div class="col-lg-12 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                                <a href="https://www.educaplay.com/learning-resources/23320217-efectos_bioquimicos_de_los_disruptores_endocrinos.html" class="glightbox">
                                    <img src="{{asset("assets/img/general/preguntas.png")}}" class="img-fluid" alt="">
                                    <div class="space"></div>
                                    <p class="section-title">Preguntas</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-container">
                        <div class="faq-item faq-content">
                            <div class="col-lg-12 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                                <a href="https://es.educaplay.com/recursos-educativos/23313058-desafio_sobre_disruptores_endocrinos.html" class="glightbox">
                                    <img src="{{asset("assets/img/general/game.png")}}" class="img-fluid" alt="">
                                    <div class="space"></div>
                                    <p class="section-title">Juego</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                

    
            </div>
    
            </div>
    
        </section>
        <!-- /Faq Section -->

    </main>

@endsection