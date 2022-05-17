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
                                <li><a class="oda" onclick="window.location='{{url("denuncia") }}'">REALIZA TU DENUNCIA</a></li>
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

                <div class="container-fluid mt-5">
                        <div class="col-13">
                                <div class="row">
                                        <div class="col-18 grid-margin">

                                                <!-- <div style="text-align: right;">
                                                        <button type="button" class="btn btn-danger" style="background-color: #00695c;color:#ffffffff; ">Genera reporte</button>
                                                </div> -->

                                                <div class="card">
                                                        <div class="card-body" style="background-color: rgb(47, 47, 47);">
                                                                <h4 class="card-title" style="color: rgb(74, 133, 34);">Tabla de denuncias</h4>
                                                        <form action="{{route('Consultoria.index')}}" method="get">
                                                                <select class="form-field animation a3" name="sexo_agredido" id="sexo_agredido" placeholder="sexo_agredido">
                                                                        <option>- Sexo agredido -</option>
                                                                        <option>Hombre</option>
                                                                        <option>Mujer</option>
                                                                </select>
                                                                <select class="form-field animation a3" name="sexo_agresor" id="sexo_agresor" placeholder="sexo_agresor">
                                                                        <option>- Sexo agresor -</option>
                                                                        <option>Hombre</option>
                                                                        <option>Mujer</option>
                                                                </select>
                                                                <select class="form-field animation a3" name="tipo_violencia" id="tipo_violencia" placeholder="tipo_violencia">
                                                                        <option>- Tipo violencia -</option>
                                                                        @foreach ($violencias as $violencia)
                                                                                <option value="{{$violencia->nombre_violencia}}">{{$violencia->nombre_violencia}}</option-->
                                                                        @endforeach
                                                                </select>
                                                                <select class="form-field animation a3" name="institucion" id="institucion" placeholder="institucion">
                                                                        <option>- Institución -</option>
                                                                        @foreach ($instituciones as $institucion)
                                                                                <option value="{{$institucion->nombre_institucion}}">{{$institucion->nombre_institucion}}</option-->
                                                                        @endforeach
                                                                </select>
                                                                <select class="form-field animation a3" name="lugar" id="lugar" placeholder="lugar">
                                                                        <option>- Lugar -</option>
                                                                        <option>Dentro del aula</option>
                                                                        <option>En una oficina o privado</option>
                                                                        <option>Áreas comunes</option>
                                                                        <option>Baños</option>
                                                                        <option>Fuera del plantel realizando una actividad académica</option>
                                                                        <option>Fuera del plantel realizando otra actividad</option>
                                                                </select>
                                                                <br>
                                                                <div style="margin-top: 10px;">
                                                                <input type="submit" class="btn btn-sm" value="Consultar" style="background-color: #00695c; color: white;">
                                                        </form>
                                                                <input type="button" class="btn btn-sm" value="Generar reporte" style="background-color: #00695c; color: white;">
                                                                </div>
                                                                
                                                                <br>

                                                                <div class="table-responsive">
                                                                        <table class="table">
                                                                                <thead>
                                                                                        <tr style="background-color: #00695c; color:#FFFFFF;">
                                                                                                <th style=" text-align: center;"> Sexo agredido </th>
                                                                                                <th style=" text-align: center;"> Nombre agresor </th>
                                                                                                <th style=" text-align: center;"> Sexo agresor </th>
                                                                                                <th style=" text-align: center;"> Tipo Violencia </th>
                                                                                                <th style=" text-align: center;"> Institución </th>
                                                                                                <th style=" text-align: center;"> Lugar </th>
                                                                                                <th style=" text-align: center;"> Accion tomada </th>
                                                                                                <th style=" text-align: center;"> Respuesta acción </th>
                                                                                                <th style=" text-align: center;"> Temporalidad </th>
                                                                                                <th style=" text-align: center;"> ¿Necesitó otro servicio? </th>
                                                                                                <th style=" text-align: center;"> Detalles </th>
                                                                                                <th style=" text-align: center;"> Correo </th>

                                                                                        </tr>

                                                                                </thead>
                                                                                <tbody>
                                                                                        @foreach($denuncias as $denuncia)
                                                                                        <tr>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->sexo_agredido}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->nombre_agresor}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->sexo_agresor}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->nombre_violencia}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->nombre_institucion}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->lugar}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->accion_tomada}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->respuesta_accion}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->tiempo}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->otro_servicio}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->detalles}}</td>
                                                                                                <td style="background-color: #FFFFFF; color:#000000;">{{$denuncia->correo}}</td>
                                                                                        </tr>
                                                                                        @endforeach
                                                                                </tbody>
                                                                        </table>
                                                                </div>


                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
</body>

</html>