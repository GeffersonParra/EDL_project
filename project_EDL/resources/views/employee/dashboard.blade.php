@extends('employee.basedashboard')
<link rel="stylesheet" href="css/styledashboard.css"> 
@section('title', 'Empleado | EDL')
@section('content')
    <div id="welcome">
        <h1>Bienvenid@, <b>{{ $usuario-> name}}</b></h1>
        <hr id="div-line">
        <h3 id="paragraph">Desde este portal, puedes acceder a toda tu información personal, así como generar constancias y estar al tanto de los proyectos dentro de la compañía.</h2> 
    </div>
@endsection