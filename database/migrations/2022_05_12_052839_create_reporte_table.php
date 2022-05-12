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
        //
        Schema::create('reporte', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_reporte');
            $table->Integer('id_usuario')->references('id')->on('users')->onDelete("cascade");
            $table->date('fecha_reporte');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
