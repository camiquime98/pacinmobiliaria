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

            $table->string('folder')->nullable();
            // $table->string('pais')->nullable();
            $table->string('departamento')->nullable();
            $table->string('municipio')->nullable();
            $table->string('barrio')->nullable();
            $table->string('zona')->nullable();
            $table->string('direccion')->nullable();
            $table->string('estrato')->nullable();
            $table->string('tipoinmueble')->nullable();
            $table->string('gestion')->nullable();
            $table->string('alcobas')->nullable();
            $table->string('banos')->nullable();
            $table->string('area')->nullable();
            $table->string('valor')->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->string('nombrepro')->nullable();
            $table->string('apellidopro')->nullable();
            $table->string('cedulapro')->nullable();
            $table->string('direccionpro')->nullable();
            $table->string('departamentopro')->nullable();
            $table->string('municipiopro')->nullable();
            $table->string('celularpro')->nullable();
            $table->string('correopro')->nullable();



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
