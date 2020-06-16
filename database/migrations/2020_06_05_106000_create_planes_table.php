<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            
        //añadimos a la tabla sitios la clave de la tabla  estados
            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados')->onDelete('cascade'); 
           
            
            $table->string('nombrePlan')->nullable(); 
            
            $table->longText('resumen')->nullable(); 
            
            $table->boolean('instalacion')->nullable();
            
            $table->boolean('blog')->nullable(); 
            
            $table->boolean('hosting')->nullable(); 
            
            $table->boolean('dominio')->nullable(); 
            
            $table->boolean('espacio_ilimitado')->nullable();
           
            $table->boolean('transferenc_ilim')->nullable(); 
            
            $table->boolean('cuentas_correo')->nullable(); 
            
            $table->boolean('agente')->nullable(); 
            
            $table->boolean('SSL')->nullable(); 
            
            $table->boolean('atenc_telefónica')->nullable(); 
            
            $table->boolean('proveedor')->nullable(); 
            
            $table->boolean('otros_proveedores')->nullable(); 
            
            $table->boolean('backup')->nullable(); 
            
            $table->boolean('estadística')->nullable(); 
            
            $table->boolean('protec_spam')->nullable(); 
            
            $table->boolean('restaurac_backup')->nullable(); 
            
            $table->boolean('SEO_basico')->nullable(); 
            
            $table->string('precio_mes')->nullable(); 
            

            $table->string('precio_semtre')->nullable(); 
            
            $table->string('precio_año')->nullable();
            
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
        Schema::dropIfExists('planes');
    }
}
