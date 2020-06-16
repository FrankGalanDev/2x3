<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Console\Command;
use Illuminate\Auth\Middleware\Admin;
use App\DB;
use App\Exportacione;
use App\Importacione;
use App\Proveedore;
use App\Estado;
use App\User;
use App\Sitio;
use App\Conexion;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front_office.inicio');
}); 
/*
Route::get('/login', function () {
    return view('welcome');
});*/


Route::get('/base', function(){
    return view ('layouts.escritorio_base');
});

 


Route::get('/base_usuario', function(){
    return view ('layouts.escritorio_base_individual');
});



/*
Route::get('/inicio', function () {
    return view('front_office.inicio');
});

Route::get('/paquetes', function () {
    return view('front_office.paquetes');
});

Route::get('servicios', function () {
    return view('front_office.servicios');
});

Route::get('/tienda', function () {
    return view('front_office.detalles-tecnologia');
});*/

Route::get('inicio', 'FrontofficeController@index')->name('inicio');

Route::get('paquetes', 'FrontofficeController@paquetes')->name('paquetes');

Route::get('servicios', 'FrontofficeController@servicios')->name('servicios');

Route::get('tecnologia', 'FrontofficeController@tecnologia')->name('tecnología');

Route::get('sexualidad', 'FrontofficeController@sexualidad')->name('sexualidad');

Route::get('moda', 'FrontofficeController@moda')->name('moda');

Route::get('alimentacion', 'FrontofficeController@alimentacion')->name('alimentacion');

Route::get('mascotas', 'FrontofficeController@mascotas')->name('mascotas');

Route::get('salud', 'FrontofficeController@salud')->name('salud');

Route::get('negocios', 'FrontofficeController@negocios')->name('negocios');

Route::get('creativos', 'FrontofficeController@creativos')->name('creativos');

Route::get('blog', 'FrontofficeController@blog_personal')->name('blog');

Route::get('contacto', 'FrontofficeController@contacto')->name('contacto');

Route::get('soporte', 'FrontofficeController@soporte')->name('soporte');

Route::get('faq', 'FrontofficeController@faq')->name('faq');

Route::get('condiciones', 'FrontofficeController@condiciones')->name('condiciones');

Route::get('cookies', 'FrontofficeController@cookies')->name('cookies');

Route::get('legalidad', 'FrontofficeController@legalidad')->name('legalidad');

Route::get('proteccion', 'FrontofficeController@proteccion')->name('proteccion');

Route::get('alquiler', 'FrontofficeController@alquiler')->name('alquiler');

Route::get('ecommerce', 'FrontofficeController@ecommerce')->name('ecommerce');

Route::get('desarrollo', 'FrontofficeController@desarrollo')->name('desarrollo');

Route::get('login', 'FrontofficeController@login')->name('login');






 

/* Route::get('/users', function(){
	return view ('listados.users');
}); */

//rutas de pruebas





/*Auth::routes(
    [ 


        Route::get('/home', 'HomeController@index')->name('home'),

        Route::get('mail/send', 'MailController@send'),

        Route::resource('/importaciones', 'ImportacioneController'),

        Route::resource('/users', 'UserController'),

        Route::resource('/exportaciones', 'ExportacioneController'),

        Route::resource('/proveedores', 'ProveedoreController'),

        Route::resource('/estados', 'EstadoController'),

        Route::resource('/roles', 'RoleController'),

        Route::resource('/sitios', 'SitioController'),



        Route::get('/home', function()
            {
        	            
                $sitios = Sitio::all()->count();

                $exportaciones = Exportacione::all()->count();
               
                $importaciones = Importacione::all()->count();
              
                $proveedores = Proveedore::all()->count();
               
                $users = User::all()->count();
        	    
                return view('layouts.escritorio', compact('clientes', 'sitios','exportaciones','importaciones','proveedores', 'users' ));
            }  
    )
    ]
);
*/
Auth::routes();
    
Route::group(
    ['middleware' => 'admin'], function(){


    /*    Route::get('conectando', function()
        {
            if(class_exists('App\Personalizado\Conexion'))
            {
               dd('hallada'); 
            }
            else
            {echo ' no hallada';}
        });*/
   



        Route::get('usuario', 'HomeController@index')->name('usuario')->middleware('admin') ;

        Route::get('admin', 'HomeController@admin')->name('admin')->middleware('admin') ;

     //   Route::get('mail/send', 'MailController@send');

        Route::resource('categorias', 'CategoriaController');

        Route::resource('comentarios', 'ComentariosTicketController');

        Route::resource('estados', 'EstadoController');

        Route::resource('exportaciones', 'ExportacioneController');

        Route::resource('importaciones', 'ImportacioneController');

        Route::resource('pagos', 'PagoController');

        Route::resource('planes', 'PlaneController');

        Route::resource('proveedores', 'ProveedoreController');

        Route::resource('sitios', 'SitioController');

        Route::resource('tickets', 'TicketController');

        Route::resource('tasks', 'TaskController');

        Route::resource('users', 'UserController');

        Route::resource('incidencias', 'IncidenciaController');

        Route::resource('contratos', 'ContratoController');

        Route::resource('facturas', 'FacturaController');

        Route::get('graficos', 'GraficosController@index');

        Route::get('clientes', 'UserController@clientes')->name('clientes');

        Route::get('clientes/{id}', function($id)

           {
                $users = User::with('role','estado');
                $user = $users->find($id);
                return response($user);
            })->name('ver_cliente');

         

        Route::get('formularios', function(){
        return view ('tools.formularios');
        });


        Route::get('downloadPDF/{id}', 'FacturaController@convertir_pdf')->name('descargarPDF'); 
  });
    