<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
        // llaves foraneas      
            $table->unsignedBigInteger('estados_id');  
            $table->foreign('estados_id')->references('id')->on('estados'); 

            $table->string('name');

            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            
            $table->string('clasificacion')->nullable(); 

            $table->string('empresa', 100)->nullable();

            $table->string('apellidos', 100)->nullable();

            $table->string('identificacion_fiscal',50)->nullable();

            $table->string('telefono',9)->nullable();

            $table->string('whatsapp',9)->nullable();

            $table->string('roles')->nullable();

            $table->boolean('administrador');

            $table->string('notas',500)->nullable();

            $table->string('avatar')->nullable();

            $table->string('pin_soporte')->nullable();

            $table->rememberToken();
            
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
        Schema::dropIfExists('users');
    }
}
