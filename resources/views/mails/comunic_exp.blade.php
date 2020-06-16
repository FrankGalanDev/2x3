
COMUNICACION DE EXPORTACION <i>{{ $Mensajexport->receiver }}</i>
<p> Mediante la presente comunicación le estamos notificando que la  base de datos del sitio {{$Mensajexport->sitio}}, fue actualizada y que la  exportacion fue realizada exitosamente<p>

<p> Datos de la exportacion </p>

<div>
	<p>Nombre del archivo: <b>{{ $Mensajexport->nombre }}</b></p>
	<p>Fecha de la exportacion: <b>{{ $Mensajexport->fecha_export }}</b></p>
	<p>Origen de los datos: <b>{{ $Mensajexport->proveedor }}</b></p>
	<p>Tamaño del archivo: <b>{{ $Mensajexport->size }}</b></p>
</div>
<div>
 <p>Valores pasados con el metodo with</p>
    {{ $testVariable1  }}  
    {{ $testVariable2 }}   
</div>

<p><b>Muchas gracias por confiar en nosotros</b></p>
<i>{{$Mensajexport->sender}}</i>