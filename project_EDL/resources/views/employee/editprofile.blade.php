@extends('employee.basedashboard')
@section('title', 'Mi Perfil | EDL')
<base href="/">
<link rel="stylesheet" href="css/styledashboard.css">
<link rel="stylesheet" href="css/editar.css">
<script src="js/baseemployee.js"></script>
@section('content')
<div id="basicdata">
    <h1>Editar Tus Datos</h1>
    <hr id="div-line">
</div>
<form action="{{ route('my_profile.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
    <div id="imagen">
        <img id="editfoto" src='{{ Storage::url($usuario->photo) }}'>
        <div class="imagetext">
            <box-icon type='solid' name='camera-plus'></box-icon>
        </div>
    </div>
    <div id="contenedor">
        <div class="info-box">
            <p class="text">Nombres: </p>
            <div>{{$usuario->name}}</div>
            <div id="readonly">No puedes modificar esto.</div>
        </div>
        <div class="info-box">
            <p class="text">Apellidos: </p>
            <div>{{$usuario->lastname}}</div>
            <div id="readonly">No puedes modificar esto.</div>
        </div>
        <div class="info-box">
            <p class="text">Tipo De Identificación: </p>
            <div>{{$usuario->idtype}}</div>
            <div id="readonly">No puedes modificar esto.</div>
        </div>
        <div class="info-box">
            <p class="text"># Documento: </p>
            <div>{{$usuario->id}}</div>
            <div id="readonly">No puedes modificar esto.</div>
        </div>
        <div class="info-box">
            <p class="text">Fecha de Nacimiento: </p>
            <div>{{$usuario->birth}}</div>
            <div id="readonly">No puedes modificar esto.</div>
        </div>
        <div class="info-box">
            <label for="telephone">Teléfono: </label>
            <input type="number" name="telephone" min="3000000000" max="3800000000" step="0.01" id="telephone"
                value="{{$usuario->telephone}}" required>
        </div>
        <div class="info-box2">
            <label for="address">Dirección: </label>
            <input type="text" name="address" id="address" value="{{$usuario->address}}" required>
        </div>
        <div class="info-box2">
            <p class="text2">Fecha de Entrada: </p>
            <div>{{$usuario->inday}}</div>
            <div id="readonly2">No puedes modificar esto.</div>
        </div>
        <div class="info-box2">
            <p class="text2">Fecha de Salida: </p>
            <div>{{$usuario->outday}}</div>
            <div id="readonly2">No puedes modificar esto.</div>
        </div>
        <div class="info-box2">
            <label for="actualproject">Proyecto Actual: </label>
            <input type="text" name="actualproject" id="actualproject" value="{{$usuario->actualproject}}" required>
        </div>
        <div class="info-box2">
            <p class="text2">Cargo: </p>
            <div>{{$usuario->occupation}}</div>
            <div id="readonly2">No puedes modificar esto.</div>
        </div>
        <div class="info-box2">
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" value="{{$usuario->email}}" required>
        </div>
        <div class="info-box3">
            <p class="text3">Estado: </p>
            <div>{{$usuario->status}}</div>
            <div id="readonly3">No puedes modificar esto.</div>
        </div>
        <a href="{{ route( 'my_profile' ) }}"><button type="submit" id="Cancelar">Cancelar</button></a>
        <a href="{{ route( 'my_profile.edit' ) }}"><button type="submit" id="Editar">Guardar</button></a>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <input type="file" id="photo" name="photo" style="display: none;" accept="image/*">
    </div>
    @endsection