@extends('admin.basedashboard')
<link rel="stylesheet" href="{{ asset('css/styledashboard.css')}}">
<link rel="stylesheet" href="{{ asset('css/admin/employees.css')}}">
@section('title', 'Administrador | EDL')
@section('content')
@php
$name = $usuario->name;
@endphp
@section('subtitle', "Lista de empleados")
<div class="container">
    <div class="container col-12">
        <table class="table employee-table w-75 mx-auto text-center col-sm-1" id="sortable-table">
            <thead>
                <tr>
                    <th class="sortable" data-column="0">
                        #
                    </th>
                    <th class="sortable" data-column="1">
                        Foto
                    </th>
                    <th class="sortable" data-column="2">
                        Nombres
                    </th>
                    <th class="sortable" data-column="3">
                        Apellidos
                    </th>
                    <th class="sortable" data-column="4">
                        Cargo
                    </th>
                    <th class="sortable" data-column="5">
                        Estado
                    </th>
                </tr>
            </thead>
            @foreach($empleados as $empleado)
            @if($empleado->id == $usuario->id)
            <tr class="user">
                <td>
                    <div class="user-pill rounded-pill text-center w-75 mx-auto mt-2 mb-2">Tú</div>
                    <p>{{ $empleado->id }}</p>
                </td>
                <td>
                    <img class="mini-foto rounded-circle" src='{{ Storage::url($empleado->photo) }}'>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->first_name." ".$empleado->second_name }}</p>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->first_lastname." ".$empleado->second_lastname }}</p>
                </td>
                <td>
                    <div class="admin rounded-pill w-50 text-center mx-auto mt-2">Admin</div>
                    <p>{{ $empleado->occupationName->occupation_name }}</p>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->statusName->status_name }}</p>
                </td>
            </tr>
            @elseif($empleado->role == 1 && $empleado->status != "DESPEDIDO")
            <tr class="employee-admin">
                <td>
                    <p class="mt-4">{{ $empleado->id }}</p>
                </td>
                <td>
                    <img class="mini-foto rounded-circle" src='{{ Storage::url($empleado->photo) }}'>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->first_name." ".$empleado->second_name }}</p>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->first_lastname." ".$empleado->second_lastname }}</p>
                </td>
                <td>
                    <div class="admin rounded-pill w-50 text-center mx-auto mt-2">Admin</div>
                    <p>{{ $empleado->occupationName->occupation_name }}</p>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->statusName->status_name }}</p>
                </td>
            </tr>
            @else
            <tr class="employee-normal">
                <td>
                    <p class="mt-4">{{ $empleado->id }}</p>
                </td>
                <td>
                    <img class="mini-foto rounded-circle" src='{{ Storage::url($empleado->photo) }}'>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->first_name." ".$empleado->second_name }}</p>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->first_lastname." ".$empleado->second_lastname }}</p>
                </td>
                <td>
                    <p class="mt-4">{{ $empleado->occupationName->occupation_name }}</p>
                </td>
                <td>
                    <p class="mt-4" >{{ $empleado->statusName->status_name }}</p>
                </td>
            </tr>
            @endif

            @endforeach
        </table>
    </div>
</div>
@endsection