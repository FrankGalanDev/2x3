<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exportaciones', function (Blueprint $table) {
            $table->id();
            
            //añadimos a la tabla exportaciones la clave de la tabla  users
            $table->unsignedBigInteger('users_id');  
            $table->foreign('users_id')->references('id')->on('users'); 
           
            //añadimos a la tabla exportaciones la clave de la tabla  estados
            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados');
    
            //añadimos a la tabla exportaciones la clave de la tabla  proveedores
            $table->unsignedBigInteger('proveedores_id');  
            $table->foreign('proveedores_id')->references('id')->on('proveedores'); 

            //añadimos a la tabla exportaciones la clave de la tabla  sitios
            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios');         

            $table->string('nombre_archivo')->nullable();
            
            $table->string('tipo_archivo')->nullable();
            
            $table->string('url_archivo')->nullable();
            
            $table->integer('tamaño')->nullable();
            
            $table->string('hora_deseada')->nullable();

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
        Schema::dropIfExists('exportaciones');
    }
}
