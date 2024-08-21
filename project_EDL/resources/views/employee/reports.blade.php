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
                    <button type="button" class="eliminar" data-bs-toggle="modal"
                        data-bs-target="#Modal">Borrar</button>
                    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color: rgb(50, 50, 50)">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="miModalLabel">Confirma la acción</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de que quieres eliminar este reporte?</p>
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
    <form action="{{ route('reports.create') }}" method="POST" class="d-flex flex-column">
        @csrf
@if($usuario->status == "CONTRATADO")
        <button name="action" value="trabajo" class="btn-primary col-10 mx-auto mt-3 type_btn">
            <box-icon name='briefcase-alt-2' type='solid' color='#ffffff' class="icon"></box-icon><p>Constancia de trabajo</p></button>
@else
        <button name="action" value="salida" class="btn-danger col-10 mx-auto mt-3 type_btn"><box-icon name='log-out' color='#ffffff' class="icon"></box-icon>
            <p>Constancia de salida</p></button>
@endif
    </form>
</div>
<div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 mx-auto" id="btn">
    <button class="Nuevo col-12 mx-auto" id="new">Nueva Constancia</button>
</div>
@endsection
<script src="js/reports.js" defer></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>