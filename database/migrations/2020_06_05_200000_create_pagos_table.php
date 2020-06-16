<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('sitios_id');  
            $table->foreign('sitios_id')->references('id')->on('sitios')->onDelete('cascade'); 

            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados')->onDelete('cascade');

            $table->unsignedBigInteger('facturas_id');  
            $table->foreign('facturas_id')->references('id')->on('facturas')->onDelete('cascade');

            $table->string('numeroPago')->nullable();
            
            $table->string('numeroFactura')->nullable();

            $table->string('factura')->nullable();

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
        Schema::dropIfExists('pagos');
    }
}
