<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/Estilo3.css') }}" rel="stylesheet">
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
                                <ul class="menu"  data-animation="bonus">
                                <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("Denuncia") }}'">REALIZA TU DENUNCIA</a></li>
                                @auth    
                                <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">CONSULTORÍA</a></li>
                                <li><form action="/post-logout" method="POST">
                                    @csrf
                                    <a class="oda" href="#" onclick="this.closest('form').submit()">CERRAR SESIÓN</a>
                                </form></li>
                                @else
                                <li><a class="oda" onclick="window.location='{{url("Login") }}'">INICIO DE SESIÓN</a></li>
                                @endauth
                                </ul>
                            </div>

                </div>
            </nav>

        </header>
        </div>
<div>
<div class="container mt-5">
    <div class="col-12">
        <div class="row">
                <div class="col-12 grid-margin">
                        <div class="card">
                                <div class="card-body" style="background-color: rgb(47, 47, 47);">
                                        <h4 class="card-title" style="color: rgb(74, 133, 34);">Incidente</h4>
                                       <!-- <button type="button" class="btn btn-danger" style="background-color: #00695c;color:#ffffffff; ">Genera reporte</button>-->
                                       <select class="form-field animation a3" name="institucion" id="institucion" placeholder="Institucion"style="color: rgb(74, 133, 34);">
                                        <option>- Institucion -</option>
                                        <option>ITTEPIC</option>
                                        <option>UAN</option>
                                       </select>   
                                        <div class="table-responsive">
                                                <table class="table">
                                                        <thead>
                                                                <tr style="background-color: #00695c; color:#FFFFFF;">
                                                                        <th style=" text-align: center;"> Institucion </th>
                                                                        <th style=" text-align: center;"> Sexo del agresor </th>
                                                                        <th style=" text-align: center;"> Sexo del agredido </th>
                                                                        <th style=" text-align: center;"> Fecha del insidente </th>
                                                                </tr>

                                                        </thead>                                                        
                                                </table>
                                        </div>


                                </div>
                        </div>
                </div>
        </div>

    </div>
</div>
<!--tabla 2-->
<div class="container mt-5">
    <div class="col-12">
        <div class="row">
                <div class="col-12 grid-margin">
                        <div class="card">
                                <div class="card-body"style="background-color: rgb(47, 47, 47);" >
                                        <h4 class="card-title"style="color: rgb(74, 133, 34);">Institución</h4>
                                       <!-- <button type="button" class="btn btn-danger" style="background-color: #00695c;color:#ffffffff; ">Genera reporte</button>-->
                                       <select class="form-field animation a3" name="tipo" id="tipo" placeholder="tipo"style="color: rgb(74, 133, 34);">
                                        <option>- Tipo -</option>
                                        <option>Medio Superior</option>
                                        <option>Superior</option>
                                       </select>                                
                                       <div class="table-responsive" >
                                                <table class="table">
                                                        <thead>
                                                                <tr style="background-color: #00695c; color:#FFFFFF;">
                                                                        <th style=" text-align: center;"> Institucion </th>
                                                                        <th style=" text-align: center;"> Tipo </th>

                                                                </tr>
                                                        </thead>                                                        
                                                </table>
    
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

    </div>
</div>
<!--tabla 2-->   
</div> 
 <!-- 
        <div class="container-fluid">
                    <div id="Cuerpo">
                        <div class="row justify-content-end">
                            <a>Consulta</a>
                        </div>
                    </div>
            </div>
        -->   
     </body>
 
</html>
 
