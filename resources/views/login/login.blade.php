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
                                <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li> -->
                                
                                    
                                    @auth    
                                    <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">CONSULTAC</a></li>
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



                                            <div id="Cuerpo2">
                                            <div class="row justify-content-begin">
                                                <div class="col-sm-6">
                            
                                
                                    <div class="row justify-content-begin">
                                        <div class="col-sm-18">
                                        <section class="vh-100">
                                            <div class="container py-5 h-100">
                                            <div class="login-wrap">
                                            
                                            <form action="/post-login" method="POST">
                                                @csrf
                                                                        <div class="login-html">
                                                                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sesión</label>
                                                                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                                                                            
                                                                            <div class="login-form">
                                                                                <div class="sign-in-htm">
                                                                                    <div class="group">
                                                                                        <label for="user" class="label">Usuario</label>
                                                                                        <input id="user" type="text" value="{{ old('email') }}" required autofocus class="input" name="email">
                                                                                        @error('email') {{ $message }} @enderror
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <label for="pass" class="label">Contraseña</label>
                                                                                        <input id="pass" type="password" required class="input" data-type="password" name="password">
                                                                                        @error('password') {{ $message }} @enderror
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <input id="check" type="checkbox" class="check" checked name="remember">
                                                                                        <label for="check"><span class="icon"></span> Permanecer conectado</label>
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <input type="submit" class="button" value="Ingresar"> 
                                                                                    </div>
                                                                            
                                                                                    <div class="hr"></div>
                                                                                    





                                             













                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                        
                                            </form>                             
                                        </div>
                                    </div>
                     </div>
                    </div>
                    </div>

                            

                            
    </body>
</html>