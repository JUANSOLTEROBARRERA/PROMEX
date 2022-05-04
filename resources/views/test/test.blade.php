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
      <div class="col-sm-9">   


                        <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">¡BUSCA AYUDA! Esto no es tu culpa</th>
                        <th scope="col">Frecuente<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">No<br>3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">Me pegan (puñetes, patadas, etc.) </th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta1a" name="pregunta1">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta1b" name="pregunta1">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta1c" name="pregunta1">
                                        </div>
                        </td>
                        </tr>

                        <tr class="table-primary">
                        <th scope="row">2.- Te ha dicho que estás con alguien más, o que tus amigos quieren estar contigo?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta2a" name="pregunta2">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta2b" name="pregunta2">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta2c" name="pregunta2">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-secondary">
                        <th scope="row">3.- ¿Te dice que tiene otras mujeres y te compara con tus ex parejas?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta3a" name="pregunta3">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta3b" name="pregunta3">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta3c" name="pregunta3">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">4.- ¿Todo el tiempo quiere saber qué haces y con quién estas?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta4a" name="pregunta4">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta4b" name="pregunta4">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta4c" name="pregunta4">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-danger">
                        <th scope="row">5.- ¿Te critica, se burla de tu cuerpo y exagera de tus defectos en público o en privado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta5a" name="pregunta5">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta5b" name="pregunta5">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta5c" name="pregunta5">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-warning">
                        <th scope="row">6.- Cuando estás con tu pareja ¿sientes tensión y piensas que hagas lo que hagas se molestará?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta6a" name="pregunta6">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta6b" name="pregunta6">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta6c" name="pregunta6">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-info">
                        <th scope="row">7.-Para decidir lo que harán cuando salen ¿Ignora tu opinión?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta7a" name="pregunta7">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta7b" name="pregunta7">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta7c" name="pregunta7">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-light">
                        <th scope="row">8.- Cuando hablan ¿te sientes mal porque sólo te habla de sexo y te pregunta si tuviste relaciones sexuales con otras personas?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta8a" name="pregunta8">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta8b" name="pregunta8">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta8c" name="pregunta8">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-dark">
                        <th scope="row">9.- ¿Sientes que tu pareja constantemente te está controlando por amor?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta9a" name="pregunta9">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta9b" name="pregunta9">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta9c" name="pregunta9">
                                        </div>
                        </td>
                        </tr>
                    </tbody>
                    </table>



      </div>
      </div>
      </div>

                                    



                            
    </body>
</html>