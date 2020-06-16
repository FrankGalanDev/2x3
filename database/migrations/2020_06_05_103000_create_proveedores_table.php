<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            
            //añadimos a la tabla proveedores la clave de la tabla  estados
            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados')->onDelete('cascade'); 

            
            $table->string('nombreProveedor');
            
            $table->string('url_proveed')->nullable();
            
            $table->string('telefono')->nullable();
            
            $table->string('facebook')->nullable();
            
            $table->string('direccion')->nullable();
            
            $table->string('wasap')->nullable();
            
            $table->string('twitter')->nullable();
            
            $table->string('usuario')->nullable();
            
            $table->string('contraseña')->nullable();
            
            $table->string('url_conex')->nullable();
            
            $table->string('script_conex')->nullable();
            
            $table->string('usuario_conex')->nullable();
            
            $table->string('password_conex')->nullable();
            
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
        Schema::dropIfExists('proveedores');
    }
}
