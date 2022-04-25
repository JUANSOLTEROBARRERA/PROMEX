<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/Estilo.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    </head>
    <body>
        <div class=".container-fluid">
        <header class="Encabezado">


            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img class="logo" src="{{ asset('images/Logo.png')}}" onclick="window.location='{{url("/") }}'">

                        <div class="d-flex flex-row-reverse">
                            <ul class="menu"  data-animation="bonus">
                                <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">Consultoría</a></li>
                                <li><a class="oda" onclick="window.location='{{url("Test") }}'">Test de Violencia</a></li>
                                <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">Tipos de Violencia</a></li>
                                <li><a class="oda" onclick="window.location='{{url("Denuncia") }}'">Realiza tu Denuncia</a></li>
                            </ul>
                        </div>

            </div>
            </nav>



        </header>
        </div>
        <div class="container-fluid">
                    <div id="Cuerpo">
                        <div class="row justify-content-end">


                            <a>Consulta</a>


                        </div>
                    </div>
            </div>
    </body>
</html>