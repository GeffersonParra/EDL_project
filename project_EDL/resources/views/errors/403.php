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
            background-color: grey;
            font-family: 'Arial', sans-serif;
            color: #f5e235;
            overflow: hidden;
        }

        h1{
            position: absolute;
            top: 5%;
            left: 10%;
            color: white;
            font-size: 40px;
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
            font-size: 6rem;
            margin: 0;
            color: #f5e235;
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
            background-color: #f5e235;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            z-index: 1;
        }

        .btn-home:hover {
            background-color: #d4be30;
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
            top: 5%;
            left: 10%;
            width: 100px;
            height: 100px;
            background-color: rgb(29, 29, 29);
        }
    </style>
</head>
<div class="title">
    <h1>EDL</h1>
</div>
<body>
    <div class="container">
        <div class="glow"></div>
        <h1>403</h1>
        <p>Ruta exclusiva para administradores</p>
        <a href="/" class="btn-home">Volver al inicio</a>
    </div>
</body>
</html>

