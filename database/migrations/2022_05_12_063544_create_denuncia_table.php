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
        Schema::create('denuncia', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_denuncia');
            $table->bigInteger('id_tipo_violencia')->unsigned();
            $table->string('nombre_institucion');
            $table->string('lugar');
            $table->string('accion_tomada');
            $table->string('respuesta_accion');
            $table->string('tiempo');
            $table->string('otro_servicio');
            $table->string('detalles');
            $table->string('correo');
            $table->string('sexo_agredido');
            $table->string('nombre_agresor');

            $table->foreign('id_tipo_violencia')->references('id_tipo')->on('tipo_violencia')->onDelete("cascade");
            //$table->foreign('nombre_institucion')->references('nombre_institucion')->on('institucion')->onDelete("cascade");
            //$table->foreign('id_agresor')->references('id_agresor')->on('agresor')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncia');
    }
};
