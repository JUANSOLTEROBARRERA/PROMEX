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
                                <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                                <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li>
                                
                                <li><a class="oda" onclick="window.location='{{url("denuncia") }}'">REALIZA TU DENUNCIA</a></li>
                                @auth    
                                <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">CONSULTA</a></li>
                                <li><form action="/post-logout" method="POST">
                                    @csrf
                                    <a class="oda" href="#" onclick="this.closest('form').submit()">CERRAR SESIÓN</a>
                                </form></li>
                                @else
                                <li><a class="oda" onclick="window.location='{{url("Login") }}'">INICIAR DE SESIÓN</a></li>
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
                        <th scope="col">Nunca<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">Muchas Veces<br>3</th>
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






                    <hr style="animation-delay: 2.4s; border-top: 11px solid #bbb;border-radius: 5px;">
                    



                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Patrimonial</th>
                        <th scope="col">Nunca<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">Muchas Veces<br>3</th>
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

                    <hr style="animation-delay: 2.4s; border-top: 11px solid #bbb;border-radius: 5px;">

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Física</th>
                        <th scope="col">Nunca<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">Muchas Veces<br>3</th>
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
                                        <input  type="radio" id="pregunta15c" name="pregunta15">
                                        </div>
                        </td>
                        </tr>

                        <tr class="table-primary">
                        <th scope="row">2.- ¿Te han pgolpeado mientras juegas?</th>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta16a" name="pregunta16">
                                        </div>
                         </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta16b" name="pregunta16">
                                        </div>
                        </td>
                        <td>
                                        <div>
                                        <input  type="radio" id="pregunta16c" name="pregunta16">
                                        </div>
                        </td>
                        </tr>
                        <tr class="table-secondary">
                        <th scope="row">3.- ¿Te han pellizcado?</th>
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
                        <tr class="table-success">
                        <th scope="row">4.- ¿Te han arañado?</th>
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
                        <tr class="table-danger">
                        <th scope="row">5.- ¿Te han empujado?</th>
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
                        <tr class="table-warning">
                        <th scope="row">6.- ¿Te han jaloneado?</th>
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
                        <tr class="table-info">
                        <th scope="row">7.-¿Te han forcejeado?</th>
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
                        <tr class="table-light">
                        <th scope="row">8.- ¿Se han dado una bofetada?</th>
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
                        <tr class="table-dark">
                        <th scope="row">9.- ¿Te han pateado?</th>
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
                        <tr class="table-primary">
                        <th scope="row">10.- ¿Te han encerrado?</th>
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
                        
                    </tbody>
                    </table>



                    <hr style="animation-delay: 2.4s; border-top: 11px solid #bbb;border-radius: 5px;">




                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Sexual</th>
                        <th scope="col">Nunca<br>1</th>
                        <th scope="col">A veces<br>2</th>
                        <th scope="col">Muchas Veces<br>3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1.- ¿Te han hecho piropos?</th>
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

                        <tr class="table-primary">
                        <th scope="row">2.- ¿Te han hecho miradas lascivas?</th>
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
                        <tr class="table-secondary">
                        <th scope="row">3.- ¿Te han condicionado a tener mejores calificaciones haciendo favores sexuales?</th>
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
                        <tr class="table-success">
                        <th scope="row">4.- ¿Te han tocado sin tu concentimiento?</th>
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
                        <tr class="table-danger">
                        <th scope="row">5.- ¿Se han enviado fotografías o vídeos íntimos sin haberlos solicitado?</th>
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
                        <tr class="table-warning">
                        <th scope="row">6.- ¿Te han solicitado fotografías o videos íntimos?</th>
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
                        <tr class="table-info">
                        <th scope="row">7.-¿Te han expuesto con contenido sexual sin tu concentimiento?</th>
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
                        <tr class="table-light">
                        <th scope="row">8.- ¿Te han tomado fotografías o videos íntimos sin tu concentimiento?</th>
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
                        <tr class="table-dark">
                        <th scope="row">9.- ¿Te han amenazado con difundir contigo íntimo tuyo?</th>
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
                        <tr class="table-primary">
                        <th scope="row">10.- ¿Te han forzado a tener relaciones sexuales?</th>
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
                        <tr class="table-secundary">
                        <th scope="row">11.- ¿Has sido víctima de violación?</th>
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
                                        <input type="radio" id="pregunta35c" name="pregunta35">
                                        </div>
                                    

                        </td>
                        </tr>
                    </tbody>
                    </table>
                            
                    <script lang = "JavaScript">
                        function verificar(){
                        var contador = 0;
                        var contador2 = 0;
                        var contador3 = 0;
                        var contador4 = 0;
                        var realizar = 35;
                        if(document.getElementById('pregunta1a').checked){
                            contador++;  
                        }
                        if(document.getElementById('pregunta1b').checked){
                            contador=contador + 2;
                            
                        }
                        if(document.getElementById('pregunta1c').checked){
                            contador= contador + 3;
                            
                        }
                        if(document.getElementById('pregunta1a').checked || document.getElementById('pregunta1b').checked || document.getElementById('pregunta1c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta2a').checked){
                            contador++;
                            
                        }
                        if(document.getElementById('pregunta2b').checked){
                            contador=contador + 2;
                            
                        }
                        if(document.getElementById('pregunta2c').checked){
                            contador= contador + 3;
                            
                        }
                        if(document.getElementById('pregunta2a').checked || document.getElementById('pregunta2b').checked || document.getElementById('pregunta2c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta3a').checked){
                            contador++;
                            
                        }
                        if(document.getElementById('pregunta3b').checked){
                            contador=contador + 2;
                            
                        }
                        if(document.getElementById('pregunta3c').checked){
                            contador=contador + 3;
                            
                        }

                        if(document.getElementById('pregunta3a').checked || document.getElementById('pregunta3b').checked || document.getElementById('pregunta3c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta4a').checked){
                            contador++;                           
                        }
                        if(document.getElementById('pregunta4b').checked){
                            contador=contador + 2;                         
                        }
                        if(document.getElementById('pregunta4c').checked){
                            contador=contador + 3;                          
                        }

                        if(document.getElementById('pregunta4a').checked || document.getElementById('pregunta4b').checked || document.getElementById('pregunta4c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta5a').checked){
                            contador++;                           
                        }
                        if(document.getElementById('pregunta5b').checked){
                            contador=contador + 2;                           
                        }
                        if(document.getElementById('pregunta5c').checked){
                            contador=contador + 3;
                            
                        }

                        if(document.getElementById('pregunta5a').checked || document.getElementById('pregunta5b').checked || document.getElementById('pregunta5c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta6a').checked){
                            contador++;                           
                        }
                        if(document.getElementById('pregunta6b').checked){
                            contador=contador + 2;                           
                        }
                        if(document.getElementById('pregunta6c').checked){
                            contador=contador + 3;                         
                        }

                        if(document.getElementById('pregunta6a').checked || document.getElementById('pregunta6b').checked || document.getElementById('pregunta6c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta7a').checked){
                            contador++;                        
                        }
                        if(document.getElementById('pregunta7b').checked){
                            contador=contador + 2;                           
                        }
                        if(document.getElementById('pregunta7c').checked){
                            contador=contador + 3;                           
                        }

                        if(document.getElementById('pregunta7a').checked || document.getElementById('pregunta7b').checked || document.getElementById('pregunta7c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta8a').checked){
                            contador++;                          
                        }
                        if(document.getElementById('pregunta8b').checked){
                            contador=contador + 2;                             
                        }
                        if(document.getElementById('pregunta8c').checked){
                            contador=contador + 3;                             
                        }

                        if(document.getElementById('pregunta8a').checked || document.getElementById('pregunta8b').checked || document.getElementById('pregunta8c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta9a').checked){
                            contador++;                           
                        }
                        if(document.getElementById('pregunta9b').checked){
                            contador=contador + 2;                            
                        }
                        if(document.getElementById('pregunta9c').checked){
                            contador=contador + 3;                            
                        }

                        if(document.getElementById('pregunta9a').checked || document.getElementById('pregunta9b').checked || document.getElementById('pregunta9c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta10a').checked){
                            contador++;                         
                        }
                        if(document.getElementById('pregunta10b').checked){
                            contador=contador + 2;                            
                        }
                        if(document.getElementById('pregunta10c').checked){
                            contador=contador + 3;                             
                        }

                        if(document.getElementById('pregunta10a').checked || document.getElementById('pregunta10b').checked || document.getElementById('pregunta10c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta11a').checked){
                            contador++;                           
                        }
                        if(document.getElementById('pregunta11b').checked){
                            contador=contador + 2;                            
                        }
                        if(document.getElementById('pregunta11c').checked){
                            contador=contador + 3;                           
                        }

                        if(document.getElementById('pregunta11a').checked || document.getElementById('pregunta11b').checked || document.getElementById('pregunta11c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta12a').checked){
                            contador++;                           
                        }
                        if(document.getElementById('pregunta12b').checked){
                            contador=contador + 2;                             
                        }
                        if(document.getElementById('pregunta12c').checked){
                            contador=contador + 3;                            
                        }

                        if(document.getElementById('pregunta12a').checked || document.getElementById('pregunta12b').checked || document.getElementById('pregunta12c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta13a').checked){
                            contador2++;                           
                        }
                        if(document.getElementById('pregunta13b').checked){
                            contador2=contador2 + 2;                            
                        }
                        if(document.getElementById('pregunta13c').checked){
                            contador2=contador2 + 3;                             
                        }

                        if(document.getElementById('pregunta13a').checked || document.getElementById('pregunta13b').checked || document.getElementById('pregunta13c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta14a').checked){
                            contador2++;                
                        }
                        if(document.getElementById('pregunta14b').checked){
                            contador2=contador2 + 2;                    
                        }
                        if(document.getElementById('pregunta14c').checked){
                            contador2=contador2 + 3;                   
                        }

                        if(document.getElementById('pregunta14a').checked || document.getElementById('pregunta14b').checked || document.getElementById('pregunta14c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta15a').checked){
                            contador3++;                       
                        }
                        if(document.getElementById('pregunta15b').checked){
                            contador3=contador3 + 2;                          
                        }
                        if(document.getElementById('pregunta15c').checked){
                            contador3=contador3 + 3;  
                            
                        }

                        if(document.getElementById('pregunta15a').checked || document.getElementById('pregunta15b').checked || document.getElementById('pregunta15c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta16a').checked){
                            contador3++;    
                        }
                        if(document.getElementById('pregunta16b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta16c').checked){
                            contador3=contador3 + 3;  
                            
                        }

                        if(document.getElementById('pregunta16a').checked || document.getElementById('pregunta16b').checked || document.getElementById('pregunta16c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta17a').checked){
                            contador3++;  
                        }
                        if(document.getElementById('pregunta17b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta17c').checked){
                            contador3=contador3 + 3;  
                        }

                        if(document.getElementById('pregunta17a').checked || document.getElementById('pregunta17b').checked || document.getElementById('pregunta17c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta18a').checked){
                            contador3++;  
                        }
                        if(document.getElementById('pregunta18b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta18c').checked){
                            contador3=contador3 + 3;  
                        }

                        if(document.getElementById('pregunta18a').checked || document.getElementById('pregunta18b').checked || document.getElementById('pregunta18c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta19a').checked){
                            contador3++;  
                        }
                        if(document.getElementById('pregunta19b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta19c').checked){
                            contador3=contador3 + 3;  
                        }

                        if(document.getElementById('pregunta19a').checked || document.getElementById('pregunta19b').checked || document.getElementById('pregunta19c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta20a').checked){
                            contador3++;  
                        }
                        if(document.getElementById('pregunta20b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta20c').checked){
                            contador3=contador3 + 3;  
                        }

                        if(document.getElementById('pregunta20a').checked || document.getElementById('pregunta20b').checked || document.getElementById('pregunta20c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta21a').checked){
                            contador3++;  
                        }
                        if(document.getElementById('pregunta21b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta21c').checked){
                            contador3=contador3 + 3;  
                        }

                        if(document.getElementById('pregunta21a').checked || document.getElementById('pregunta21b').checked || document.getElementById('pregunta21c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta22a').checked){
                            contador3++;  
                        }
                        if(document.getElementById('pregunta22b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta22c').checked){
                            contador3=contador3 + 3;  
                        }

                        if(document.getElementById('pregunta22a').checked || document.getElementById('pregunta22b').checked || document.getElementById('pregunta22c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta23a').checked){
                            contador3++;  
                        }
                        if(document.getElementById('pregunta23b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta23c').checked){
                            contador3=contador3 + 3;  
                        }

                        if(document.getElementById('pregunta23a').checked || document.getElementById('pregunta23b').checked || document.getElementById('pregunta23c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta24a').checked){
                            contador3++;  
                        }
                        if(document.getElementById('pregunta24b').checked){
                            contador3=contador3 + 2;  
                        }
                        if(document.getElementById('pregunta24c').checked){
                            contador3=contador3 + 3;  
                        }

                        if(document.getElementById('pregunta24a').checked || document.getElementById('pregunta24b').checked || document.getElementById('pregunta24c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta25a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta25b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta25c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta25a').checked || document.getElementById('pregunta25b').checked || document.getElementById('pregunta25c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta26a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta26b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta26c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta26a').checked || document.getElementById('pregunta26b').checked || document.getElementById('pregunta26c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta27a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta27b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta27c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta27a').checked || document.getElementById('pregunta27b').checked || document.getElementById('pregunta27c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta28a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta28b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta28c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta28a').checked || document.getElementById('pregunta28b').checked || document.getElementById('pregunta28c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta29a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta29b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta29c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta29a').checked || document.getElementById('pregunta29b').checked || document.getElementById('pregunta29c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta30a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta30b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta30c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta30a').checked || document.getElementById('pregunta30b').checked || document.getElementById('pregunta30c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta31a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta31b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta31c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta31a').checked || document.getElementById('pregunta31b').checked || document.getElementById('pregunta31c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta32a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta32b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta32c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta32a').checked || document.getElementById('pregunta32b').checked || document.getElementById('pregunta32c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta33a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta33b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta33c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta33a').checked || document.getElementById('pregunta33b').checked || document.getElementById('pregunta33c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta34a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta34b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta34c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta34a').checked || document.getElementById('pregunta34b').checked || document.getElementById('pregunta34c').checked){
                            realizar--;
                            
                        }

                        if(document.getElementById('pregunta35a').checked){
                            contador4++;  
                        }
                        if(document.getElementById('pregunta35b').checked){
                            contador4=contador4 + 2;  
                        }
                        if(document.getElementById('pregunta35c').checked){
                            contador4=contador4 + 3;  
                        }

                        if(document.getElementById('pregunta35a').checked || document.getElementById('pregunta35b').checked || document.getElementById('pregunta35c').checked){
                            realizar--;
                            
                        }


                        if(realizar==0){
                                if(contador>=0 && contador<=15)alert("TOTAL PUNTAJE: "+ contador+"\n NO SUFRES VIOLENCIA VERBAL O PSICOLÓGICA");
                                if(contador>=16 && contador<=36)alert("TOTAL PUNTAJE: "+ contador+"\n SUFRES VIOLENCIA VERBAL O PSICOLÓGICA REALIZA UNA DENUNCIA");

                                if(contador2>=0 && contador2<=2)alert("TOTAL PUNTAJE: "+ contador2+"\n NO SUFRES VIOLENCIA PATRIMONIAL");
                                if(contador2>=3 && contador2<=6)alert("TOTAL PUNTAJE: "+ contador2+"\n SUFRES VIOLENCIA PATRIMONIAL");

                                if(contador3>=0 && contador3<=16)alert("TOTAL PUNTAJE: "+ contador3+"\n NO SUFRES VIOLENCIA FÍSICA");
                                if(contador3>=17 && contador3<=30)alert("TOTAL PUNTAJE: "+ contador3+"\n SUFRES VIOLENCIA FÍSICA");

                                if(contador4>=0 && contador4<=17)alert("TOTAL PUNTAJE: "+ contador4+"\n NO SUFRES VIOLENCIA SEXUAL");
                                if(contador4>=18 && contador4<=33)alert("TOTAL PUNTAJE: "+ contador4+"\n SUFRES VIOLENCIA SEXUAL");
                        }else{
                            alert("FALTA RESPONDER: "+ realizar+" PREGUNTAS.");
                        }

                    }
                    </script>

                    
                    <button type="button" style="margin-left:50%; margin-bottom:50px; margin-top:50px" class="btn btn-success" onclick="verificar()" name = "boton">Enviar</button>
                        



      </div>
      </div>
      </div>

                                    



                            
    </body>
</html>