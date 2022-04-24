<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/Estilo.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class=".container-fluid">
        <header class="Encabezado">
            <nav class="navbar navbar-style">
                <div class="container">
                    <div class="navbar-nav">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img class="logo" src="{{ asset('images/Logo.png')}}" onclick="window.location='{{url("/") }}'">
                    </div>
                    <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a class="Navegacion" onclick="window.location='{{url("Consultoria") }}'">Consultoría</a></li>
                        <li><a class="Navegacion" onclick="window.location='{{url("Test") }}'">Test de Violencia</a></li>
                        <li><a class="Navegacion" onclick="window.location='{{url("TiposViolencia") }}'">Tipos de Violencia</a></li>
                        <li><a class="Navegacion" onclick="window.location='{{url("Denuncia") }}'">Realiza tu Denuncia</a></li>
                    </ul>
                    </div>
                </div>
            </nav>
        </header>
        </div>
        <div class="container-fluid">
                    <div id="Cuerpo">
                        <div class="row justify-content-end">
                            <div class="col-sm-6">
                                <a>Realiza tu denuncia</a>
                            </div>
                        </div>
                    </div>
            </div>
    </body>
</html>