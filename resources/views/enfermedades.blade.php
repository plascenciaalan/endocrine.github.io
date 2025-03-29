@extends('app')
@extends('head')
@extends('header')
@extends('footer')


@section('title')
    <title>Enfermedades principales</title>
@endsection

@section('content')

<section id="definiciones" class="faq section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Principales Enfermedades o Alteraciones por Disruptores Endocrinos Artificiales (DEA)</h2>
    </div>
    <!-- End Section Title -->

    <section id="about-alt" class="about-alt section">
        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Definición</h3>
                    <p><p>Los DEA están asociados a múltiples patologías debido a su interferencia con el sistema endocrino. A continuación, se detallan las principales enfermedades, sus signos/síntomas y tratamientos (con enfoque en evidencia clínica y bioquímica).</p></p>
                </div>
            </div>

            <div class="space"></div>
            <div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>1. Obesidad y Síndrome Metabólico</h3>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Mecanismo</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Activación de receptores de estrógenos (ER-α/β) y receptores X de pregnano (PXR) por BPA y ftalatos, promoviendo adipogénesis.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Alteración de la leptina (hormona de saciedad) y resistencia a la insulina.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Signos y Síntomas</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Aumento de grasa visceral (índice cintura-cadera elevado).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Hiperglucemia en ayunas (>100 mg/dL).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Hipertensión arterial (>130/85 mmHg).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Triglicéridos elevados (>150 mg/dL).</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Tratamiento</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Dieta y ejercicio: Reducción de exposición a DEA (evitar plásticos con BPA, alimentos enlatados).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Fármacos: Metformina (mejora sensibilidad a insulina), GLP-1 (liraglutida).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Suplementos: Ácido alfa-lipoico (antioxidante mitocondrial).</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="space"></div>
            <div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>2. Diabetes Mellitus Tipo 2</h3>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Mecanismo</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Los ftalatos inhiben la vía PI3K/Akt, reduciendo la captación de glucosa en músculo.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>El arsénico (DEA ambiental) daña células β-pancreáticas, disminuyendo secreción de insulina.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Signos y Síntomas</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Poliuria (orina frecuente), polidipsia (sed excesiva).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Fatiga crónica y visión borrosa.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Hemoglobina glicosilada (HbA1c > 6.5%).</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Tratamiento</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Fármacos: Inhibidores de SGLT-2 (empagliflozina), metformina.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Desintoxicación: Quercetina (elimina ftalatos vía CYP450).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Prevención: Evitar plásticos PVC (ftalatos) y pesticidas.</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="space"></div>
            <div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Hipotiroidismo y Enfermedad de Hashimoto</h3>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Mecanismo</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>PBDE (retardantes de llama) compiten con T3/T4 por unión a transtiretina.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Perclorato (contaminante del agua) inhibe captación de yodo en tiroides.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Signos y Síntomas</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Aumento de peso inexplicable, piel seca, caída de cabello.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Bradicardia, intolerancia al frío.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span></span>TSH elevada (>4.5 mUI/L), T4 libre baja.</li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Tratamiento</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Levotiroxina (reemplazo hormonal).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Dieta: Alimentos ricos en selenio (nueces de Brasil) y yodo (algas).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Evitar: Plásticos, colchones con PBDE.</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="space"></div>
            <div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>4. Trastornos del Desarrollo Neuroconductual (TDAH, Autismo)</h3>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Mecanismo</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>BPA y PCB alteran la dopamina y serotonina en cerebro fetal.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ftalatos reducen niveles de testosterona, afectando desarrollo cerebral masculino.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Signos y Síntomas</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Hiperactividad, déficit de atención (TDAH).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Retraso en lenguaje (autismo).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Bajo coeficiente intelectual (IQ).</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Tratamiento</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Terapia conductual y psicoeducación.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Omega-3 (antiinflamatorio neuronal).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Evitar: Juguetes de plástico blando (ftalatos), latas de comida.</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="space"></div>
            <div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>5. Cáncer Hormono-Dependiente (Mama, Próstata)</h3>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Mecanismo</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>BPA y dioxinas activan receptores de estrógenos, promoviendo proliferación celular.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Atrazina (herbicida) eleva aromatasa, aumentando estradiol en hombres.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Signos y Síntomas</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Nódulos mamarios o próstaticos.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Antecedentes familiares + exposición a DEA.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row gy-4">
                    <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                            <h6>Tratamiento</h6>
                        </div>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Tamoxifeno (cáncer mama ER+).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Dieta crucíferas (brócoli, desintoxica vía CYP1A2).</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Prevención: Filtros de agua (eliminar atrazina).</span></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

</section>

@endsection