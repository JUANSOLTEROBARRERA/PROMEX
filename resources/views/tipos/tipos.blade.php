<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/tipos.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
    <div class=".container-fluid">
        <header class="Encabezado">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <img class="logo" src="{{ asset('images/Logo.png')}}" onclick="window.location='{{url("/") }}'">

                    <div class="d-flex flex-row-reverse">
                        <ul class="menu" data-animation="bonus">
                            <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li>
                            <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                            <li><a class="oda" onclick="window.location='{{url("denuncia") }}'">REALIZA TU DENUNCIA</a></li>
                            @auth
                            <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">CONSULTORÍA</a></li>
                            <li>
                                <form action="/post-logout" method="POST">
                                    @csrf
                                    <a class="oda" href="#" onclick="this.closest('form').submit()">CERRAR SESIÓN</a>
                                </form>
                            </li>
                            @else
                            <li><a class="oda" onclick="window.location='{{url("Login") }}'">INICIO DE SESIÓN</a></li>
                            @endauth
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
    </div>

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



    <div class="container">

	
<div class="row mbr-justify-content-center">

    <div class="col-lg-6 mbr-col-md-10">
        <div class="wrap">
            <div class="ico-wrap">
                <span class="mbr-iconfont fa-volume-up fa"></span>
            </div>
            <div class="text-wrap vcenter">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Stay <span>Successful</span></h2>
                <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mbr-col-md-10">
        <div class="wrap">
            <div class="ico-wrap">
                <span class="mbr-iconfont fa-calendar fa"></span>
            </div>
            <div class="text-wrap vcenter">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Create
                    <span>An Effective Team</span>
                </h2>
                <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mbr-col-md-10">
        <div class="wrap">
            <div class="ico-wrap">
                <span class="mbr-iconfont fa-globe fa"></span>
            </div>
            <div class="text-wrap vcenter">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Launch
                    <span>A Unique Project</span>
                </h2>
                <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mbr-col-md-10">
        <div class="wrap">
            <div class="ico-wrap">
                <span class="mbr-iconfont fa-trophy fa"></span>
            </div>
            <div class="text-wrap vcenter">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Achieve <span>Your Targets</span></h2>
                <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
            </div>
        </div>
    </div>

    

    
</div>

</div>











</body>

</html>