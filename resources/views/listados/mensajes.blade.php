@extends('layouts.escritorio_base')

@section('content')
<div>


      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado mensajes</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'escritorio'}}">Inicio</a></li>
            <li class="breadcrumb-item active">Listado Mensajes</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
                       
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong>Listado clientes</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ID</th>
                          <th>Contacto</th>
                          <th>Empresa</th>
                          <th>Iden. Fiscal</th>
                          <th>Telefono</th>
                          <th>whatsapp</th>
                          <th>Tipo de empleado</th>
                          <th>Notas</th>
                          <th>email</th>
                          <th>estado</th>
                          <th>Rol</th>
                          <th>Sitios</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($clientes as $cliente)
                        <?php 
                          $color ="";
                    
                          if  ($ticket->estado->nombreEstado =='en proceso')
                            { 
                              $color ='style="color:red ;  background:white";';
                            }; 
                          if  ($ticket->estado->nombreEstado =='cerrado')
                            { $color ='style="color:green;  background:yellow"';
                            };  
                        ?>
                          <tr id="linea" <?php echo $color  ?> >

                          
                          <th scope="row">1</th>
                          <td>{{ $cliente->id }}</td>
                          <td>{{ $cliente->contacto }}</td>
                          <td>{{ $cliente->empresa }}</td>
                          <td>{{ $cliente->identificacion_fiscal }}</td>
                          <td>{{ $cliente->telefono }}</td>
                          <td>{{ $cliente->whatsapp }}</td>
                          <td>{{ $cliente->tipo_de_empleado }}</td>
                          <td>{{ $cliente->notas }}</td>
                          <td>{{ $cliente->email }}</td>
                          <td>{{ $cliente->roles_id }}</td>
                          <td>{{ $cliente->sitios->nombre }}</td>

                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            

            </div>
          </div>
        </section>
    </div>
@endsection