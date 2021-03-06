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
                                <!-- <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li>
                                
                                <li><a class="oda" onclick="window.location='{{url("denuncia") }}'">REALIZA TU DENUNCIA</a></li> -->
                                @auth    
                                <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">CONSULTA</a></li>
                                <li><form action="/post-logout" method="POST">
                                    @csrf
                                    <a class="oda" href="#" onclick="this.closest('form').submit()">CERRAR SESI??N</a>
                                </form></li>
                                @else
                                <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("denuncia") }}'">REALIZA TU DENUNCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("Login") }}'">INICIAR SESI??N</a></li>
                                @endauth
                                </ul>
                            </div>

                                </div>
                        </nav>

                </header>
        </div>
        <div>

                <div class="container-fluid mt-4">
                        <div class="col-13">
                                <div class="row">
                                        <div class="col-18 grid-margin" >

                                                <!-- <div style="text-align: right;">
                                                        <button type="button" class="btn btn-danger" style="background-color: #00695c;color:#ffffffff; ">Genera reporte</button>
                                                </div> -->
                                                <form action="{{route('Consultoria.index')}}" method="get">
                                                                @csrf
                                                <div class="card" style="background-color: rgb(47, 47, 47); border-radius: 25px;">
                                                        <div class="card-body">
                                                                <!-- style="background-color: rgb(47, 47, 47);" -->
                                                                <h2 class="card-title" style="color: rgb(74, 133, 34);">Tabla de denuncias</h2>
                                                                <select class="form-field animation a3 form-select-sm" name="sexo_agredido" id="sexo_agredido" placeholder="sexo_agredido">
                                                                        <option>- Sexo agredido -</option>
                                                                        <option <?php if($combos["agredido"] == "Hombre") echo "selected='selected'";?>>Hombre</option>
                                                                        <option <?php if($combos["agredido"] == "Mujer") echo "selected='selected'";?>>Mujer</option>
                                                                </select>
                                                                <select class="form-field animation a3 form-select-sm" name="sexo_agresor" id="sexo_agresor" placeholder="sexo_agresor">
                                                                        <option>- Sexo agresor -</option>
                                                                        <option <?php if($combos["agresor"] == "Hombre") echo "selected='selected'";?>>Hombre</option>
                                                                        <option <?php if($combos["agresor"] == "Mujer") echo "selected='selected'";?>>Mujer</option>
                                                                </select>
                                                                <select class="form-field animation a3 form-select-sm" name="tipo_violencia" id="tipo_violencia" placeholder="tipo_violencia">
                                                                        <option>- Tipo violencia -</option>
                                                                        @foreach ($violencias as $violencia)
                                                                                <option value="{{$violencia->nombre_violencia}}" <?php if($combos["violencia"] == $violencia->nombre_violencia) echo "selected='selected'";?>>{{$violencia->nombre_violencia}}</option-->
                                                                        @endforeach
                                                                </select>
                                                                <select class="form-field animation a3 form-select-sm" name="institucion" id="institucion" placeholder="institucion">
                                                                        <option>- Instituci??n -</option>
                                                                        @foreach ($instituciones as $institucion)
                                                                        <option value="{{$institucion->nombre_institucion}}" <?php if($combos["institucion"] == $institucion->nombre_institucion) echo "selected='selected'";?>>{{$institucion->nombre_institucion}}</option-->      
                                                                        @endforeach
                                                                </select>
                                                                <select class="form-field animation a3 form-select-sm" name="lugar" id="lugar" placeholder="lugar">
                                                                        <option>- Lugar -</option>
                                                                        <option <?php if($combos["lugar"] == "Dentro del aula") echo "selected='selected'";?>>Dentro del aula</option>
                                                                        <option <?php if($combos["lugar"] == "En una oficina o privado") echo "selected='selected'";?>>En una oficina o privado</option>
                                                                        <option <?php if($combos["lugar"] == "??reas comunes") echo "selected='selected'";?>>??reas comunes</option>
                                                                        <option <?php if($combos["lugar"] == "Ba??os") echo "selected='selected'";?>>Ba??os</option>
                                                                        <option <?php if($combos["lugar"] == "Fuera del plantel realizando una actividad acad??mica") echo "selected='selected'";?>>Fuera del plantel realizando una actividad acad??mica</option>
                                                                        <option <?php if($combos["lugar"] == "Fuera del plantel realizando otra actividad") echo "selected='selected'";?>>Fuera del plantel realizando otra actividad</option>
                                                                </select>
                                                                <br>
                                                                <hr style="border: 1px solid white;"/>
                                                                <div style="margin-top: 10px;">
                                                                <input type="submit" class="btn btn-sm" value="Consultar" name="consultar" style="background-color: #4A8522; color: white;">
                                                                <input type="submit" class="btn btn-sm" value="Generar Reporte" name="generar" style="background-color: #4A8522; color: white;">
                                                        </form>
                                                        <hr style="border: 1px solid white;"/>        
                                                        </div>
                                                                <br>
                                                                <div class="table-responsive" style="border-radius: 15px;">
                                                                        <table class="table table-hover">
                                                                                <thead>
                                                                                        <tr style="background-color: rgb(0,143,86);">
                                                                                                <th style=" text-align: center;"> Sexo agredido </th>
                                                                                                <th style=" text-align: center;"> Nombre agresor </th>
                                                                                                <th style=" text-align: center;"> Sexo agresor </th>
                                                                                                <th style=" text-align: center;"> Tipo Violencia </th>
                                                                                                <th style=" text-align: center;"> Instituci??n </th>
                                                                                                <th style=" text-align: center;"> Lugar </th>
                                                                                                <th style=" text-align: center;"> Accion tomada </th>
                                                                                                <th style=" text-align: center;"> Respuesta acci??n </th>
                                                                                                <th style=" text-align: center;"> Temporalidad </th>
                                                                                                <th style=" text-align: center;"> ??Necesit?? otro servicio? </th>
                                                                                                <th style=" text-align: center;"> Detalles </th>
                                                                                                <th style=" text-align: center;"> Correo </th>

                                                                                        </tr>

                                                                                </thead>
                                                                                <tbody>
                                                                                        @foreach($denuncias as $denuncia)
                                                                                        <tr style="background-color: rgb(236, 240, 241 );">
                                                                                                <td >{{$denuncia->sexo_agredido}}</td>
                                                                                                <td >{{$denuncia->nombre_agresor}}</td>
                                                                                                <td >{{$denuncia->sexo_agresor}}</td>
                                                                                                <td >{{$denuncia->nombre_violencia}}</td>
                                                                                                <td >{{$denuncia->nombre_institucion}}</td>
                                                                                                <td >{{$denuncia->lugar}}</td>
                                                                                                <td >{{$denuncia->accion_tomada}}</td>
                                                                                                <td >{{$denuncia->respuesta_accion}}</td>
                                                                                                <td >{{$denuncia->tiempo}}</td>
                                                                                                <td >{{$denuncia->otro_servicio}}</td>
                                                                                                <td >{{$denuncia->detalles}}</td>
                                                                                                <td >{{$denuncia->correo}}</td>
                                                                                        </tr>
                                                                                        @endforeach
                                                                                        </tbody>
                                                                        </table>
                                                                        <table style="width: 100%;">
                                                                                <tr style="background-color: rgb(0,143,86); font-weight: bold;">
                                                                                        <td >Total de denuncias con estos parametros </td>
                                                                                        <td style="text-align: center;">{{$denuncias_cuenta}}</td>
                                                                                </tr>
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