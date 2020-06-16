<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            
            //añadimos a la tabla proveedores la clave de la tabla  sitios
            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios')->onDelete('cascade'); 
           
            //añadimos a la tabla proveedores la clave de la tabla  estados
            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados')->onDelete('cascade');

            //añadimos a la tabla proveedores la clave de la tabla  estados
            $table->unsignedBigInteger('users_id');  
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');  
            
           
            $table->string('asunto')->nullable(); 
           
            $table->longText('texto')->nullable(); 
           
            $table->string('asignado_a')->nullable();
           
            $table->string('pin_soporte')->nullable();

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
        Schema::dropIfExists('tickets');
    }
}
