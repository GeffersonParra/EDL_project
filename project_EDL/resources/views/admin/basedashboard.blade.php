<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/styledashboard.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="d-flex vertical-nav col-2 align-items-center">
        <a href="dashboard" class="text1">
            <h1>EDL</h1>
        </a>
        <img class="foto h-25 rounded-circle col-8" src='{{ Storage::url($usuario->photo) }}'>
        <h6 class="nombre mt-3">{{ $usuario->name }}</h6>
        <h6 class="cargo">{{ $usuario->occupation }}</h6>
        <ul class="opciones d-flex">
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
        <button class="logout justify-content-end"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar sesión
        </button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <div class="content col-12 mx-auto">
        <h1 class="mt-4 fs-1">@yield('subtitle')</h1>
        <hr>
        @yield('content')
    </div>
    <script src="{{ asset('js/base.js') }}"></script>
</body>

</html>