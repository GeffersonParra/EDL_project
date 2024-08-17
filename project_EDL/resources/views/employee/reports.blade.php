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
    <table class="table table-dark w-75 mx-auto text-center col-sm-1">
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
                <form action="{{ route('reports.delete', $report->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('En realidad quieres eliminar esta constancia?')"
                        class="eliminar">Borrar</button>
                </form>
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
<div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 mx-auto" id="btn">
    <button class="Nuevo col-12 mx-auto">Nueva Constancia</button>
</div>
<script src="js/reports.js"></script>
@endsection