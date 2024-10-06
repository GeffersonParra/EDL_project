@extends('admin.basedashboard')
<link rel="stylesheet" href="css/styledashboard.css">
@section('title', 'Administrador | EDL')
@section('content')
@php
$name = $usuario->name;
@endphp
@section('subtitle', "Bienvenid@, $name")
<div class="container">
    <h3 class="paragraph col-10 mx-auto text-center">Desde este portal, puedes acceder a toda tu información personal, así como generar constancias, administrar proyectos y empleados dentro de la compañía.</h3>
</div>
</div>
@endsection