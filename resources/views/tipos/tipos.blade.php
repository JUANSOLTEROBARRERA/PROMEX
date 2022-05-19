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

    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-3">
                    <br>
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p>
                        <small style="font-size: 15px;">Verbal</small>
                    </p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <br>
                    <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                    <p><small style="font-size: 15px;">Patrimonial</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <br>
                    <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                    <p><small style="font-size: 15px;">Física</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <br>
                    <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
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
                                <p class="card-text" style="color:beige">Es un tipo de violencia que se caracteriza porque pretende hacer daño a otra persona con un mensaje o un discurso hiriente. Se puede manifestar en forma de acusaciones, insultos, amenazas, juicios, críticas degradantes, ordenes agresivas, gritos o palabras descalificantes, o puede no contener insulto alguno, ya que para producir malestar psicológico no es esencial utilizar esa clase de recursos.</p>
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
                                <p class="card-text" style="color:beige">Es un tipo de violencia referente a un acto u omisión que afecta la supervivencia de la víctima. Se manifiesta en la transformación, sustracción, destrucción o retención de objetos, documentos personales, bienes y valores, derechos patrimoniales o recursos económicos destinados a satisfacer sus necesidades y puede abarcar daños a los bienes comunes o propios de la víctima.</p>
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
                                <p class="card-text" style="color:beige">Un tipo de violencia referente a cualquier acto que inflige daño no accidental, usando la fuerza física o algún tipo de arma u objeto que pueda provocar o no lesiones ya sean internas, externas o ambas.</p>
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
                                <p class="card-text" style="color:beige">La violencia sexual es todo acto intencional de naturaleza sexual que es forzado en otra persona, sin importar su relación, mediante fuerza física, coerción, intimidación, humillación, causando o tomando ventaja de la intoxicación por drogas o alcohol de otra persona, o tomando ventaja de la inhabilidad de otra persona para dar consentimiento.</p>
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
    
    <div id="Cuerpo" style="margin-top: 15%">
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