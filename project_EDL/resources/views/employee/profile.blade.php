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
<div class="info-box" id="uno">
    <p class="text">Nombres: </p>
    <div>{{$usuario->name}}</div>
</div>
<div class="info-box" id="dos">
    <p class="text">Apellidos: </p>
    <div>{{$usuario->lastname}}</div>
</div>
<div class="info-box" id="tres">
    <p class="text">Tipo De Identificación: </p>
    <div>{{$usuario->idtype}}</div>
</div>
<div class="info-box" id="cuatro">
    <p class="text"># Documento: </p>
    <div>{{$usuario->id}}</div>
</div>
<div class="info-box" id="cinco">
    <p class="text">Fecha de Nacimiento: </p>
    <div>{{$usuario->birth}}</div>
</div>
<div class="info-box" id="seis">
    <p class="text">Teléfono: </p>
    <div>{{$usuario->telephone}}</div>
</div>
<div class="info-box" id="siete">
    <p class="text">Dirección: </p>
    <div>{{$usuario->address}}</div>
</div>
<div class="info-box" id="ocho">
    <p class="text">Fecha de Entrada: </p>
    <div>{{$usuario->inday}}</div>
</div>
<div class="info-box" id="nueve">
    <p class="text">Fecha de Salida: </p>
    <div>{{$usuario->outday}}</div>
</div>
<div class="info-box" id="diez">
    <p class="text">Proyecto Actual: </p>
    <div>{{$usuario->actualproject}}</div>
</div>
<div class="info-box" id="once">
    <p class="text">Cargo: </p>
    <div>{{$usuario->occupation}}</div>
</div>
<div class="info-box" id="doce">
    <p class="text">E-mail: </p>
    <div>{{$usuario->email}}</div>
</div>
<div class="info-box" id="trece">
    <p class="text">Estado: </p>
    <div style="font-weight: 700">{{$usuario->status}}</div>
</div>
@if(session('success'))
<div id='message-container'>
    <box-icon id='icon' name='check-circle'></box-icon>
    <h4>{{ session('success') }}</h4>
</div>
@endif
<a href="{{ route( 'my_profile.edit' ) }}"><button id="Editar">Modificar Datos</button></a>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
@endsection