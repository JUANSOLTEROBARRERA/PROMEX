<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncia;
use App\Models\Agresor;

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
        $denuncia->nombre_institucion=$request->input('nombre_institucion');
        $denuncia->lugar=$request->input('lugar');
        $denuncia->accion_tomada=$request->input('accion_tomada');
        $denuncia->respuesta_accion=$request->input('respuesta_accion');
        $denuncia->tiempo=$request->input('tiempo');
        $denuncia->otro_servicio=$request->input('otro_servicio');
        $denuncia->detalles=$request->input('detalles');
        $denuncia->correo=$request->input('correo');
        $denuncia->sexo_agredido=$request->input('sexo_agredido');
        $denuncia->nombre_agresor=$request->input('nombre_agresor');

        $agresor->nombre_agresor=$request->input('nombre_agresor');
        $agresor->relacion_agresor=$request->input('relacion_agresor');
        $agresor->sexo_agresor=$request->input('sexo_agresor');
        $agresor->save();
        $denuncia->save();
        echo '<script>alert("Su denuncia ha sido registrada con éxito, en breve le llegará un correo con la información pertinente.")</script>';
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
