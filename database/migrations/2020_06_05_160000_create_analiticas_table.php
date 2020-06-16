<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnaliticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analiticas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios')->onDelete('cascade'); 

            $table->string('fecha_visita')->nullable();

            $table->string('pais')->nullable();

            $table->string('ip')->nullable();

            $table->string('dispositivo')->nullable();

            $table->string('host')->nullable();
            
            $table->string('navegador')->nullable();
            
            $table->string('ciudad')->nullable();
            
            $table->string('cp')->nullable();
            
            $table->string('latitud')->nullable();
            
            $table->string('longitud')->nullable();
            
            $table->string('time')->nullable();
            
            $table->string('pagina')->nullable();
            
            $table->string('type')->nullable();

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
        Schema::dropIfExists('analiticas');
    }
}
