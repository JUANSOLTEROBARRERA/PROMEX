<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //use HasFactory;
    protected $table="institucion";
    protected $fillable = [
        'nombre_institucion', 'nivel'
    ];

    public $timestamps = false;
}