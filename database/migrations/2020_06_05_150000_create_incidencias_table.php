<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios'); 

            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados'); 

            $table->string('nombreIncidencia')->nullable();
            
            $table->longText('descripcion')->nullable();
           
            $table->string('fecha_incidencia')->nullable();
            
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
        Schema::dropIfExists('incidencias');
    }
}
