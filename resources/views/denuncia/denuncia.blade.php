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
                                    <h2 class="animation a1">Realiza tu Denuncia</h2>
                                    </div>
                                <form action="{{route('denuncia.store')}}" method="POST" method="POST">
                                    @csrf
                                    <br>
                                    <h4 class="animation a2">Datos Personales</h4>
                                    <div class="form">
                                    
                                    
                                    <select class="form-field animation a3" name="niveleducativo" id="niveleducativo" placeholder="Nivel Educativo">
                                        <option>- Nivel Educativo -</option>
                                        <option>Preparatoria</option>
                                        <option>Universidad</option>
                                   </select>
                                   <select class="form-field animation a4" name="nombre_institucion" id="nombreinstitucion" placeholder="Nombre Institución">
                                        <option value="Universidad">- Institución -</option>
                                        <option value="Colegio ciencias y letras">Colegio ciencias y letras</option>
                                        <option value="INAPSI NAYARIT">INAPSI NAYARIT</option>
                                        <option value="Escuela Normal Superior de Nayarit">Escuela Normal Superior de Nayarit</option>
                                        <option value="Colegio Simón Bolívar">Colegio Simón Bolívar</option>
                                        <option value="Escuela Secundaria Federal #44 Severiano Ocejeda Peña">Escuela Secundaria Federal #44 Severiano Ocejeda Peña</option>
                                   </select>
                                   <input type="email" class="form-field animation a5" placeholder="Email Address" name="correo">
                                   <select class="form-field animation a7"  id="sexoagredido" placeholder="Relacion Agresor" name="sexo_agredido">
                                                <option>- Sexo Agredido -</option>
                                                <option>Hombre</option>
                                                <option>Mujer</option>
                                    </select>
                                   <!--fieldset>
                                       <br>
                                        <p class="animation a8">Sexo</p>
                                        <div>
                                        <input class="animation a9" type="radio" id="hombre" name="sexo_agredido"
                                                checked>
                                        <label class="animation a10" for="hombre">Hombre</label>
                                        </div>
                                        

                                        <div>
                                        <input class="animation a11" type="radio" id="mujer" name="sexo_agredido">
                                        <label  class="animation a12" for="mujer">Mujer</label>
                                        </div>

                                        <div>
                                        <input class="animation a13" type="radio" id="indefinido" name="drone2">
                                        <label  class="animation a13" for="indefinido">Indefinido</label>
                                        </div>
                                    </fieldset-->
                                   <hr style="animation-delay: 2.4s; border-top: 8px solid #bbb;border-radius: 5px;">
                                   <br>
                                   <h4 class="animation a5">Datos Agresor</h4>
                                   <hr style="animation-delay: 2.4s; border-top: 8px solid #bbb;border-radius: 5px;">
                                   
                                   <input type="text" class="form-field animation a6" placeholder="Nombre del agresor" name="nombre_agresor">
                                   <select class="form-field animation a7" id="relacionagresor" placeholder="Relacion Agresor" name="relacion_agresor">
                                        <option>- Relación Agresor -</option>
                                        <option>Compañero de Clase</option>
                                        <option>Compañero de la Escuela</option>
                                        <option>Noviazgo dentro de la Escuela</option>
                                        <option>Noviazgo fuera de la Escuela</option>
                                        <option>Maestro</option>
                                        <option>Director</option>
                                        <option>Personal Administrativo</option>
                                        <option>Personal de labores Varias</option>
                                        <option>Personas ajenas de la Escuela</option>
                                   </select>
                                   <!--fieldset-->
                                       <br>
                                        <!--p class="animation a8">Sexo del agresor</p-->
                                        <!--div-->
                                        <select class="form-field animation a7"  id="sexoagresor" placeholder="Relacion Agresor" name="sexo_agresor">
                                                <option>- Sexo Agresor -</option>
                                                <option>Hombre</option>
                                                <option>Mujer</option>
                                        </select>
                                        <!--/div-->
                                        <!--input class="animation a9" type="radio" id="hombre" name="sexo_agresor">
                                        <label class="animation a10" for="hombre">Hombre</label>
                                        </div>
                                        

                                        <div>
                                        <input class="animation a11" type="radio" id="mujer" name="sexo_agresor">
                                        <label  class="animation a12" for="mujer">Mujer</label>
                                        </div>

                                        <div>
                                        <input class="animation a13" type="radio" id="indefinido" name="sexo_agresor">
                                        <label  class="animation a13" for="indefinido">Indefinido</label>
                                        
                                    </fieldset-->
                                    <fieldset>
                                       <br>
                                       <hr style="animation-delay: 2.4s; border-top: 8px solid #bbb;border-radius: 5px;">
                                       <br>
                                       <h4 class="animation a13">Narración de Hechos</h4>
                                       <hr style="animation-delay: 2.4s; border-top: 8px solid #bbb;border-radius: 5px;">
                                        <p class="animation a13">Tipo de violencia</p>
                                        <div>
                                        <input class="animation a14" type="radio" id="verb" name="tipoviolencia">
                                        <label class="animation a15" for="verb">Verbal o psicológica</label>
                                        </div>

                                        <div>
                                        <input class="animation a16" type="radio" id="patri" name="tipoviolencia">
                                        <label class="animation a17" for="patri">Patrimonial</label>
                                        </div>

                                        <div>
                                        <input class="animation a18" type="radio" id="fisica" name="tipoviolencia">
                                        <label class="animation a19" for="fisica">Física</label>
                                        </div>

                                        <div>
                                        <input class="animation a20" type="radio" id="sexual" name="tipoviolencia">
                                        <label class="animation a21" for="sexual">Sexual</label>
                                        </div>
                                    </fieldset>
                                   <select class="form-field animation a22" placeholder="Lugar" name="lugar">
                                        <option>- Lugar -</option>
                                        <option>Dentro del aula</option>
                                        <option>En una oficina o privado</option>
                                        <option>Áreas comunes</option>
                                        <option>Baños</option>
                                        <option>Fuera del plantel realizando una actividad académica</option>
                                        <option>Fuera del plantel realizando otra actividad</option>
                                   </select>
                                   <select class="form-field animation a23" placeholder="Accion Tomada" name="accion_tomada">
                                        <option>- Acción Tomada -</option>
                                        <option>Ninguna</option>
                                        <option>Denuncie ante un maestro</option>
                                        <option>Denuncie ante una autoridad escolar</option>
                                        <option>Denuncie ante una instancia</option>
                                   </select>
                                   <select class="form-field animation a24" placeholder="Respuesta Accion" name="respuesta_accion">
                                        <option>- Respuesta Accion -</option>
                                        <option>No aplica</option>
                                        <option>No, no me quisieron atender</option>
                                        <option>No, no quisieron levanarme la denuncia</option>
                                        <option>No tomaron la denuncia y no se hizo nada</option>
                                        <option>Si, se atendió mi denuncia y hubo un castigo</option>
                                        <option>Si, tomaron la denuncia y no se hizo nada</option>
                                        <option>Si, tomaron la denuncia pero no supe que pasó</option>
                                   </select>
                                   <select class="form-field animation a25" placeholder="Tiempo" name="tiempo">
                                        <option>- Hace cuanto sucedió? -</option>
                                        <option>Más de 12m</option>
                                        <option>Entre 6 y 12m</option>
                                        <option>Entre 3 y 6m</option>
                                        <option>Menos de 3m</option>
                                        <option>Entre los últimos 15 días</option>
                                   </select>
                                   <select class="form-field animation a26" placeholder="Servicio" name="otro_servicio">
                                        <option>- Otro Servicio -</option>
                                        <option>Ninguno</option>
                                        <option>Atención Psicológica</option>
                                        <option>Atención Psiquiátrica</option>
                                        <option>Atención Médica</option>
                                        <option>Interrupción legal del embarazo</option>
                                   </select>
                                   <textarea class="form-field animation a27" placeholder="Detalles de los hechos" style="height:180px;" name="detalles"></textarea>
                                   <br>
                                   <hr style="animation-delay: 2.4s; border-top: 8px solid #bbb;border-radius: 5px;">
                                    <!--button class="form-field animation a28" class="Revisar">enviar correo</button-->

                             <!--div class="d-flex flex-row-reverse">
                                    <ul class="menu"  data-animation="bonus">
                                    <li><a class="oda" onclick="window.location='{{url("send-email") }}'">enviar correo</a></li>
                                    </ul>
                                </div-->  
                                
                                <input type="submit" class="btn btn-default" value="ENVIAR DENUNCIA" >
                                    <!-- <li><a class="oda" onclick="window.location='{{url("send-email") }}'"></a></li>-->
                                    </div>
                                </div>

                            </form>
                                <div class="right"></div>
                                </div>




                                </div>
                                </div>
                                </div>
                            
    </body>
</html>