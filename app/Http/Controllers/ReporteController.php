<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institucion;
use App\Models\Tipo_Violencia;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $instituciones = Institucion::all();
        $violencias = Tipo_Violencia::all();
        $sexo_agredido=trim($request->get('sexo_agredido'));
        $institucion=trim($request->get('institucion'));
        $lugar=trim($request->get('lugar'));
        $sexo_agresor=trim($request->get('sexo_agresor'));
        $tipo_violencia=trim($request->get('tipo_violencia'));
        $guion = "-";
        
        //Select base sin ningún where
        $denuncias=DB::table('denuncia')
                        ->join('agresor','denuncia.nombre_agresor','=','agresor.nombre_agresor')
                        ->join('tipo_violencia','denuncia.id_tipo_violencia','=','tipo_violencia.id_tipo')
                        ->select('denuncia.sexo_agredido','denuncia.nombre_agresor','agresor.sexo_agresor','tipo_violencia.nombre_violencia','denuncia.nombre_institucion','denuncia.lugar','denuncia.accion_tomada','denuncia.respuesta_accion','denuncia.tiempo','denuncia.otro_servicio','denuncia.detalles','denuncia.correo');

        // Revisar si la variable contiene guion (No seleccionó opción)
        if(strpos($sexo_agredido, $guion) !== false){//En caso de encontrarlo no hacer nada
        }else{
            //Si no hay guion (opción no seleccionada) agregar el where
            $denuncias=$denuncias->where('denuncia.sexo_agredido','=',$sexo_agredido);
        }
        if(strpos($institucion, $guion) !== false){}else{
            $denuncias=$denuncias->where('denuncia.nombre_institucion','=',$institucion);
        }
        if(strpos($lugar, $guion) !== false){}else{
            $denuncias=$denuncias->where('denuncia.lugar','=',$lugar);
        }
        if(strpos($sexo_agresor, $guion) !== false){}else{
            $denuncias=$denuncias->where('agresor.sexo_agresor','=',$sexo_agresor);
        }
        if(strpos($tipo_violencia, $guion) !== false){}else{
            $denuncias=$denuncias->where('tipo_violencia.nombre_violencia','=',$tipo_violencia);
        }

        //Se hace el get para obtener todos los registros que se buscaban
        $denuncias=$denuncias->get();
        return view('consultoria.consultoria',compact('instituciones','violencias','denuncias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
