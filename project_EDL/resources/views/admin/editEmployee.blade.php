@extends('admin.basedashboard')
@section('title', 'Editar Empleado: '.$empleado->first_name." ".$empleado->first_lastname.' | EDL')
<link rel="stylesheet" href="{{ asset('css/admin/editar.css') }}">
<script src="js/base.js"></script>
@section('content')
@section('subtitle', 'Edita Los Datos Del Trabajador')
<form action="{{ route('admin.employees.update', $empleado->id) }}" method="POST" enctype="multipart/form-data"
    class="w-100">
    @csrf
    {{ method_field('PUT') }}
    <div class="imagen mx-auto justify-contents-center" id="imagen">
        <img class="rounded-circle editfoto" id="editfoto" src='{{ Storage::url($empleado->photo) }}'>
        <div class="imagetext d-flex">
            <box-icon type='solid' name='camera-plus' class="mx-auto my-auto"></box-icon>
        </div>
    </div>
    <div class="container">
        <div class="container self-center w-50 mt-5">
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <label for="first_name">Primer Nombre: </label>
                    <input type="text" name="first_name" id="first_name" value="{{$empleado->first_name}}" required>
                </div>
                <div class="info-box col-12 col-md-6">
                    <label for="second_name">Segundo Nombre: </label>
                    <input type="text" name="second_name" id="second_name" value="{{$empleado->second_name}}" required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <label for="first_lastname">Primer Apellido: </label>
                    <input type="text" name="first_lastname" id="first_lastname" value="{{$empleado->first_lastname}}"
                        required>
                </div>
                <div class="info-box col-12 col-md-6">
                    <label for="second_lastname">Segundo Apellido: </label>
                    <input type="text" name="second_lastname" id="second_lastname"
                        value="{{$empleado->second_lastname}}" required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <label for="address">Dirección: </label>
                    <input type="text" name="address" id="address" value="{{$empleado->address}}" required>
                </div>
                <div class="info-box col-12 col-md-6">
                    <label for="birth">Fecha de nacimiento: </label>
                    <input type="date" name="birth" id="birth" value="{{$empleado->birth}}" required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <label for="id"># Documento: </label>
                    <input type="number" name="id" id="id" value="{{$empleado->id}}" required>
                </div>
                <div class="info-box col-12 col-md-6">
                    <label for="idtype">Tipo De Identificación: </label>
                    <select name="idtype" id="idtype">{{$empleado->idName->id_type}}
                        @foreach($idtypes as $type)
                        <option value="{{$type->id}}" @if($type->id == $empleado->idName->id) selected
                            @endif>{{$type->id_type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <label for="inday">Fecha de entrada: </label>
                    <input type="date" name="inday" id="inday" value="{{$empleado->inday}}" required>
                </div>
                <div class="info-box col-12 col-md-6">
                    <label for="outday">Fecha de salida: </label>
                    <input type="date" name="outday" id="outday">
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <label for="telephone">Teléfono: </label>
                    <input type="tel" name="telephone" min="3000000000" max="3800000000" step="0.01" id="telephone"
                        value="{{$empleado->telephone}}" required>
                </div>
                <div class="info-box col-12 col-md-6">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" value="{{$empleado->email}}" required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <label for="occupation">Cargo: </label>
                    <select name="occupation" id="occupation">
                        @foreach($occupations as $occupation)
                        <option value="{{$occupation->id}}" @if($occupation->id == $empleado->occupationName->id)
                            selected @endif>{{$occupation->occupation_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="info-box col-12 col-md-6">
                    <label for="actualproject">Proyecto Actual: </label>
                    <input type="text" name="actualproject" id="actualproject" value="{{$empleado->actualproject}}"
                        required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6 mx-auto">
                    <label for="status">Estado: </label>
                    <select name="status" id="status">{{$empleado->statusName->status_name}}
                        @foreach($statuses as $status)
                        <option value="{{$status->id}}" @if($status->id == $empleado->statusName->id) selected @endif>{{$status->status_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-5 col col-sm-12 col-lg-12 col-xl-12 mx-auto">
                <a href="{{ route( 'admin.employees.update', $empleado->id) }}"><button type="submit" name="action"
                        class="mx-auto col-12" id="Editar">Guardar</button></a>
                <a href="{{ route( 'admin.employees.show', $empleado->id) }}"><button type="button" name="action"
                        class="mx-auto col-12 mt-3 mb-5" id="Cancelar">Cancelar</button></a>
            </div>
            <input type="file" id="photo" name="photo" style="display: none;" accept="image/*">
</form>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
@endsection