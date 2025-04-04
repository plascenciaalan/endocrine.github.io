@extends('app')
@extends('head')
@extends('header')
@extends('footer')


@section('title')
    <title>Efectos bioquimicos</title>
@endsection

@section('content')

    <section id="definiciones" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Efectos bioquímicos de los disruptores endocrinos</h2>
        </div>
        <!-- End Section Title -->

        <section id="about-alt" class="about-alt section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>¿Qué son los efectos bioquímicos?</h3>
                        <p>
                            Los efectos bioquímicos son cambios o alteraciones que ocurren a nivel molecular en los organismos vivos debido a factores internos (como hormonas o enzimas) o externos (como fármacos, toxinas o nutrientes). Estos efectos pueden influir en:
                        </p>
                    </div>
                </div>

                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-10 content" data-aos="fade-up" data-aos-delay="200">              
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Metabolismo: Modificaciones en reacciones químicas celulares (ej.: glucólisis, ciclo de Krebs).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Señalización celular: Alteraciones en vías de comunicación entre células (ej.: acción de neurotransmisores).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Expresión génica: Activación o represión de genes por factores ambientales o químicos.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Homeostasis: Desequilibrios en pH, concentración de iones, etc.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                          <img src="{{asset("assets/img/info/efectos bioquimicos.jpg")}}" class="img-fluid" alt="">
                          <a href="{{asset("assets/img/info/efectos bioquimicos.jpg")}}" class="glightbox pulsating-play-btn"></a>
                        </div>
                        <div><span class="reference">Education, I. S. (2023, 29 enero). Qué es la Bioquímica y dónde se aplica. El Blog de IMF. https://blogs.imf-formacion.com/blog/corporativo/salud-pharma/que-es-la-bioquimica-y-donde-se-aplica/ </span></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-alt" class="about-alt section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Mecanismos Bioquímicos y Alteraciones Metabólicas</h3>
                    </div>
                </div>

                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-10 content" data-aos="fade-up" data-aos-delay="200">              
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>1.	Interferencia con Receptores Hormonales</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Receptores de Estrógenos (ER) y Andrógenos (AR): Los DEA como el bisfenol A (BPA) y los ftalatos actúan como agonistas/antagonistas, alterando la transcripción génica de enzimas metabólicas (ej.: aromatasa).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Consecuencia: Desregulación de la adipogénesis (aumento de adipocitos) y resistencia a la insulina.</span></li>
                        </ul>
                    </div>
                    <!--div class="col-lg-2 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset("assets/img/general/muestra.jpg")}}" class="img-fluid" alt="">
                    </div-->
                </div>

                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-10 content" data-aos="fade-up" data-aos-delay="200">              
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>2.	Alteración de la Función Tiroidea</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Compuestos como los éteres difenílicos polibromados (PBDE) compiten con la hormona tiroidea (T3/T4) por unión a transportadores (transtiretina).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Efecto: Disminución del metabolismo basal y acumulación de lípidos.</span></li>
                        </ul>
                    </div>
                    <!--div class="col-lg-2 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset("assets/img/general/muestra.jpg")}}" class="img-fluid" alt="">
                    </div-->
                </div>

                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-10 content" data-aos="fade-up" data-aos-delay="200">              
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>3.	Disrupción de la Señalización de Insulina</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ftalatos y pesticidas organoclorados inhiben la vía PI3K/Akt, reduciendo la captación de glucosa en músculo y tejido adiposo.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Resultado: Hiperglucemia y riesgo de diabetes tipo 2.</span></li>
                        </ul>
                    </div>
                    <!--div class="col-lg-2 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset("assets/img/general/muestra.jpg")}}" class="img-fluid" alt="">
                    </div-->
                </div>

                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-10 content" data-aos="fade-up" data-aos-delay="200">              
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>4.	Estrés Oxidativo y Mitocondrial</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>DEA como dioxinas generan especies reactivas de oxígeno (ROS), dañando el ADN mitocondrial y reduciendo la producción de ATP.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Impacto: Fatiga crónica y acumulación de ácidos grasos libres.</span></li>
                        </ul>
                    </div>
                    <!--div class="col-lg-2 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset("assets/img/general/muestra.jpg")}}" class="img-fluid" alt="">
                    </div-->
                </div>

                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-10 content" data-aos="fade-up" data-aos-delay="200">              
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>5.	Modificación del Microbioma Intestinal</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Triclosán (antiséptico) altera la microbiota, afectando la fermentación de ácidos grasos de cadena corta (SCFAs), cruciales para la homeostasis energética.</span></li>
                        </ul>
                    </div>
                   <!--div class="col-lg-2 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset("assets/img/general/muestra.jpg")}}" class="img-fluid" alt="">
                    </div-->
                </div>
            </div>
        </section>

    </section>

@endsection