<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte', function (Blueprint $table) {
            $table->id();
            $table->string('nivel_educativo');
            $table->string('institucion');
            $table->string('carrera');
            $table->string('tipo_violencia');
            $table->string('quien_ejerce');
            $table->string('sexo_agresor');
            $table->string('lugar');
            $table->string('accion_tomada');
            $table->string('respuesta_accion');
            $table->string('temporalidad');
            $table->string('otro_servicio');
            $table->longText('narracion');
            $table->string('recibe_info');
            $table->string('existen_mecanismos');
            $table->mediumText('correo');
            $table->boolean('resuelto');
            $table->string('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte');
    }
};
