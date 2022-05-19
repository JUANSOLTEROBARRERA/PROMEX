<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Denuncia;
use App\Models\Agresor;
use App\Models\Institucion;
use App\Models\Tipo_Violencia;

use Illuminate\Support\Facades\BD;
use Illuminate\Database\Seeder;
class DenunciaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instituciones = Institucion::all();
        $violencias = Tipo_Violencia::all();

        return view('denuncia.denuncia',compact('instituciones','violencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verifica que el flujo de los datos esten llenos 
       


        $agresor = new Agresor;
        $denuncia = new Denuncia;
        $id_tipo_violencia = 3;
        $tipo_violencia=$request->input('tipoviolencia');
       
        switch($tipo_violencia){
            case "Verbal o psicológica":
                $id_tipo_violencia = 1;
                break;
            case "Patrimonial":
                $id_tipo_violencia = 2;
                break;
            case "Física":
                $id_tipo_violencia = 3;
                break;
            case "Sexual":
                $id_tipo_violencia = 4;
                break;
        }
        //insert a la tabla denuncia
        $denuncia->id_tipo_violencia=$id_tipo_violencia;
        $denuncia->nombre_institucion=$request->input('nombre_institucion');//"nombre_institucion"
        $denuncia->lugar=$request->input('lugar');
        $denuncia->accion_tomada=$request->input('accion_tomada');
        $denuncia->respuesta_accion=$request->input('respuesta_accion');
        $denuncia->tiempo=$request->input('tiempo');
        $denuncia->otro_servicio=$request->input('otro_servicio');
        $denuncia->detalles=$request->input('detalles');
        $denuncia->correo=$request->input('correo');
        $denuncia->sexo_agredido=$request->input('sexo_agredido');
        $denuncia->nombre_agresor=$request->input('nombre_agresor');
        //==obtenemos la variable correo (que ingresara el usuario desde teclado en denuncia.blade.php)
        $receptor=$denuncia['correo'];
       
 //insert a la tabla del agresor   
 //antes de insertar en la tabla agresor debemos "preguntar" si el agresor existe o es nuevo
    //try{
       // $existe= BD::select('SELECT nombre_agresor FROM agresor WHERE nombre_agresor=$agresor');
      //  if($existe==NULL){

        

        $agresor = Agresor::updateOrCreate(
            ['nombre_agresor' => $request->input('nombre_agresor') ],
            ['relacion_agresor' => $request->input('relacion_agresor'),'sexo_agresor' => $request->input('sexo_agresor')]
        );
        print_r(" "); //dejen el print por fa, sino se pone sus moños (de por sí) y no quiere jalar
    /*  $agresor->nombre_agresor=$request->input('nombre_agresor');
        $agresor->relacion_agresor=$request->input('relacion_agresor');
        $agresor->sexo_agresor=$request->input('sexo_agresor'); 
    */
     //  $agresor->save();
   // }
        
       $denuncia->save();
  //  }catch(QueryException $e){

    //}

       
//Hacemos la funcion de envio del correo, mostrando la vista que ya creamos (TestEmail.blade.php)
        $details=[
            'title'=> 'PROMEX',
            'body'=> 'Tu incidente fue registrado correctamente en nuestra base de datos'
        ];
        Mail::to($receptor)->send(new TestMail($details));
      //  return "Su denuncia ha sido registrada con éxito, Revise la bandeja de entrada de su correo, enviamos un mensaje de confirmación";         
      //echo("Su denuncia ha sido registrada con éxito, Revise la bandeja de entrada de su correo, enviamos un mensaje de confirmación");
      //echo"<br><br>"; 
     // echo("<A HREF='/'style='text-align: center; margin-top: 10px; font-weight: normal;  font-size: 50px;color: RED;' > Clic auí para regresar </A>");
     echo("
     <!DOCTYPE html>
     <html>
         <head>
         
             <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
             <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
             <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js' integrity='sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB' crossorigin='anonymous'></script>
             <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
         </head>
     
     
         <body>
     
         <style>
         .Encabezado{ 
         background-color: rgb(47, 47, 47);
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.15), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
         }
         .button {
         background-color: #008F56; /* Green */
         border: none;
         color: white;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         align: center;
     }
         .logo{
         margin-top: 2px;
         margin-bottom: 10px;
         height: 55px;
         width: 110px;
         cursor: pointer;
         }
     
         .oda {
         margin: 10px;
         color: rgb(74, 133, 34);
           text-decoration: none;
         font: 15px sans-serif;
         cursor:pointer;
         }
     
         .oda:hover {
         text-decoration: none;
         color: rgb(74, 133, 34);
         }
         #Cuerpo{
         background-color: rgb(51, 51, 51);
         height: 200px;
         }
         #Cuerpo2{
         padding-top: 35px;
         background-color: rgb(95, 93, 96);
         height: 1200px;
         left: 50%;
         }
     
         .menu {
         display: flex;
         justify-content: center;
       }
       
       
       .menu a {
         position: relative;
         display: block;
         padding: 5px;
       }
       .menu li {
         margin-right: 20px;
         list-style-type:none;
         padding-top: 10px;
       }
     
     
       .menu a::before {
         content: '';
         position: absolute;
         bottom: 0;
         left: 0;
         width: 100%;
         height: 2px;
         background: linear-gradient(to right, rgb(242, 243, 211), rgb(216, 217, 184), rgb(195, 196, 165));
         z-index: 1;
         transform: scaleX(0);
         transform-origin: left;
         transition: transform 0.5s ease-in-out;
       }
       
       .menu a:hover::before {
         transform: scaleX(1);
       }
       .menu[data-animation='to-left'] a::before {
         transform-origin: right;
       }
       .menu[data-animation='center'] a::before {
         transform-origin: center;
       }
       .menu[data-animation='bonus'] a::before {
         transform-origin: right;
       }
       .menu[data-animation='bonus'] a:hover::before {
         transform-origin: left;
         transform: scaleX(1);
         transition-timing-function: cubic-bezier(0.2, 1, 0.82, 0.94);
       }
     
       .login-wrap{
         width:100%;
         margin:auto;
         left: 50%;
         max-width:525px;
         min-height:600px;
         position:relative;
         background:url(https://quierocuidarme.dkvsalud.es/sites/default/files/imagen/2018-08/ayuda_0.jpg) repeat center;
         box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
         background-size: cover;
     }
     .confirmacion-html{
         width:100%;
         height:100%;
         position:absolute;
         padding:90px 70px 50px 70px;
         background:rgba(63, 87, 62, 0.9);
     }
     .confirmacion-html .sign-in-htm,
     .confirmacion-html .sign-up-htm{
         top:0;
         left:0;
         right:0;
         bottom:0;
         position:absolute;
         transform:rotateY(180deg);
         backface-visibility:hidden;
         transition:all .4s linear;
     }
     .confirmacion-html .sign-in,
     .confirmacion-html .sign-up,
     .confirmacion-form .group .check{
         display:none;
     }
     .confirmacion-html .tab,
     .confirmacion-form .group .label,
     .confirmacion-form .group .button{
         text-transform:uppercase;
     }
     .confirmacion-html .tab{
         font-size:22px;
         margin-right:15px;
         padding-bottom:5px;
         margin:0 15px 10px 0;
         display:inline-block;
         border-bottom:2px solid transparent;
     }
     .confirmacion-html .sign-in:checked + .tab,
     .confirmacion-html .sign-up:checked + .tab{
         color:#fff;
         border-color:#88cca6;
     }
     
     
     .hr{
         text-align: center;
         height:2px;
         margin:60px 0 50px 0;
         background:rgba(255,255,255,.2);
     }
     .foot-lnk{
         text-align:center;
     }
         </style>
     
             <div class='.container-fluid'>
             <header class='Encabezado'>
                 <nav class='navbar navbar-expand-lg navbar-light'>
                     <div class='container-fluid'>
                         <img class='logo' src='../../../public/images/Logo.png' href='/' }}''>
     
                                 <div class='d-flex flex-row-reverse'>
                                     <ul class='menu'  data-animation='bonus'>
                                     <li><a class='oda' href='/'>HOME</a></li>
                                     </ul>
                                 </div>
                     </div>
                 </nav>
             </header>
             </div>
                                                 <div id='Cuerpo2'>
                                                 <div class='row justify-content-begin'>
                                                     <div class='col-sm-6'>
                                         <div class='row justify-content-begin'>
                                             <div class='col-sm-18'>
                                             <section class='vh-100'>
                                                 <div class='container py-5 h-100'>
                                                 <div class='login-wrap'>
                                                 <form action='/' method='POST'>
                                                                             <div class='confirmacion-html'> 
                                                                                 <h2 class='animation a1'>CONFIRMACIÓN</h2>
                                                                                 <a style='text-align: center; margin-top: 10px; font-weight: normal; font-size:50px; color: black;'>Su denuncia ha sido registrada con éxito.</a>
                                                                                 <h3 class='animation a1'>Revise la bandeja de entrada de su correo, enviamos un mensaje de confirmación.</h2>  
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
     ");
     

    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
