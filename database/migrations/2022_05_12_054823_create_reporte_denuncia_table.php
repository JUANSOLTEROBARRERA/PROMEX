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
        Schema::create('reporte_denuncia', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->bigInteger('id_denuncia')->references('id_denuncia')->on('denuncia')->onDelete("cascade");
            $table->bigInteger('id_reporte')->references('id_reporte')->on('reporte')->onDelete("cascade");
            
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
