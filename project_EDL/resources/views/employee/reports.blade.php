@extends('employee.basedashboard')
@section('title', 'Constancias y Archivos | EDL')
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/reportes.css">
@section('subtitle', 'Constancias Y Archivos')
@section('content')
<div class="container col-12">
    <table class="table table-dark w-75 mx-auto text-center">
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Fecha De Creación
            </th>
            <th>
                Tipo
            </th>
            <th>
                Acciones
            </th>
        </tr>
        <tr>
            <td>
                Nombre
            </td>
            <td>
                Fecha De Creación
            </td>
            <td>
                Tipo
            </td>
            <td>
                <button>Ver</button>
                <button>Descargar</button>
                <button>Eliminar</button>
            </td>
        </tr>
    </table>
</div>
<div id="reportform">
    <form action="{{ route('reports.create') }}" method="POST">
        @csrf
        <button id="in" name="action" value="trabajo">Constancia de trabajo</button>
    </form>
</div>
<button id="Nuevo">Nueva Constancia</button>
<a href="{{ route( 'reports.new' ) }}"><button id="Nuevo">Nueva Constancia</button></a>
</form>
<script src="js/reports.js"></script>
@endsection