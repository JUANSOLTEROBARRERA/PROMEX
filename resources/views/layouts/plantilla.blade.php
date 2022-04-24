<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/Estilo2.css') }}" rel="stylesheet">

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
                        <img class="logo" src="{{ asset('images/Logo.png')}}">
                    </div>
                    <div class="nav navbar-nav navbar-right" id="BotonHome">
                        <img class="Home" src="{{ asset('images/Logo.png')}}">
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class=".container-fluid">
        <div id="Cuerpo">
            <div class="row ">
                <div class="col-sm-4">
                    <div class="MenuIzq">
                        <label class="Titulo">@yield('Titulo')</label>
                        <div class="PanelIzq">
                            @yield('Panel')
                            <img class="PizzaPanel" src="{{ asset('images/Logo.png')}}">
                        </div>
                    </div>
                </div>
                @yield('AreaTrabajo')
            </div>
        </div>
    </div>  
</body>

</html>