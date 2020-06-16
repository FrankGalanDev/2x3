<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasMensualesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas_mensuales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios');

            $table->unsignedBigInteger('analiticas_id');  
            $table->foreign('analiticas_id')->references('id')->on('analiticas');  

            $table->string('mes')->nullable();

            $table->string('total_paginas')->nullable();

            $table->string('total_paises')->nullable();

            $table->string('total_visitas')->nullable();
            
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
        Schema::dropIfExists('visitas_mensuales');
    }
}
