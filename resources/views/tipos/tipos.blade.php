<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/tipos.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class=".container-fluid">
        <header class="Encabezado">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <img class="logo" src="{{ asset('images/Logo.png')}}" onclick="window.location='{{url("/") }}'">

                    <div class="d-flex flex-row-reverse">
                        <ul class="menu" data-animation="bonus">
                            <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                            <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li>

                            <li><a class="oda" onclick="window.location='{{url("denuncia") }}'">REALIZA TU DENUNCIA</a></li>
                            @auth
                            <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">CONSULTA</a></li>
                            <li>
                                <form action="/post-logout" method="POST">
                                    @csrf
                                    <a class="oda" href="#" onclick="this.closest('form').submit()">CERRAR SESIÓN</a>
                                </form>
                            </li>
                            @else
                            <li><a class="oda" onclick="window.location='{{url("Login") }}'">INICIAR DE SESIÓN</a></li>
                            @endauth
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
    </div>




    <script lang="JavaScript">
        $(document).ready(function() {

            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

            allWells.hide();

            navListItems.click(function(e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    $item.addClass('btn-success');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function() {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-success').trigger('click');
        });
    </script>

    <!-- codigo nuevo-->

    <!------ Include the above in your HEAD tag ---------->
    <br>
    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">

                <div class="stepwizard-step col-xs-3">

                    <a style="margin-top:-5px" href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p>
                        <small style="font-size: 15px;">Verbal</small>
                    </p>
                </div>
                <div class="stepwizard-step col-xs-3">

                    <a style="margin-top:-5px" href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                    <p><small style="font-size: 15px;">Patrimonial</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">

                    <a style="margin-top:-5px" href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                    <p><small style="font-size: 15px;">Física</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">

                    <a style="margin-top:-5px" href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
                    <p><small style="font-size: 15px;">Sexual</small></p>
                </div>
            </div>
        </div>

        <form role="form">
            <div class="panel panel-primary setup-content" id="step-1">

                <div class="card mb-3" style="max-width: 1140px; background-color: rgb(47, 47, 47); border-radius: 25px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/verbal.png')}}" style="padding:20px" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="color:rgb(129, 203, 71);">Verbal o Psicológica</h5>
                                <p class="card-text" style="color:beige">¿Qué es la violencia psicológica o emocional?<br>
                                    Es toda acción u omisión destinada a degradar o controlar las acciones, comportamientos, creencias y decisiones de otras personas por medio de intimidación, manipulación, amenaza, humillación, aislamiento, o cualquier conducta que implique un perjuicio en la salud psicológica. Este tipo de violencia es de las más comunes y naturalizadas de la sociedad, por lo que es necesario aprender a reconocerla y denunciar.<br><br>
                                    Consecuencia de la violencia psicológica o emocional<br>
                                    • Ambivalencia de sentimientos hacia quien está ejerciendo el maltrato.<br>
                                    • Ansiedad y autoculpa por creerse el causante de algún problema.<br>
                                    • Pérdida constante de la autoestima, inseguridad.<br>
                                    • Estrés por presión del medio.<br>
                                    • Dificultades para controlar de forma eficaz sus impulsos.<br>
                                    • Complicación para expresar afecto.
                                </p>
                                <p class="card-text"><small class="text-muted">Última actualización: 18 de mayo de 2022</small></p>
                                <a onclick="window.location='{{url("denuncia") }}'" class="btn btn-danger" style="padding:10px; color:beige">Realiza tu denuncia</a>
                                <a onclick="window.location='{{url("Test") }}'" class="btn btn-warning" style="padding:10px">Realiza un test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="panel panel-primary setup-content" id="step-2">
                <div class="card mb-3" style="max-width: 1140px; background-color: rgb(47, 47, 47); border-radius: 25px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/Patrimonial.png')}}" style="padding:20px" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="color:rgb(129, 203, 71);">Patrimonial</h5>
                                <p class="card-text" style="color:beige">
                                    ¿Qué es la violencia patrimonial u económica?<br>
                                    La violencia patrimonial es aquella usada para controlar y amenazar a un individuo a través del control de los recursos económicos o patrimoniales. Esto se consigue a través de la perturbación, de la posesión, tenencia o propiedad de sus bienes, pérdida, sustracción, destrucción, retención o distracción indebida de objetos, instrumentos de trabajo, documentos personales, bienes, valores y derechos patrimoniales.<br><br>
                                    Consecuencia de la violencia patrimonial u económica<br>
                                    es difícil afrontar la situación si una mujer considera que después de divorciarse o de dejar su pareja no hay mucho que hacer o se va a enfrentar a la situación de no tener trabajo e ingresos, lo que se traduce en la decisión de continuar en el abuso. “Hay que darse cuenta de que es abuso y tratar de buscar el apoyo tanto legal, financiero del mismo Estado, que debería establecer políticas para aminorar estas prácticas”.<br>

                                </p>
                                <p class="card-text"><small class="text-muted">Última actualización: 18 de mayo de 2022</small></p>
                                <a onclick="window.location='{{url("denuncia") }}'" class="btn btn-danger" style="padding:10px; color:beige">Realiza tu denuncia</a>
                                <a onclick="window.location='{{url("Test") }}'" class="btn btn-warning" style="padding:10px">Realiza un test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary setup-content" id="step-3">
                <div class="card mb-3" style="max-width: 1140px; background-color: rgb(47, 47, 47); border-radius: 25px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/fisica.png')}}" style="padding:20px" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="color:rgb(129, 203, 71);">Física</h5>
                                <p class="card-text" style="color:beige">¿Qué es la violencia física?<br>
                                    La violencia física es aquella acción generada de manera voluntaria y que por lo mismo ocasiona daños no accidentales, utilizando la fuerza física o material (es decir, sirviéndose de objetos) y que tiene como fin fundamental generar un impacto directo en el cuerpo y consecuencias físicas tanto externas como internas.<br>
                                    Consecuencia de la violencia física<br><br>
                                    Las consecuencias de la violencia física resultan complejas de evaluar ya que oscilan entre el incremento del riesgo de empeorar la salud y la posibilidad de terminar con la vida de la víctima.<br>
                                    • Lesiones graves.<br>
                                    • Homicidio.<br>
                                    • Lesiones durante el embarazo.<br>
                                    • Embarazos no deseados (hecho agravado si ocurre en edad temprana).<br>
                                    • Vulnerabilidad a las enfermedades.</p>
                                <p class="card-text"><small class="text-muted">Última actualización: 18 de mayo de 2022</small></p>
                                <a onclick="window.location='{{url("denuncia") }}'" class="btn btn-danger" style="padding:10px; color:beige">Realiza tu denuncia</a>
                                <a onclick="window.location='{{url("Test") }}'" class="btn btn-warning" style="padding:10px">Realiza un test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary setup-content" id="step-4">
                <div class="card mb-3" style="max-width: 1140px; background-color: rgb(47, 47, 47); border-radius: 25px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/sexual.png')}}" style="padding:20px" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="color:rgb(129, 203, 71);">Sexual</h5>
                                <p class="card-text" style="color:beige">¿Qué es la Violencia Sexual?<br>
                                    La violencia sexual es todo acto intencional de naturaleza sexual que es forzado en otra persona, sin importar su relación, mediante fuerza física, coerción, intimidación, humillación, causando o tomando ventaja de la intoxicación por drogas o alcohol de otra persona, o tomando ventaja de la inhabilidad de otra persona para dar consentimiento.<br><br>
                                    Consecuencia de la violencia sexual <br>
                                    Las investigaciones refieren la existencia de daños en la salud física y mental a corto plazo, como los que se muestran a continuación:<br><br>
                                    Salud física <br>
                                    A corto plazo <br>
                                    • Lesiones anales o vaginales. <br>
                                    • Embarazo no deseado. <br>
                                    • Infecciones de transmisión sexual: gonorrea, clamidia, tricomoniasis, sífilis, VIH / SIDA y hepatitis B, vaginitis, verrugas genitales, proceso inflamatorio pelviano, infertilidad. <br><br>
                                    A largo plazo <br>
                                    • Trastornos no inflamatorios de los órganos genitales femeninos, imposibilidad de tener orgasmos, dolores pélvicos crónicos, menopausia temprana. <br>
                                    • Incontinencia anal o vesical.<br><br>
                                    Salud mental <br>
                                    Corto Plazo<br>
                                    • Reacción de estrés agudo: ronchas en el cuerpo, dolores de cabeza o abdominales frecuentes, etcétera. <br>
                                    • Trastorno de estrés postraumático. <br>
                                    • Crisis de pánico.<br>
                                    • Depresión. <br>
                                    • Ansiedad de separación de las personas quienes le cuidan. <br>
                                    • Fobias. <br>
                                    • Afectaciones al sueño: terrores nocturnos, pesadillas, insomnio. <br>
                                    • Trastornos de la ingestión de alimentos anorexia, bulimia u obesidad.<br>
                                    • Trastornos psicológicos y del comportamiento asociados con el desarrollo y orientación sexual. <br>
                                    • Pérdida del control de esfínteres: enuresis (orina) y encopresis (materia fecal)<br>
                                    Largo Plazo <br>
                                    • Baja autoestima. <br>
                                    • Estigmatización. <br>
                                    • Realizar conductas de riesgo, ausencia de autoprotección. <br>
                                    • Ideas suicidas e intentos de suicidio.<br>
                                    • Fracaso escolar. <br>
                                    • Abuso y dependencia de alcohol y/o drogas. <br>
                                    • Conductas delictivas. <br>
                                    • Relaciones familiares conflictivas. <br>
                                    • Negligencia en el cumplimiento de obligaciones. <br>
                                    • Aislamiento social, menos interacciones sociales, baja participación en actividades comunitarias. <br>
                                    • Dificultad en las relaciones de pareja, elevado índice de ansiedad social, estilo parental permisivo, percepción negativa de sí misma(o) como madre o padre, uso de castigo físico ante conflicto con sus hijos/as. <br>
                                    • Revictimización. <br>
                                    • Transmisión intergeneracional.<br>
                                </p>
                                <p class="card-text"><small class="text-muted">Última actualización: 18 de mayo de 2022</small></p>
                                <a onclick="window.location='{{url("denuncia") }}'" class="btn btn-danger" style="padding:10px; color:beige">Realiza tu denuncia</a>
                                <a onclick="window.location='{{url("Test") }}'" class="btn btn-warning" style="padding:10px">Realiza un test</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <!-- xd-->

    <div id="Cuerpo" style="bottom: 0; position: static; width: 100%;">
        <div class="row justify-content-begin">
            <div class="col-sm-14">
                <br>
                <a class="Titulo" style="color: rgb(74, 133, 34);">promex</a>
                <br><br>
                <a class="Titulo2">Copyright © 2022 PROMEXAC.</a>
                <br>

            </div>
        </div>
    </div>
</body>

</html>