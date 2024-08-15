@extends('employee.basedashboard')
@section('title', 'Constancias y Archivos | EDL')
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/reportes.css">
@section('subtitle', 'Constancias Y Archivos')
@section('content')
<div class="container col-12">
    @if ($reports->isEmpty())
    <div class="col-12 text-center">
        <h1 class="mx-auto">No tienes reportes creados, aún...</h1>
    </div>
    @else
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
        @foreach($reports as $report)
        <tr>
            <td>
                {{ $report->doc_name }}
            </td>
            <td>
                {{ $report->created_at }}
            </td>
            <td>
                @if($report->type == 1)
                <p>Constancia de Trabajo</p>
                @else
                <p>Error!</p>
                @endif
            </td>
            <td>
                <a href="{{ asset('storage/' . $report->document) }}" target="_blank">
                    <button>Ver</button>
                </a>
                <a href="{{ route('reports.download', $report->doc_name)}}">
                    <button>Descargar</button>
                </a>
                
                <button>Eliminar</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif
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