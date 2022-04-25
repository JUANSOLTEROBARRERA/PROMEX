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
                                    <li><a class="oda" onclick="window.location='{{url("Consultoria") }}'">CONSULTORÍA</a></li>
                                    <li><a class="oda" onclick="window.location='{{url("Test") }}'">TEST DE VIOLENCIA</a></li>
                                    <li><a class="oda" onclick="window.location='{{url("TiposViolencia") }}'">TIPOS DE VIOLENCIA</a></li>
                                    <li><a class="oda" onclick="window.location='{{url("Denuncia") }}'">REALIZA TU DENUNCIA</a></li>
                                    <li><a class="oda" onclick="window.location='{{url("login") }}'">INICIO DE SESIÓN</a></li>
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


                                            
                                                                        <div class="login-html">
                                                                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                                                                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                                                                            <div class="login-form">
                                                                                <div class="sign-in-htm">
                                                                                    <div class="group">
                                                                                        <label for="user" class="label">Username</label>
                                                                                        <input id="user" type="text" class="input">
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <label for="pass" class="label">Password</label>
                                                                                        <input id="pass" type="password" class="input" data-type="password">
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <input id="check" type="checkbox" class="check" checked>
                                                                                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <input type="submit" class="button" value="Sign In">
                                                                                    </div>
                                                                                    <div class="hr"></div>
                                                                                    <div class="foot-lnk">
                                                                                        <a href="#forgot">Forgot Password?</a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sign-up-htm">
                                                                                    <div class="group">
                                                                                        <label for="user" class="label">Username</label>
                                                                                        <input id="user" type="text" class="input">
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <label for="pass" class="label">Password</label>
                                                                                        <input id="pass" type="password" class="input" data-type="password">
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <label for="pass" class="label">Repeat Password</label>
                                                                                        <input id="pass" type="password" class="input" data-type="password">
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <label for="pass" class="label">Email Address</label>
                                                                                        <input id="pass" type="text" class="input">
                                                                                    </div>
                                                                                    <div class="group">
                                                                                        <input type="submit" class="button" value="Sign Up">
                                                                                    </div>
                                                                                    <div class="hr"></div>
                                                                                    <div class="foot-lnk">
                                                                                        <label for="tab-1">Already Member?</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        
                                            
                                        </div>
                                    </div>
                     </div>
                    </div>
                    </div>

                            

                            
    </body>
</html>