<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styledashboard.css">    
        
        <title>@yield('title')</title>        
        </head>
    <body>
        <div id="dashboard">
            <a href="dashboard" id="Text1"><h1>EDL</h1></a>
            <img id="foto" src='{{ asset('storage').'/'.$usuario->photo }}'>
            <h6 id="Nombre">{{ $usuario->name }}</h6>
            <h6 id="Cargo">{{ $usuario->occupation }}</h6>
            <ul id="opciones">
                <a href="#" id="encabezado">
                <li class="list-item">Mi Perfil
                </a>
                    <div class="mini-menu">
                        <ul>
                            <a href="my_profile">
                            <li>Ver mis datos</li>
                            </a>
                        </ul>
                    </div>
                </li>
                <a href="#" id="encabezado">
                <li class="list-item">Constancias
                </a>
                    <div class="mini-menu">
                        <ul>
                            <a href="reports">
                                <li>Ver Constancias Generadas</li>
                            </a>
                        </ul>
                    </div>
                </li>
                <a href="#" id="encabezado">
                <li class="list-item">Proyectos
                    </a>
                    <div class="mini-menu">
                        <ul>
                            <a href="projects">
                                <li>Ver Proyectos</li>
                            </a>
                        </ul>
                    </div>
                </li>

            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <button id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar sesión
            </button>
        </div>
        <div id="background"></div>
        <div id="content">@yield('content')
            
        </div>
        <script src="js/baseemployee.js"></script>
    </body>
</html>