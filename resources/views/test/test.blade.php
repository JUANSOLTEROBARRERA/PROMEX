<!DOCTYPE html>
<html>
    <head>
    <link href="{{ asset('css/Formulario.css') }}" rel="stylesheet">
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
                            

                                    <div id="Cuerpo2">
                                    <div class="row justify-content-begin">
                                        <div class="col-sm-15">




                                        <div class="container">
                                <div class="left">
                                    <div class="header">
                                    <h2 class="animation a1">Test de Violencia</h2>
                                    <h4 class="animation a2">Selecciona las opciones que corresponden a tu situación</h4>
                                    </div>
                                    <div class="form">
                                    
                                    
                                    <select class="form-field animation a3" name="niveleducativo" id="niveleducativo" placeholder="Nivel Educativo">
                                        <option>- Nivel Educativo -</option>
                                        <option>Preparatoria</option>
                                        <option>Universidad</option>
                                   </select>
                                   <select class="form-field animation a4" name="nombreinstitucion" id="nombreinstitucion" placeholder="Nombre Institución">
                                        <option value="Universidad">- Institución -</option>
                                        <option value="Colegio ciencias y letras">Colegio ciencias y letras</option>
                                        <option value="INAPSI NAYARIT">INAPSI NAYARIT</option>
                                        <option value="Escuela Normal Superior de Nayarit">Escuela Normal Superior de Nayarit</option>
                                        <option value="Colegio Simón Bolívar">Colegio Simón Bolívar</option>
                                        <option value="Escuela Secundaria Federal #44 Severiano Ocejeda Peña">Escuela Secundaria Federal #44 Severiano Ocejeda Peña</option>
                                   </select>
                                   <input type="email" class="form-field animation a5" placeholder="Email Address">
                                   <input type="text" class="form-field animation a6" placeholder="Nombre del agresor">
                                   <select class="form-field animation a7" name="niveleducativo" id="niveleducativo" placeholder="Nivel Educativo">
                                        <option>- Relación Agresor -</option>
                                        <option>Preparatoria</option>
                                        <option>Universidad</option>
                                   </select>
                                   <fieldset>
                                       <br>
                                        <p class="animation a8">Sexo del agresor</p>
                                        <div>
                                        <input class="animation a9" type="radio" id="hombre" name="drone"
                                                checked>
                                        <label class="animation a10" for="hombre">Hombre</label>
                                        </div>

                                        <div>
                                        <input class="animation a11" type="radio" id="mujer" name="drone">
                                        <label  class="animation a12" for="mujer">Mujer</label>
                                        </div>
                                        <div>
                                        <input class="animation a13" type="radio" id="indefinido" name="drone">
                                        <label  class="animation a13" for="indefinido">Indefinido</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                       <br>
                                        <p class="animation a13">Tipo de violencia</p>

                                        <div>
                                        <input class="animation a14" type="checkbox" id="verb" name="drone">
                                        <label class="animation a15" for="verb">Verbal o psicológica</label>
                                        </div>

                                        <div>
                                        <input class="animation a16" type="checkbox" id="patri" name="drone">
                                        <label class="animation a17" for="patri">Patrimonial</label>
                                        </div>

                                        <div>
                                        <input class="animation a18" type="checkbox" id="fisica" name="drone">
                                        <label class="animation a19" for="fisica">Física</label>
                                        </div>

                                        <div>
                                        <input class="animation a20" type="checkbox" id="sexual" name="drone">
                                        <label class="animation a21" for="sexual">Sexual</label>
                                        </div>
                                    </fieldset>
                                   <input type="text" class="form-field animation a22" placeholder="Lugar">
                                   <select class="form-field animation a23" placeholder="Nivel Educativo">
                                        <option>- Acción Tomada -</option>
                                        <option>Preparatoria</option>
                                        <option>Universidad</option>
                                   </select>
                                   <select class="form-field animation a24" placeholder="Nivel Educativo">
                                        <option>- Respuesta Acción -</option>
                                        <option>Preparatoria</option>
                                        <option>Universidad</option>
                                   </select>
                                   <select class="form-field animation a25" placeholder="Nivel Educativo">
                                        <option>- Tiempo -</option>
                                        <option>Preparatoria</option>
                                        <option>Universidad</option>
                                   </select>
                                   <input type="text" class="form-field animation a26" placeholder="Otro servicio">
                                   <input type="text" class="form-field animation a27" placeholder="Detalles">
                                   <br>
                                    <button class="form-field animation a28" class="Revisar">ENVIAR</button>
                                    </div>
                                </div>
                                <div class="right"></div>
                                </div>




                                </div>
                                </div>
                                </div>



                            
    </body>
</html>