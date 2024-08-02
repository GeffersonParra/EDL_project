<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constancia_Trabajo_EDL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #titulo {
            position: relative;
            width: fit-content;
            left: 20%;
            top: 0%;
        }

        #constancia {
            position: relative;
            width: fit-content;
            left: 20%;
            top: 0%;
        }

        #icon {
            position: absolute;
            top: -2%;
            right: 10%;
            width: 15%;
            height: 10%;
        }

        #responsable {
            font-family:'Times New Roman', Times, serif;
            position: relative;
            top: 2%;
        }

        #cargo-responsable {
            font-family:'Times New Roman', Times, serif;
            font-weight: 600;
        }

        #constar{
            font-size: 20;
        }

        hr {
            color: rgb(7, 106, 15);
            border-color: rgb(7, 106, 15);
        }

        #container {
            font-size: large; 
            font-family:'Times New Roman', Times, serif;
            position: relative;
            width: 76%;
            height: 80%;
            left: 12%;
            right: 12%;
        }

        #text{
            font-size: 20;
        }

        #finaltext{
            font-size: 17;
            position: relative;
            top: 5%;
            left: 55%;
        }

        #footer{
            font-size: 10;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 id="titulo">EDL Ingenieros S.A.S</h1>
    <img src="{{ public_path('images/logo_prueba.jpg') }}" id="icon">
    <hr>
    <div id="container">
        <h1 id="constancia"><u>Constancia de Trabajo</u></h1>
        <br>
        <h3 id="responsable"><i>Pepito Pérez</i></h3>
        <h2 id="cargo-responsable">Gerente General</h2>
        <br>
        <h3 id="constar">Hace Constar:</h3>
        <p id="text">Que {{ $usuario->name }} {{ $usuario->lastname }} identificado con {{ $usuario->idtype }} N°{{ $usuario->id }}, se encuentra laborando en la empresa EDL S.A.S con Nit 111111 desde el {{ $usuario->inday }} como {{ $usuario->occupation }} desempeñándose siempre con eficiencia, responsabilidad y honestidad.</p>
        <p id="text">Se expide la presente constancia a solicitud del interesado para los fines que estime por conveniente.</p>
        <p id="finaltext">Bogotá D.C, {{ $report->created_at->format('Y-m-d') }}</p>
    </div>
    <hr>
    <div id="footer">
        <p>EDL | Dirección: Cra Callefalsa #ejemplo-ejemplo | Email: edl@ingenieros.com </p>
    </div>
</body>
</html>