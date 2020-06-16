<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('planes_id');  
            $table->foreign('planes_id')->references('id')->on('planes');

            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados');
            
            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios');

            $table->string('nombreContrato')->nullable();
            
            $table->longText('descripcionContrato')->nullable();
            
            $table->string('duracion')->nullable();
           
            $table->string('fechaContrato')->nullable();
           
            $table->string('fechasPago')->nullable();
           
            $table->string('periodosPago')->nullable();
           
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
        Schema::dropIfExists('contratos');
    }
}
