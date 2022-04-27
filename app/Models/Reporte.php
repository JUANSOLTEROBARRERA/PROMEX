<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    //use HasFactory;

    protected $table="reporte";
    protected $primaryKey="idReporte";
    protected $fillable = [
        'nivel_educativo', 'institucion', 'carrera', 'tipo_violencia', 'quien_ejerce', 'sexo_agresor', 'lugar', 'accion_tomada', 'respuesta_accion', 'temporalidad', 'otro_servicio',
        'narracion', 'recibe_info', 'existen_mecanismos', 'resuelto', 'usuario'
    ];
}
