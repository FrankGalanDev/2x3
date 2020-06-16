<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
        // claves foraneas
            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados'); 

            $table->unsignedBigInteger('users_id');  
            $table->foreign('users_id')->references('id')->on('users'); 

            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios'); 

            $table->string('nombreTarea')->nullable();

            $table->string('resumen')->nullable();

            $table->longText('descripcion')->nullable();
            
            $table->string('fecha')->nullable();
            
            $table->boolean('alarma')->nullable();
            

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
        Schema::dropIfExists('tasks');
    }
}
