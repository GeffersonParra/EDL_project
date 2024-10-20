@extends('admin.basedashboard')
@section('title', 'Perfil De ' .$empleado->first_name." ".$empleado->first_lastname. ' | EDL')
<link rel="stylesheet" href="{{ asset('css/admin/info.css') }}">
@section('content')
@section('subtitle', 'Reporte de empleado')
<img class="editfoto rounded-circle" src='{{ Storage::url($empleado->photo) }}'>
<div class="container w-50 h-100 mt-1 self-center">
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Nombres: </p>
            <div>{{$empleado->first_name." ".$empleado->second_name}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Dirección: </p>
            <div>{{$empleado->address}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Apellidos: </p>
            <div>{{$empleado->first_lastname." ".$empleado->second_lastname}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Fecha de Nacimiento: </p>
            <div>{{$empleado->birth}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text"># Documento: </p>
            <div>{{$empleado->id}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Tipo De Identificación: </p>
            <div>{{$empleado->idName->id_type}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Fecha de Entrada: </p>
            <div>{{$empleado->inday}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Fecha de Salida: </p>
            @if($empleado->outday == null)
            <div>N/A</div>
            @else
            <div>{{$empleado->outday}}</div>
            @endif
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Teléfono: </p>
            <div>{{$empleado->telephone}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">E-mail: </p>
            <div>{{$empleado->email}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6">
            <p class="text">Cargo: </p>
            <div>{{$empleado->occupationName->occupation_name}}</div>
        </div>
        <div class="info-box col-12 col-md-6">
            <p class="text">Proyecto Actual: </p>
            <div>{{$empleado->actualproject}}</div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="info-box col-12 col-md-6 align-self-center mx-auto">
            <p class="text">Estado: </p>
            <div style="font-weight: 700">{{$empleado->statusName->status_name}}</div>
        </div>
    </div>
    @if($empleado->role_id != 1)
    <a href="{{ route('admin.employees.edit', $empleado->id) }}">
        <button class="Editar col-12 mt-4">Modificar Datos</button>
    </a>
    @endif
    <a href="{{ route('admin.employees.list', $empleado->id) }}">
        <button class="Cancelar col-12 mt-3">Volver a la lista</button>
    </a>
</div>
@if(session('success'))
<div class="d-flex col-3 mt-4 justify-content-center align-items-center" id='message-container'>
    <box-icon id='icon' class="h-25" name='check-circle'></box-icon>
    <h4 class="text-center col-9">{{ session('success') }}</h4>
</div>
@endif
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="js/profile.js" defer></script>
@endsection