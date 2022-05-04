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
                        <th scope="col">Verbal o Psicológica</th>
                        <th scope="col">Frecuente<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">No<br>3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1.- ¿Te han hecho bromas hirientes?</th>
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
                        <th scope="row">2.- ¿Te han puesto apodos?</th>
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
                        <th scope="row">3.- ¿Te han hecho engaños?</th>
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
                        <th scope="row">4.- ¿Te han ignorado?</th>
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
                        <th scope="row">5.- ¿Se han comportado de forma celosa contigo?</th>
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
                        <th scope="row">6.- ¿Te han culpado de algo que no hiciste?</th>
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
                        <th scope="row">7.-¿Te han excluído de un grupo de personas?</th>
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
                        <th scope="row">8.- ¿Se han burlado de ti?</th>
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
                        <th scope="row">9.- ¿Te han humillado en público?</th>
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
                        <tr class="table-primary">
                        <th scope="row">10.- ¿Te han intentado controlar o prohibir de algo?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta10a" name="pregunta10">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta10b" name="pregunta10">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta10c" name="pregunta10">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-secundary">
                        <th scope="row">11.- ¿Has recibido amenazas?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta11a" name="pregunta11">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta11b" name="pregunta11">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta11c" name="pregunta11">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">12.- ¿Has sido vícitima de manipulación?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta12a" name="pregunta12">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta12b" name="pregunta12">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta12c" name="pregunta12">
                                        </div>
                        </td>
                        </tr>
                    </tbody>
                    </table>






                    <hr style="animation-delay: 2.4s; border-top: 8px solid #bbb;border-radius: 5px;">
                    



                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Patrimonial</th>
                        <th scope="col">Frecuente<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">No<br>3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1.- ¿Te han destruído artículos personales?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta13a" name="pregunta13">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta13b" name="pregunta13">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta13c" name="pregunta13">
                                        </div>
                        </td>
                        </tr>

                        <tr class="table-primary">
                        <th scope="row">2.- ¿Te han escondido artículos personales?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta14a" name="pregunta14">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta14b" name="pregunta14">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta14c" name="pregunta14">
                                        </div>
                        </td>
                        </tr>
                        
                    </tbody>
                    </table>

                    <hr style="animation-delay: 2.4s; border-top: 8px solid #bbb;border-radius: 5px;">

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Física</th>
                        <th scope="col">Frecuente<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">No<br>3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1.- ¿Te han dado un golpe en la cabeza con la palma de la mano extendida?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta15a" name="pregunta15">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta15b" name="pregunta15">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta16c" name="pregunta16">
                                        </div>
                        </td>
                        </tr>

                        <tr class="table-primary">
                        <th scope="row">2.- ¿Te han pgolpeado mientras juegas?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta17a" name="pregunta17">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta17b" name="pregunta17">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta17c" name="pregunta17">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-secondary">
                        <th scope="row">3.- ¿Te han pellizcado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta18a" name="pregunta18">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta18b" name="pregunta18">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta18c" name="pregunta18">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">4.- ¿Te han arañado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta19a" name="pregunta19">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta19b" name="pregunta19">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta19c" name="pregunta19">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-danger">
                        <th scope="row">5.- ¿Te han empujado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta20a" name="pregunta20">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta20b" name="pregunta20">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta20c" name="pregunta20">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-warning">
                        <th scope="row">6.- ¿Te han jaloneado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta21a" name="pregunta21">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta21b" name="pregunta21">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta21c" name="pregunta21">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-info">
                        <th scope="row">7.-¿Te han forcejeado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta22a" name="pregunta22">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta22b" name="pregunta22">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta22c" name="pregunta22">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-light">
                        <th scope="row">8.- ¿Se han dado una bofetada?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta23a" name="pregunta23">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta23b" name="pregunta23">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta23c" name="pregunta23">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-dark">
                        <th scope="row">9.- ¿Te han pateado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta24a" name="pregunta24">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta24b" name="pregunta24">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta24c" name="pregunta24">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-primary">
                        <th scope="row">10.- ¿Te han encerrado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta25a" name="pregunta25">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta25b" name="pregunta25">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta25c" name="pregunta25">
                                        </div>
                        </td>
                        </tr>
                        
                    </tbody>
                    </table>



                    <hr style="animation-delay: 2.4s; border-top: 8px solid #bbb;border-radius: 5px;">




                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Sexual</th>
                        <th scope="col">Frecuente<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">No<br>3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1.- ¿Te han hecho piropos?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta26a" name="pregunta26">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta26b" name="pregunta26">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta26c" name="pregunta26">
                                        </div>
                        </td>
                        </tr>

                        <tr class="table-primary">
                        <th scope="row">2.- ¿Te han hecho miradas lascivas?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta27a" name="pregunta27">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta27b" name="pregunta27">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta27c" name="pregunta27">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-secondary">
                        <th scope="row">3.- ¿Te han condicionado a tener mejores calificaciones haciendo favores sexuales?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta28a" name="pregunta28">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta28b" name="pregunta28">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta28c" name="pregunta28">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">4.- ¿Te han tocado sin tu concentimiento?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta29a" name="pregunta29">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta29b" name="pregunta29">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta29c" name="pregunta29">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-danger">
                        <th scope="row">5.- ¿Se han enviado fotografías o vídeos íntimos sin haberlos solicitado?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta30a" name="pregunta30">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta30b" name="pregunta30">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta30c" name="pregunta30">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-warning">
                        <th scope="row">6.- ¿Te han solicitado fotografías o videos íntimos?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta31a" name="pregunta31">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta31b" name="pregunta31">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta31c" name="pregunta31">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-info">
                        <th scope="row">7.-¿Te han expuesto con contenido sexual sin tu concentimiento?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta32a" name="pregunta32">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta32b" name="pregunta32">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta32c" name="pregunta32">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-light">
                        <th scope="row">8.- ¿Te han tomado fotografías o videos íntimos sin tu concentimiento?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta33a" name="pregunta33">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta33b" name="pregunta33">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta33c" name="pregunta33">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-dark">
                        <th scope="row">9.- ¿Te han amenazado con difundir contigo íntimo tuyo?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta34a" name="pregunta34">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta34b" name="pregunta34">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta34c" name="pregunta34">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-primary">
                        <th scope="row">10.- ¿Te han forzado a tener relaciones sexuales?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta35a" name="pregunta35">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta35b" name="pregunta35">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta35c" name="pregunta35">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-secundary">
                        <th scope="row">11.- ¿Has sido víctima de violación?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta36a" name="pregunta36">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta36b" name="pregunta36">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta36c" name="pregunta36">
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