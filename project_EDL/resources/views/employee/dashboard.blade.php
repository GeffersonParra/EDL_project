@extends('employee.basedashboard')
<link rel="stylesheet" href="css/styledashboard.css">
@section('title', 'Empleado | EDL')
@section('content')
@php
$name = $usuario->first_name;
@endphp
@section('subtitle', "Bienvenid@, $name")
<div class="container">
    <h3 class="paragraph col-10 mx-auto text-center">Desde este portal, puedes acceder a toda tu información personal, así como generar constancias
        y estar al tanto de los proyectos dentro de la compañía.</h3>
</div>
</div>
@endsection