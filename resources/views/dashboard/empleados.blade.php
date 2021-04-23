@extends('adminlte::page')
@section('title', 'Lista de empleaods')
@section('content_header')
    <h1>Lista de empleados</h1>
@stop

@section('content')
<table class="table">
    <thead class="table-dark">
      <td>
          #
      </td>
      <td>
          Nombre
      </td>
      <td>
          Departamento
      </td>
      <td>
          Turno
      </td>
      <td>
          Telefono
      </td>
    </thead>
    <tbody>
      <tr>
        <th>1</th>
        <td>Alejando Lara Zapata</td>
        <td>Desarrollo</td>
        <td>1</td>
        <td>8342538341</td>
      </tr>
      <tr>
        <th>2</th>
        <td>Elizabeth Soto Trejo</td>
        <td>Finanzas</td>
        <td>1</td>
        <td>8348499572</td>
      </tr>
      <tr>
        <th>3</th>
        <td>Claudia Alvarado Mata</td>
        <td>Finanzas</td>
        <td>2</td>
        <td>8342148567</td>
      </tr>
      <tr>
        <th>4</th>
        <td>Carlos Miguel Estrada Campo</td>
        <td>Desarrollo</td>
        <td>1</td>
        <td>8343785498</td>
      </tr>
      <tr>
        <th>5</th>
        <td>Arturo Manuel Rodriguez Salazar</td>
        <td>Planta 1</td>
        <td>1</td>
        <td>8343214589</td>
      </tr>
      <tr>
        <th>6</th>
        <td>Rosa Galvan Estrada</td>
        <td>Administración</td>
        <td>1</td>
        <td>8349745633</td>
      </tr>
      <tr>
        <th>7</th>
        <td>Mariana Padilla Zapata</td>
        <td>Administración</td>
        <td>2</td>
        <td>8341456274</td>
      </tr>
    </tbody>
  </table>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
@stop
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@stop