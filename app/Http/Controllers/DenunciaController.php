<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;//sxs
use App\Mail\MessageReceived;//
use App\Mail\TestMail;


use Illuminate\Http\Request;
use App\Models\Denuncia;
use App\Models\Agresor;
use Mailer\src\PHPMailer;
use Mailer\src\SMTP;
use Mailer\src\Exception;
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
        //
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
        $denuncia->id_tipo_violencia=$id_tipo_violencia;
        $denuncia->nombre_institucion=$request->input('nombre_institucion');//"nombre_institucion"
        $denuncia->lugar=$request->input('lugar');
        $denuncia->accion_tomada=$request->input('accion_tomada');
        $denuncia->respuesta_accion=$request->input('respuesta_accion');
        $denuncia->tiempo=$request->input('tiempo');
        $denuncia->otro_servicio=$request->input('otro_servicio');
        $denuncia->detalles=$request->input('detalles');
        $denuncia->correo=$request->input('correo');
       // print_r($denuncia['correo']);
        $receptor=$denuncia['correo'];//==obtenemos la variable correo (que ingresara el usuario desde teclado en denuncia.blade.php)
        $denuncia->sexo_agredido=$request->input('sexo_agredido');
        $denuncia->nombre_agresor=$request->input('nombre_agresor');
        $agresor->nombre_agresor=$request->input('nombre_agresor');
        $agresor->relacion_agresor=$request->input('relacion_agresor');
        $agresor->sexo_agresor=$request->input('sexo_agresor');
        $agresor->save();
        $denuncia->save();
       
//Hacemos la funcion de envio del correo, mostrando la vista que ya creamos (TestEmail.blade.php)
        $details=[
            'title'=> 'PROMEX',
            'body'=> 'Tu incidente fue registrado correctamente en nuestra base de datos'
        ];
        Mail::to($receptor)->send(new TestMail($details));
        return "Su denuncia ha sido registrada con éxito, Revise la bandeja de entrada de su correo, enviamos un mensaje de confirmación";         
   
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
