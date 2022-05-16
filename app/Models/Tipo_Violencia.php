<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Violencia extends Model
{
    //use HasFactory;
    protected $table="tipo_violencia";
    protected $primaryKey="id_tipo";
    protected $fillable = [
        'nombre_violencia'
    ];

    public $timestamps = false;
}
