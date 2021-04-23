@extends('adminlte::page')
@section('title', 'Lista de entradas')
@section('content_header')
    <h1>Lista de entradas</h1>
@stop

@section('content')
    <div class = "card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link">Dia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">Mes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-disabled="true">Año</a>
                </li>
              </ul>
          </div>
        <br>
        <div class = "row justify-content-md-left">
            
        </div>
        <br>
        <div class= "row justify-content-md-center">
            <div class="col col-lg-5">
                <canvas id="myChart" width="100" height="100"></canvas>
            </div>
        </div>
        
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
        ];
        const data = {
        labels: labels,
        datasets: [{
            label: 'Asistencias',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
        };
        const config = {
        type: 'line',
        data,
        options: {}
        };

        var myChart = new Chart(
        document.getElementById('myChart'),
        config
        );
    </script>
@stop