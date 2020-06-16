
COMUNICACION DE EXPORTACION  {{ $Mensajexport->receiver }} 
  Mediante la presente comunicación le estamos notificando que la  base de datos del sitio {{$Mensajexport->sitio}}, fue actualizada y que la  exportacion fue realizada exitosamente

 Datos de la exportacion  

 
	Nombre del archivo: {{ $Mensajexport->nombre }} 
	Fecha de la exportacion: {{ $Mensajexport->fecha_export }} 
	Origen de los datos: {{ $Mensajexport->proveedor }} 
	Tamaño del archivo: {{ $Mensajexport->size }} 
  
 Valores pasados con el metodo with 
    {{ $testVariable1  }}  
    {{ $testVariable2 }}   
 

Muchas gracias por confiar en nosotros 
{{$Mensajexport->sender}} 