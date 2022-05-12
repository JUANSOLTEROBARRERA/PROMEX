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
        Schema::create('agresor', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_agresor');
            $table->string('nombre_agresor');
            $table->string('relacion_agresor');
            $table->string('sexo_agresor');
            $table->timestamps();
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
