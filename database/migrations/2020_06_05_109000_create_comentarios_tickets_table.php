<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_tickets', function (Blueprint $table) {
            $table->id();
            //añadimos a la tabla sitios la clave de la tabla  estados
             
            $table->unsignedBigInteger('tickets_id');  
            $table->foreign('tickets_id')->references('id')->on('tickets')->onDelete('cascade'); 


            $table->unsignedBigInteger('users_id');  
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade'); 
               
            $table->string('resumen', 200)->nullable();            
            
            $table->longText('texto')->nullable();

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
        Schema::dropIfExists('comentarios_tickets');
    }
}
