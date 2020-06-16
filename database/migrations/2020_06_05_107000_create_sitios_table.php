<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitios', function (Blueprint $table) {
            $table->id();

            //añadimos a la tabla sitios la clave de la tabla  estados
            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados')->onDelete('cascade'); 

            $table->unsignedBigInteger('users_id');  
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade'); 

            $table->unsignedBigInteger('categorias_id');  
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade'); 
            
            $table->unsignedBigInteger('planes_id');  
            $table->foreign('planes_id')->references('id')->on('planes')->onDelete('cascade'); 
            
            
                        
            
            $table->string('nombreSitio')->nullable();
            
            $table->string('url_sitio')->nullable();
            
            $table->string('aplicacion_sitio')->nullable();


            
            $table->string('ip_FTP')->nullable();
            
            $table->string('user_FTP')->nullable();
            
            $table->string('pass_FTP')->nullable();

           
            $table->string('url_carpeta_FTP')->nullable();
           
            $table->string('nombre_bd')->nullable();
           
            $table->string('usuario_bd')->nullable();
           
            $table->string('pass_bd')->nullable();
           
            $table->string('port_conex')->nullable();
           
            $table->string('host_conex')->nullable();
           
            $table->string('socket_conex')->nullable();
           
            $table->date('hora_deseada')->nullable();
           
            $table->string('resumen')->nullable();
           
            $table->string('imagen')->nullable();
           
            $table->string('fecha-inicio')->nullable();
           
            $table->string('fecha-final')->nullable();
           
            $table->string('pais')->nullable();
           
            $table->string('mercado')->nullable();
           
            $table->string('DNS')->nullable();
           
            $table->boolean('SSL')->nullable();

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
        Schema::dropIfExists('sitios');
    }
}
