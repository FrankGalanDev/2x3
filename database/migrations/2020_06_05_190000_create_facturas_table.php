<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contratos_id');  
            $table->foreign('contratos_id')->references('id')->on('contratos');

            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados');

            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios');

            $table->unsignedBigInteger('users_id');  
            $table->foreign('users_id')->references('id')->on('users');

            $table->string('nombreFactura')->nullable();
            
            $table->longText('numeroFactura')->nullable();
            
            $table->string('periodo')->nullable();
            
            $table->integer('importe')->nullable();
            
            $table->integer('iva')->nullable();
            
            $table->string('fechaContrato')->nullable();

            $table->string('datosEmpresa')->nullable();
            
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
        Schema::dropIfExists('facturas');
    }
}
