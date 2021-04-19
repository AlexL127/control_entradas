@extends('adminlte::page')
@section('title', 'Lista de empleaods')
@section('content_header')
    <h1>Lista de entradas</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div>
        <canvas id="myChart" width="100" height="100"></canvas>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        ];
        const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
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