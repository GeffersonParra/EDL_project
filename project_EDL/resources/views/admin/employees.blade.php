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
        <table class="table table-dark w-75 mx-auto text-center col-sm-1" id="sortable-table">
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
            @foreach($usuarios as $empleado)
            @if($empleado->id == $usuario->id)
            <tr>
                <td>
                    <p class="mt-4" style="color:#16b5d9">{{ $empleado->id }}</p>
                </td>
                <td>
                    <img class="mini-foto rounded-circle" src='{{ Storage::url($empleado->photo) }}'>
                </td>
                <td>
                    <p class="mt-4" style="color:#16b5d9">{{ $empleado->name }}</p>
                </td>
                <td>
                    <p class="mt-4" style="color:#16b5d9">{{ $empleado->lastname }}</p>
                </td>
                <td>
                    <p class="mt-4" style="color:#16b5d9">{{ $empleado->occupation }}</p>
                </td>
                <td>
                    <p class="mt-4" style="color:#16b5d9">{{ $empleado->status }}</p>
                </td>
            </tr>
            @else
            <tr>
                <td>
                    <p class="mt-4">{{ $empleado->id }}</p>
                </td>
                <td>
                    <img class="mini-foto rounded-circle" src='{{ Storage::url($empleado->photo) }}'>
                </td>
                <td>
                    <p class="mt-4">{{ $empleado->name }}</p>
                </td>
                <td>
                    <p class="mt-4">{{ $empleado->lastname }}</p>
                </td>
                <td>
                    <p class="mt-4">{{ $empleado->occupation }}</p>
                </td>
                <td>
                    <p class="mt-4">{{ $empleado->status }}</p>
                </td>
            </tr>
            @endif

            @endforeach
        </table>
    </div>
</div>
@endsection