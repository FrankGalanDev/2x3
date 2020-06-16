<?php 

namespace App\Personalizado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;

class Conexion
{

  //---------------------INICION  SECCION  DECLARACION CLASES -----------------
  //creamos una clase para setear la conexion a la bd, con una funcion closure que resetea los valores del archivo config/database
        
    public function conectar()
      {
        $hora = date("H.i.s");
      
       /* $sitio = DB::table('sitios')->where('hora_deseada', '=', $hora)->get();*/
        $sitio = DB::table('sitios')->where('id','5')->first();
          // dd($sitio->id);
        $driv='msql';
        $puerto_conex=$sitio->port_conex;
        $unix_socket=$sitio->socket_conex;
        $database_name=$sitio->nombre_bd;
        $user_name=$sitio->usuario_bd;
        $contra_=$sitio->pass_bd;
        $host_con=$sitio->host_conex;
        $ip_FTP=$sitio->ip_FTP; 
        $user_FTP=$sitio->user_FTP; 
        $pass_FTP=$sitio->pass_FTP; 
        $port_conex=$sitio->port_conex;

  // ASIGNANDO VALORES DINAMICOS AL ARCHIVO DE CONFIGURACION 
        Config::set(
          [
            'filesystem.disk.ftp.driver'=> 'ftp',
            'filesystem.disk.ftp.host' => $host_con,
            'filesystem.disk.ftp.username' => $user_FTP,
            'filesystem.disk.ftp.password' => $pass_FTP,
            'filesystem.disk.ftp.port' => $port_conex,
          ]);
    
  // CONFIGURANDO CONEXION  
        $driver = ( Config::get('filesystem.disk.ftp.driver'));
    
        $host = ( Config::get('filesystem.disk.ftp.host'));
      
        $username = ( Config::get('filesystem.disk.ftp.username'));
      
        $password = ( Config::get('filesystem.disk.ftp.password'));
      
        $port = ( Config::get('filesystem.disk.ftp.port'));
     
        $conex = [$driver, $host, $username, $password, $port];
        //TEST
        // dd($conex);

        $ftp_conn = ftp_connect($host) or die("no conecta ftp");
        //TEST
        //echo($host);
 
        if ($ftp_conn)
          {
            echo "<br>Conectada";

            $login = ftp_login($ftp_conn,$username,$password);
            ftp_pasv($ftp_conn, TRUE);
 
            if($login)
              {
                echo "<br>logeado"; 

                $remote='httpdocs/tienda/import/convertidosqqq.csv';
                $local='./storage/app/csv/convertidos.csv';
  
                if (ftp_put($ftp_conn,$remote,$local, FTP_BINARY))
                  { 
                    echo "<br>Upload";
                  }
                else
                  {
                    echo "<br>not upload";
                  }


              }
            else
             {
                echo "fallo login";
              }



            if(ftp_close($ftp_conn))
              {
                echo "conexion cerrada";
              };
   
          } 
    
        $fileLocal="";
        $fileRemote="";
  
        return $conex;


    
      } 
    
}
   
