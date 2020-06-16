@extends('layouts.escritorio_base')

@section('content')


      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item active">Graficos  </li>
          </ul>
        </div>
      </div>
      <section class="charts">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Gráficos            </h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4>Line Chart</h4>
                </div>
                <div class="card-body">
                  <canvas id="lineChart" widht="480" height="480"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card bar-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4>Bar Chart Example</h4>
                </div>
                <div class="card-body">
                  <canvas id="barChartExample"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card pie-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4>Pie Chart Example</h4>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="pieChartExample"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card polar-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4>Ploar Chart Example</h4>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="polarChartExample"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card radar-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4>Radar Chart Example</h4>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="radarChartExample"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<script src="{{asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<script>

  var url= "{{ url('tools/graficos') }}";
  var Visitas = new Array();
  var Tiempo = new Array();
  var Sitio = new Array();

  $(document).ready(function(){
    $get(url, function(reponse){
      response.forEach(function(data){
        Visitas.push(data.nombre_pagina_9);
        Tiempo.push(data.tiempo_pagina_9);
        Sitios.push(data.sitios_id)
      })
    })
  })



  var ctx = document.getElementById('lineChart').getContext('2d');

  var lineChart = new Chart(ctx, {

    type: 'bar',

    data: 
      {
        labels: Visitas,

        datasets: 
          [{
            label: 'Visitas',

            data:  Tiempo ,

            backgroundColor:
              [
                'rgba(35, 155, 86,0.3)',
                'rgba(127, 139, 213, 0.3)', 
                'rgba(236, 112, 99, 0.3)', 
                'rgba(244, 208, 43, 0.3)', 
                'rgba(211, 204, 0, 0.3)', 
                'rgba(52, 73, 94, 0.3)',
                'rgba(154, 154, 154, 0.3)',
              ],
            borderColor:
              [
                'rgba(35, 155, 86, 1)',
                'rgba(127, 139, 213, 1)', 
                'rgba(236, 112, 99, 1)', 
                'rgba(244, 208, 43, 1)', 
                'rgba(211, 204, 0, 1)', 
                'rgba(52, 73, 94, 1)',
                'rgba(154, 154, 154, 1)',
              ],
            borderWidth : 1

          }]

      },

    options:
      {
        scales: 
          {
            yAxes: 
             [{
                ticks: 
                  {
                    beginAtZero: true
                  }

              }]
          }
      }

  });

</script>



@stop