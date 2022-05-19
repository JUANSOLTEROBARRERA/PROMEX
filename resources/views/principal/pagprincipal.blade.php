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
        <header class="Encabezado"> 
            <!-- <header style="position: -webkit-sticky;  position: sticky; top: 0;">-->
 
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <img class="logo" src="{{ asset('images/Logo.png')}}" onclick="window.location='{{url("/") }}'">

                            <div class="d-flex flex-row-reverse">
                                <ul class="menu"  data-animation="bonus">
                                <!-- <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li> -->

                                @auth    
                                <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">CONSULTA</a></li>
                                <li><form action="/post-logout" method="POST">
                                    @csrf
                                    <a class="oda" href="#" onclick="this.closest('form').submit()">CERRAR SESIÓN</a>
                                </form></li>
                                @else
                                <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("denuncia") }}'">REALIZA TU DENUNCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("Login") }}'">INICIAR DE SESIÓN</a></li>
                                @endauth
                                </ul>
                            </div>

                </div>
            </nav>
        </header>
        </div>
                            

                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('images/Carrusel3.jpg')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <button onclick="window.location='{{url("Test") }}'" type="button" class="btn btn-warning" style="margin-bottom:30px; font: 30px Arial Black; padding:15px">Infórmate</button>
                                    <h5 style="color:rgb(250,250,250)">La ayuda está a tu alcance</h5>
                                    <p style="color:rgb(220,220,220)">La violencia es un delito que debe ser erradicado.</p>
                                </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('images/Carrusel2.jpg')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:rgb(250,250,250)">Tu seguridad es lo mas importante</h5>
                                    <p style="color:rgb(220,220,220)">Que la violencia no abuse con tu seguridad integral.</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="{{ asset('images/Carrusel1.jpg')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:rgb(250,250,250)">Realiza tus denuncias</h5>
                                    <p style="color:rgb(220,220,220)">No te preocupes porque todas las denuncias son anonimas.</p>
                                </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>

                            


                            


                            <div id="Cuerpo2">
                                    <div class="row justify-content-begin">
                                        <div class="col-sm-15">
                                            <br>
                                            <a class="Titulo3">¿Quienes somos?</a>
                                            <br><br>
                                            <p class="Titulo4">Somos un equipo multidisciplinario, multicultural; siendo conformada mayoritariamente por mujeres, jóvenes de diversas disciplinas de las áreas sociales; con una amplia experiencia en el trabajo de capacitación, gestión, desarrollo y ejecución de proyectos dentro del ámbito público y social.</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>





                            
                            
                            
                            
                            
                                <div id="Cuerpo">
                                    <div class="row justify-content-begin">
                                        <div class="col-sm-14">
                                            <br>
                                            <a class="Titulo">promex</a>
                                            <br><br>
                                            <a class="Titulo2">Copyright © 2022 PROMEXAC.</a>
                                            <br>
                                            
                                        </div>
                                    </div>
                                </div>




                                    <sticky>
                                <video width="320" height="200" style="border: 1px solid #fff; 
                                position: fixed;
                                bottom: 0px;
                                right:0px;
                                background-color: black;
                                border-color: white;" 
                                autoplay muted controls>
                                    <source src ="{{ asset('videos/mov_bbb.mp4')}}" type="video/mp4">
                                                    <!-- <source src="mov_bbb.ogv" type="video/ogg"> -->
                                </video>
                            


                                
                                
                                <div class="wrapper">
                                            <ul  style="list-style: none;">
                                                <li class="encima" style="width: 50px;
                                                    height: 50px;
                                                    position: relative;
                                                    background: #e59500;
                                                    margin: 10px 0;
                                                    cursor: pointer;
                                                    border-radius: 3px;
                                                    box-shadow: 0 0 10px rgba(0,0,0,0.3); 
                                                    background: #3b5998;">
                                                <i class="fa fa-facebook" aria-hidden="true">
                                                <a href="https://www.facebook.com/promexac/">
                                                    <img style="width:38px;height:38px" src="{{ asset('images/facebook.png')}}">
                                                </a>
                                                </i>
                                                <div class="slider">
                                                    <p>
                                                        <a href="https://www.facebook.com/promexac/" style="text-decoration: none;">facebook</a>
                                                    </p>
                                                </div>
                                                
                                            </ul>
                                </div>
                                

                            
    </body>
</html>