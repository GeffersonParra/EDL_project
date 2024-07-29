@extends('employee.basedashboard')
@section('title', 'Mi Perfil | EDL')
<link rel="stylesheet" href="css/styledashboard.css">
<link rel="stylesheet" href="css/info.css">
@section('content')
<div id="basicdata">
    <h1>Tus Datos Básicos</h1>
    <hr id="div-line">
</div>
<img id="editfoto" src='{{ Storage::url($usuario->photo) }}'>
<div id="contenedor">
    <div class="info-box">
        <p id="text">Nombres: </p>
        <div>{{$usuario->name}}</div>
    </div>
    <div class="info-box">
        <p id="text">Apellidos: </p>
        <div>{{$usuario->lastname}}</div>
    </div>
    <div class="info-box">
        <p id="text">Tipo De Identificación: </p>
        <div>{{$usuario->idtype}}</div>
    </div>
    <div class="info-box">
        <p id="text"># Documento: </p>
        <div>{{$usuario->id}}</div>
    </div>
    <div class="info-box">
        <p id="text">Fecha de Nacimiento: </p>
        <div>{{$usuario->birth}}</div>
    </div>
    <div class="info-box">
        <p id="text">Teléfono: </p>
        <div>{{$usuario->telephone}}</div>
    </div>
    <div class="info-box2">
        <p id="text2">Dirección: </p>
        <div>{{$usuario->address}}</div>
    </div>
    <div class="info-box2">
        <p id="text2">Fecha de Entrada: </p>
        <div>{{$usuario->inday}}</div>
    </div>
    <div class="info-box2">
        <p id="text2">Fecha de Salida: </p>
        <div>{{$usuario->outday}}</div>
    </div>
    <div class="info-box2">
        <p id="text2">Proyecto Actual: </p>
        <div>{{$usuario->actualproject}}</div>
    </div>
    <div class="info-box2">
        <p id="text2">Cargo: </p>
        <div>{{$usuario->occupation}}</div>
    </div>
    <div class="info-box2">
        <p id="text2">E-mail: </p>
        <div>{{$usuario->email}}</div>
    </div>
    <div class="info-box3">
        <p id="text3">Estado: </p>
        <div>{{$usuario->status}}</div>
    </div>
    <a href="{{ route( 'my_profile.edit' ) }}"><button id="Editar">Modificar Datos</button></a>
</div>
@endsection