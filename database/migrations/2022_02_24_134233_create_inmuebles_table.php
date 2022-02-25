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
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();

            $table->string('image_path')->nullable();
            // $table->string('pais')->nullable();
            $table->string('departamento')->nullable();
            $table->string('municipio')->nullable();
            $table->string('barrio')->nullable();
            $table->string('zona')->nullable();
            $table->string('direccion')->nullable();
            $table->string('tipoinmueble')->nullable();
            $table->string('gestion')->nullable();
            $table->string('alcobas')->nullable();
            $table->string('banos')->nullable();
            $table->string('area')->nullable();
            $table->string('valor')->nullable();
            $table->string('descripcion', 200)->nullable();


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
        Schema::dropIfExists('inmuebles');
    }
};
