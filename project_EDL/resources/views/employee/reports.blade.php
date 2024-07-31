@extends('employee.basedashboard')
@section('title', 'Constancias y Archivos | EDL')
<base href="/">
<link rel="stylesheet" href="css/styledashboard.css">
<link rel="stylesheet" href="css/reportes.css">
<script src="js/reports.js"></script>
@section('content')
<div id="basicdata">
    <h1>Constancias Y Archivos</h1>
    <hr id="div-line">
</div>
<table id="tabla">
    <tr>
        <th>Tipo de Constancia</th>
        <th>Fecha de generación</th>
        <th>Descarga</th>
    </tr>
    <tr>
        <td>Hola</td>
        <td>Hoy</td>
        <td>link aquí</td>
    </tr>
    <tr>
        <td>Hola</td>
        <td>Hoy</td>
        <td>link aquí</td>
    </tr>
    <tr>
        <td>Hola</td>
        <td>Hoy</td>
        <td>link aquí</td>
    </tr>
    <tr>
        <td>Hola</td>
        <td>Hoy</td>
        <td>link aquí</td>
    </tr>
    <tr>
        <td>Hola</td>
        <td>Hoy</td>
        <td>link aquí</td>
    </tr>
</table>
<div id="reportform">
    <button id="in">Constancia de ingreso</button>
    <button id="out">Constancia de salida</button>
</div>
<button id="Nuevo">Nueva Constancia</button>
<a href="{{ route( 'reports.new' ) }}"><button id="Nuevo">Nueva Constancia</button></a>
</form>
@endsection