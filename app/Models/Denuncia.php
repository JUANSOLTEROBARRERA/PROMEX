<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    //use HasFactory;
    protected $table="denuncia";
    protected $primaryKey="id_denuncia";
    protected $fillable = [
        'id_tipo_violencia', 'nombre_institucion', 'lugar', 'accion_tomada', 'respuesta_accion', 'tiempo', 'otro_servicio', 'detalles', 'correo', 'sexo_agredido', 'nombre_agresor'
    ];

    public $timestamps = false;
}
