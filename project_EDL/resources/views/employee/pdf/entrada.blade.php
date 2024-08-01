<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
        /* Estilos generales del documento */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ public_path(' login_img/playhouse_vanished.png') }}');
            background-size: fill;
            background-position: center;
            background-repeat: no-repeat;
        }

        .titulo {
            font-family: 'Poppins', sans-serif;
            position: absolute;
            top: 0%;
            left: 42%;
        }

        .tabla {
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        .table th,
        .table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        .class_ranita_imagen {
            position: relative;
            top: 0%;
            left: 25%;
            width: 100px;
            height: auto;
        }

        tbody tr:nth-child(even) {
            background-color: #adadad;
        }

        tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <img src="{{ public_path('login_img/05 v3.png') }}" class="class_ranita_imagen">
    <h1 class="titulo">EDL declara que:</h1>
    <div class="tabla">
        <h1 style="text-align: center; font-family: 'Poppins', sans-serif;">Usuarios</h1>
        <table class="table">
            <thead style="background-color:grey">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->rol }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>