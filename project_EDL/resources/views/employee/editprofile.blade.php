@extends('employee.basedashboard')
@section('title', 'Editar Tus Datos | EDL')
<base href="/">
<link rel="stylesheet" href="css/styledashboard.css">
<link rel="stylesheet" href="css/editar.css">
<script src="js/base.js"></script>
@section('content')
@section('subtitle', 'Edita Tus Datos')
<form action="{{ route('my_profile.update', $usuario->id) }}" method="POST" enctype="multipart/form-data" class="w-100">
    @csrf
    {{ method_field('PUT') }}
    <div class="imagen mx-auto justify-contents-center" id="imagen">
        <img class="rounded-circle editfoto" id="editfoto" src='{{ Storage::url($usuario->photo) }}'>
        <div class="imagetext d-flex">
            <box-icon type='solid' name='camera-plus' class="mx-auto my-auto"></box-icon>
        </div>
    </div>
    <div class="container">
        <div class="container self-center w-50 mt-5">
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <p class="text">Nombres: </p>
                    <div>{{$usuario->first_name." ".$usuario->second_name}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' class="lock"></box-icon>
                </div>
                <div class="info-box col-12 col-md-6 mt-1">
                    <label for="address">Dirección: </label>
                    <input type="text" name="address" id="address" value="{{$usuario->address}}" required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <p class="text">Apellidos: </p>
                    <div>{{$usuario->first_lastname." ".$usuario->second_lastname}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' class="lock"></box-icon>
                </div>
                <div class="info-box col-12 col-md-6">
                    <p class="text">Fecha de Nacimiento: </p>
                    <div>{{$usuario->birth}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' class="lock"></box-icon>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <p class="text"># Documento: </p>
                    <div>{{$usuario->id}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' class="lock"></box-icon>
                </div>
                <div class="info-box col-12 col-md-6">
                    <p class="text">Tipo De Identificación: </p>
                    <div>{{$usuario->idName->id_type}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' class="lock"></box-icon>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <p class="text">Fecha de Entrada: </p>
                    <div>{{$usuario->inday}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' class="lock"></box-icon>
                </div>
                <div class="info-box col-12 col-md-6">
                    <p class="text">Fecha de Salida: </p>
                    <div>{{$usuario->outday}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' class="lock"></box-icon>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <label for="telephone">Teléfono: </label>
                    <input type="tel" name="telephone" min="3000000000" max="3800000000" step="0.01" id="telephone"
                        value="{{$usuario->telephone}}" required>
                </div>
                <div class="info-box col-12 col-md-6">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" value="{{$usuario->email}}" required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6">
                    <p class="text">Cargo: </p>
                    <div>{{$usuario->occupationName->occupation_name}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' class="lock"></box-icon>
                </div>
                <div class="info-box col-12 col-md-6 mt-1">
                    <label for="actualproject">Proyecto Actual: </label>
                    <input type="text" name="actualproject" id="actualproject" value="{{$usuario->actualproject}}"
                        required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="info-box col-12 col-md-6 align-self-center mx-auto">
                    <p class="text">Estado: </p>
                    <div>{{$usuario->statusName->status_name}}</div>
                    <box-icon name='lock-alt' type='solid' color='#ffffff' id="lock"></box-icon>
                </div>
            </div>
            <div class="row mt-5 col col-sm-12 col-lg-12 col-xl-12 mx-auto">
                <a href="{{ route( 'my_profile.edit' ) }}"><button type="submit" class="mx-auto col-12" id="Editar">Guardar</button></a>
                <a href="{{ route( 'my_profile' ) }}"><button type="button" class="mx-auto col-12 mt-3 mb-5" id="Cancelar">Cancelar</button></a>
            </div>
            <input type="file" id="photo" name="photo" style="display: none;" accept="image/*">
</form>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
@endsection