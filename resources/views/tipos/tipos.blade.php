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
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p class="mr-5"><small>Verbal o Psicológica</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p><small>Patrimonial</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p><small>Física</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p><small>Sexual</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p><small>Personal Safety</small></p>
                </div>
            </div>
        </div>

        <form role="form">
            <div class="panel panel-primary setup-content" id="step-1">
                <div id="Cuerpo2">
                    <div class="row justify-content-begin">
                        <div class="col-sm-9">
                            <div class="row justify-content-begin">
                                <div class="col-sm-18">
                                    <section class="vh-100">
                                        <div class="container py-5 h-100">
                                            <div class="login-wrap">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('images/verbal.png')}}" style="padding:20px" alt="..." class="rounded">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Violencia Verbal o Psicológica</h5>
                                                        <p class="card-text">La violencia verbal es cuando...</p>
                                                        <a href="#" class="btn btn-primary">Realiza tu denuncia</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="panel panel-primary setup-content" id="step-2">
    <div id="Cuerpo2">
                    <div class="row justify-content-begin">
                        <div class="col-sm-9">
                            <div class="row justify-content-begin">
                                <div class="col-sm-18">
                                    <section class="vh-100">
                                        <div class="container py-5 h-100">
                                            <div class="login-wrap">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('images/verbal.png')}}" style="padding:20px" alt="..." class="rounded">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Patrimonial</h5>
                                                        <p class="card-text">La violencia Patrimonial es cuando...</p>
                                                        <a href="#" class="btn btn-primary">Realiza tu denuncia</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <div class="panel panel-primary setup-content" id="step-3">
    <div id="Cuerpo2">
                    <div class="row justify-content-begin">
                        <div class="col-sm-9">
                            <div class="row justify-content-begin">
                                <div class="col-sm-18">
                                    <section class="vh-100">
                                        <div class="container py-5 h-100">
                                            <div class="login-wrap">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('images/verbal.png')}}" style="padding:20px" alt="..." class="rounded">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Física</h5>
                                                        <p class="card-text">La violencia fisica es cuando...</p>
                                                        <a href="#" class="btn btn-primary">Realiza tu denuncia</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <div class="panel panel-primary setup-content" id="step-4">
    <div id="Cuerpo2">
                    <div class="row justify-content-begin">
                        <div class="col-sm-9">
                            <div class="row justify-content-begin">
                                <div class="col-sm-18">
                                    <section class="vh-100">
                                        <div class="container py-5 h-100">
                                            <div class="login-wrap">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('images/verbal.png')}}" style="padding:20px" alt="..." class="rounded">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Sexual</h5>
                                                        <p class="card-text">La violencia sexual es cuando...</p>
                                                        <a href="#" class="btn btn-primary">Realiza tu denuncia</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </form>
    </div>

    <!-- xd-->



</body>

</html>