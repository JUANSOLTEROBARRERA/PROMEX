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
        $request->validate([
            'id_tipo_violencia'=>'required',
            'nombre_institucion'=>'required',
            'lugar'=>'required',
            'accion_tomada'=>'required',
            'respuesta_accion'=>'required',
            'tiempo'=>'required',
            'otro_servicio'=>'required',
            'detalles'=>'required',
            'correo'=>'required',
            'sexo_agredido'=>'required',
            'nombre_agresor'=>'required',
            'relacion_agresor'=>'required',
            'sexo_agresor'=>'required',
        ]);


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
         
        $agresor->nombre_agresor=$request->input('nombre_agresor');
        $agresor->relacion_agresor=$request->input('relacion_agresor');
        $agresor->sexo_agresor=$request->input('sexo_agresor');
        $agresor->save();
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
