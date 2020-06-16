<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Exportar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exportar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exportar a la bd y actualizar columna cantidad';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    { 
//-----------INICIO SECCION  DECLARACION VARIABLES---------------
       
        $archivos =  \Storage::disk('listos')->files(); 
        $ultimo =  end($archivos);
        $contenido_Exp = \Storage::disk('listos')->get($ultimo);
             
        $contenido_a_exportar = json_decode($contenido_Exp);
          //TEST
          //dd($contenido_a_exportar[2] );
           
        //tomamos el tamaño del archivo
        $tamaño =count(($contenido_a_exportar));
          //TEST
          //dd($tamaño);
           
        //declaramos los arrays de los campos
        $ean=[];
        $stock_disponible=[];  

        // extraemos los campos del array y creamos un nuevo array con los valores que exportaremos solamente
        for ($i=0; $i<$tamaño; $i++)
        {
                
            $codigo[] = $contenido_a_exportar[$i]->codigo;
            $familia[] = $contenido_a_exportar[$i]->familia;
            $subfamilia[] = $contenido_a_exportar[$i]->subfamilia; 
            $subfamilia2[] = $contenido_a_exportar[$i]->subfamilia2; 
            $subfamilia3[] = $contenido_a_exportar[$i]->subfamilia3; 
            $subfamilia4[] = $contenido_a_exportar[$i]->subfamilia4; 
            $ean[] = $contenido_a_exportar[$i]->ean;
            $talla[] = $contenido_a_exportar[$i]->talla; 
            $descripcion[] = $contenido_a_exportar[$i]->descripcion;
            $descripcionori[] = $contenido_a_exportar[$i]->descripcionori; 
            $precio_recomendado[] = $contenido_a_exportar[$i]->precio_recomendado; 
            $iva[] = $contenido_a_exportar[$i]->iva; 
            // $explicacion[] = $contenido_a_exportar[$i]->explicacion; 
            $explicacion_texto[] = $contenido_a_exportar[$i]->explicacion_texto; 
            $stock_disponible[] = $contenido_a_exportar[$i]->stock_disponible;
            $fabricante[] = $contenido_a_exportar[$i]->fabricante; 
            $imagen_bu[] = $contenido_a_exportar[$i]->imagen_bu; 

            // creando variable con array de todos los campos
            $campos[]= array(
                "codigo" =>$contenido_a_exportar[$i]->codigo, //reference
                "familia" =>$contenido_a_exportar[$i]->familia,//metapalabras claves
                "subfamilia" =>$contenido_a_exportar[$i]->subfamilia,//categoria
                "subfamilia2" =>$contenido_a_exportar[$i]->subfamilia2,//etiquetas
                "subfamilia3" =>$contenido_a_exportar[$i]->subfamilia3,//metatitulo
                "subfamilia4" =>$contenido_a_exportar[$i]->subfamilia4,//metadescripcion
                "ean" =>$contenido_a_exportar[$i]->ean, //ean
                "talla" =>$contenido_a_exportar[$i]->talla, //tall
                "descripcion" =>$contenido_a_exportar[$i]->descripcion,//descripcion corta
                "descripcionori" =>$contenido_a_exportar[$i]->descripcionori,//name
                "precio_recomendado" =>$contenido_a_exportar[$i]->precio_recomendado, //wholesale_price
                "iva" =>$contenido_a_exportar[$i]->iva,//id_tax_rules_group'
                  //"explicacion" =>$contenido_a_exportar[$i]->explicacion,//description_short
                "explicacion_texto" =>$contenido_a_exportar[$i]->explicacion_texto,//descripcion
                "stock_disponible" =>$contenido_a_exportar[$i]->stock_disponible,//cantidad
                "fabricante" =>$contenido_a_exportar[$i]->fabricante,//manufacturer
                "imagen_bu" =>$contenido_a_exportar[$i]->imagen_bu,//image

            );
        }
          
          //TEST
          // dd($campos[0]);
           

        // INICIO CODIGO PARA CONVERTIR EL ARCHIVO A CSV, ENVIARLO Y GUARDARLO
          
        $exportac_csv =  'convertidos.csv'; 
         //TEST 
          //dd($exportac_csv);
         
        // abrimos el file csv, para escribir(w) 
        $fp =fopen('storage/app/csv/convertidos.csv', 'w'); 
      
        // recorremos el array inicial y escribimos cada linea en el csv
        foreach ($campos as $row) 
        {
            fputcsv($fp, $row, ';');
        }

        fclose($fp);
        // Storage::disk('csv')->put('convertido.csv',$fp);
         
        $fileLocal =  Storage::get('csv/convertidos.csv'); 
          //TEST
          //  dd($fileLocal);

        $fileRemote ='/tienda/import/convertidos.csv';
        $hora = date("H.i.s");
        $sitio = DB::table('sitios')->where('id','5')->first();
        //$hora_deseada=$sitio->hora_deseada;
      
        $conectado = new Conexion;

        // $conectado->conectar()->put($filelocal,$fileRemote);

        //CONDICIONAL PARA ESCOGER HORA DE CONEXION
        // if($hora === "21:00")
        $conectado->conectar() ;
          
        if($conectado) 
        {
            $importacion = 
                [
                    'users_id'=>  '1',
                    'estados_id'=> '1',
                    'proveedores_id'=> '1' ,
                    'sitios_id'=> '1' , 
                    'nombre_archivo '=> 'exportacion'.$hora,
                    'tipo_archivo'=> 'csv', 
                    'url_archivo'=> 'aqui' , 
                    'tamaño'=> '100',
                ];
        
            \App\Exportacione::create($importacion);
        };
    }

}
