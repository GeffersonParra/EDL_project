@extends('employee.basedashboard')
@section('title', 'Constancias y Archivos | EDL')
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
                <p class="mt-3">{{ $report->doc_name }}</p>
            </td>
            <td>
                <p class="mt-3">{{ $report->created_at }}</p>
            </td>
            <td class="align-items-center">
                @if($report->type == 1)
                <p class="mt-3">Constancia de Trabajo</p>
                @elseif($report->type == 2)
                <p class="mt-3">Constancia de Salida</p>
                @endif
            </td>
            <td class="d-flex align-items-center justify-content-center" id="actions">
                <a href="{{ asset('storage/' . $report->document) }}" target="_blank">
                    <button class="btn-primary rounded-2">
                        <box-icon name='show' type='solid' color='#ffffff'></box-icon>
                    </button>
                </a>
                <a href="{{ route('reports.download', $report->doc_name)}}">
                    <button class="btn-success rounded-2">
                        <box-icon type='solid' name='download' color='#ffffff'></box-icon>
                    </button>
                </a>
                <form action="{{ route('reports.delete', $report->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="button" class="btn-danger rounded-2 mt-3" data-bs-toggle="modal"
                        data-bs-target="#Modal-{{ $report->id }}">
                        <box-icon name='trash' color='#ffffff'></box-icon>
                    </button>
                    <div class="modal fade" id="Modal-{{ $report->id }}" tabindex="-1" aria-labelledby="miModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color: rgb(50, 50, 50)">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="miModalLabel">Confirma la acción</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de que quieres eliminar el reporte: <b>{{ $report->doc_name}}</b>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif
<div class="mb-5 col-4" id="reportform">
    <form action="{{ route('reports.create') }}" method="POST" class="d-flex flex-column h-100">
        @csrf
        @if($usuario->status == "CONTRATADO")
        <button name="action" value="trabajo" class="btn-primary col-10 mx-auto mt-3 type_btn">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <box-icon name='briefcase-alt-2' type='solid' color='#ffffff' class="icon col-1 h-100"></box-icon>
                <h5 class="col-7 mt-1">Constancia de trabajo</h5>
            </div>
        </button>
        @else
        <button name="action" value="salida" class="btn-danger col-10 mx-auto mt-3 type_btn">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <box-icon name='log-out' color='#ffffff' class="icon col-1 h-100"></box-icon>
                <h5 class="col-7 mt-1">Constancia de salida</h5>
            </div>
        </button>
        @endif
    </form>
</div>
<div class="col-xl-6 col-lg-6 col-md-8 col-sm-6 mx-auto">
    <button class="Nuevo col-12 mx-auto" id="new">Nueva Constancia</button>
</div>
@endsection
<script src="js/reports.js" defer></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</script>