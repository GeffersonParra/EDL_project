@extends('employee.basedashboard')
@section('title', 'Mi Perfil | EDL')
<link rel="stylesheet" href="css/styledashboard.css">
<link rel="stylesheet" href="css/info.css">
<script src="js/profile.js" defer></script>
@section('content')
<div id="basicdata">
    <h1>Tus Datos Básicos</h1>
    <hr id="div-line">
</div>
<img id="editfoto" src='{{ Storage::url($usuario->photo) }}'>
<div class="contenedor">
    <div class="info-box">
        <p class="text">Nombres: </p>
        <div>{{$usuario->name}}</div>
    </div>
    <div class="info-box">
        <p class="text">Apellidos: </p>
        <div>{{$usuario->lastname}}</div>
    </div>
    <div class="info-box">
        <p class="text">Tipo De Identificación: </p>
        <div>{{$usuario->idtype}}</div>
    </div>
    <div class="info-box">
        <p class="text"># Documento: </p>
        <div>{{$usuario->id}}</div>
    </div>
    <div class="info-box">
        <p class="text">Fecha de Nacimiento: </p>
        <div>{{$usuario->birth}}</div>
    </div>
    <div class="info-box">
        <p class="text">Teléfono: </p>
        <div>{{$usuario->telephone}}</div>
    </div>
    <div class="info-box2">
        <p class="text2">Dirección: </p>
        <div>{{$usuario->address}}</div>
    </div>
    <div class="info-box2">
        <p class="text2">Fecha de Entrada: </p>
        <div>{{$usuario->inday}}</div>
    </div>
    <div class="info-box2">
        <p class="text2">Fecha de Salida: </p>
        <div>{{$usuario->outday}}</div>
    </div>
    <div class="info-box2">
        <p class="text2">Proyecto Actual: </p>
        <div>{{$usuario->actualproject}}</div>
    </div>
    <div class="info-box2">
        <p class="text2">Cargo: </p>
        <div>{{$usuario->occupation}}</div>
    </div>
    <div class="info-box2">
        <p class="text2">E-mail: </p>
        <div>{{$usuario->email}}</div>
    </div>
    <div class="info-box3">
        <p class="text3">Estado: </p>
        <div>{{$usuario->status}}</div>
    </div>
    @if(session('success'))
    <div id='message-container'>
        <box-icon id='icon' name='check-circle'></box-icon>
        <h4>{{ session('success') }}</h4>
    </div>
    @endif
    <a href="{{ route( 'my_profile.edit' ) }}"><button id="Editar">Modificar Datos</button></a>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</div>
@endsection