<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(29, 29, 29);
            font-family: 'Arial', sans-serif;
            color: #f5e235;
            overflow: hidden;
        }

        .container {
            text-align: center;
            position: relative;
            background-color: rgb(29, 29, 29);
            padding: 60px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-color: rgb(29, 29, 29);
            transform: rotate(-30deg);
            z-index: 0;
        }

        .container h1 {
            position: relative;
            left: 15%;
            right: 15%;
            width: 70%;
            font-size: 6rem;
            margin: 0;
            color: black;
            z-index: 1;
        }

        .container p {
            position: relative;
            font-size: 1.5rem;
            margin: 20px 0 0;
            color: rgb(29, 29, 29);
            z-index: 1;
        }

        .btn-home {
            position: relative;
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            z-index: 1;
        }

        .btn-home:hover {
            background-color: rgb(131, 121, 28);
        }

        .glow {
            position: absolute;
            top: -10%;
            left: -10%;
            width: 120%;
            height: 120%;
            background: rgba(245, 226, 53);
            filter: blur(50px);
            z-index: 0;
        }

        .title{
            position: absolute;
            top: 33%;
            left: 48%;
            width: 100px;
            height: 100px;
            transform: scale(15, 15);
            background-color: rgb(29, 29, 29);
        }

        .title h1{
            color: rgba(255, 255, 255, 0.3);
            position: absolute;
            top: 0.35vw;
            bottom: 0.35vw;
            left: 10%;
            right: 10%;
            font-size: 40px;
        }
    </style>
</head>
<div class="title">
    <h1>EDL</h1>
</div>
<body>
    <div class="container">
        <div class="glow"></div>
        <p>Hey hey, espera, ¿A dónde vas?</p>
        <h1>403</h1>
        <p>Ruta exclusiva para administradores</p>
        <a href="/dashboard" class="btn-home">Volver al inicio</a>
    </div>
</body>
</html>

