@extends('employee.basedashboard')
@section('title', 'Mi Perfil | EDL')
<link rel="stylesheet" href="css/styledashboard.css">
<link rel="stylesheet" href="css/info.css">
@section('content')
@section('subtitle', 'Tus Datos Básicos')
<img class="rounded-circle editfoto" id="photo" src='{{ Storage::url($usuario->photo) }}'>
<div class="container w-50 h-100 mt-1 self-center">
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Nombres: </p>
            <div>{{$usuario->name}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Dirección: </p>
            <div>{{$usuario->address}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Apellidos: </p>
            <div>{{$usuario->lastname}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Fecha de Nacimiento: </p>
            <div>{{$usuario->birth}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text"># Documento: </p>
            <div>{{$usuario->id}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Tipo De Identificación: </p>
            <div>{{$usuario->idtype}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Fecha de Entrada: </p>
            <div>{{$usuario->inday}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Fecha de Salida: </p>
            <div>{{$usuario->outday}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Teléfono: </p>
            <div>{{$usuario->telephone}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">E-mail: </p>
            <div>{{$usuario->email}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Cargo: </p>
            <div>{{$usuario->occupation}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Proyecto Actual: </p>
            <div>{{$usuario->actualproject}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6 align-self-center mx-auto">
            <p class="text">Estado: </p>
            <div style="font-weight: 700">{{$usuario->status}}</div>
        </div>
    </div>
    <a href="{{ route('my_profile.edit') }}">
        <button class="Editar col-12 mt-4">Modificar Datos</button>
    </a>
</div>
@if(session('success'))
<div class="d-flex col-3 mt-4 justify-content-center align-items-center" id='message-container'>
    <box-icon id='icon' class="h-25" name='check-circle'></box-icon>
    <h4 class="text-center col-9">{{ session('success') }}</h4>
</div>
@endif
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
@endsection