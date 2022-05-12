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
            $table->string('nombre_agresor')->primary();
            $table->string('relacion_agresor');
            $table->string('sexo_agresor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agresor');
    }
};
