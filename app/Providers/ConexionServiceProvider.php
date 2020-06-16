<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConexionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         //registramos la clase
        \App::bind('Conexion');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
