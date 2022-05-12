<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agresor extends Model
{
    //use HasFactory;
    protected $table="agresor";
    protected $primaryKey="id_agresor";
    protected $fillable = [
        'nombre_agresor', 'relacion_agresor', 'sexo_agresor'
    ];

    public $timestamps = false;
}
