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
    <div class="d-flex vertical-nav col-2 align-items-center">
        <div class="col-12 d-flex justify-content-evenly gap-4" id="mini-nav">
            <li class="dropdown" style="list-style: none">
                <button id="menu-toggle" class="btn-menu mt-2 dropdown-toggle h-75" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    &#9776;
                </button>
                <ul class="dropdown-menu">
                    <li class="mini-encabezado">Mi perfil</li>
                    <li><a class="dropdown-item mini-li" href="{{url('my_profile')}}">Ver mis datos</a></li>
                    <li class="mini-encabezado">Constancias</li>
                    <li><a class="dropdown-item mini-li" href="{{url('reports')}}">Ver Constancias Generadas</a></li>
                    <li class="mini-encabezado">Proyectos</li>
                    <li><a class="dropdown-item mini-li" href="{{url('projects')}}">Ver proyectos</a></li>
                    <button class="mini-logout justify-content-end"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </button>
                </ul>
            </li>
            <a href="dashboard" class="text1 col-2 text-end">
                <h1>EDL</h1>
            </a>
            <div class="mini col-4 d-flex h-100 align-items-center" onclick="window.location.href='my_profile';">
                <img class="mx-auto mini-img rounded-circle" src='{{ Storage::url($usuario->photo) }}'>
                    <div class="d-flex flex-column">
                        <h6 class="mx-auto mini-text text-center col-12 mt-2">{{ $usuario->first_name }}</h6>
                        <h6 class="mx-auto mini-occ col-12 mb-2">{{ $usuario->occupationName->occupation_name }}</h6>
                    </div>
                    
                </div>
            </div>
            <img class="foto h-25 rounded-circle col-8" src='{{ Storage::url($usuario->photo) }}'>
            <h6 class="nombre mt-3">{{ $usuario->first_name }}</h6>
            <h6 class="cargo">{{ $usuario->occupationName->occupation_name }}</h6>
            <ul class="opciones d-flex">
                <a id="encabezado" style="cursor:pointer">
                    <li class="list-item" id="normal-menu">Mi Perfil
                </a>
                <div class="mini-menu">
                    <ul>
                        <a href="{{url('my_profile')}}">
                            <li>Ver mis datos</li>
                        </a>
                    </ul>
                </div>
                </li>
                <a id="encabezado" style="cursor:pointer">
                    <li class="list-item" id="normal-menu">Constancias
                </a>
                <div class="mini-menu">
                    <ul>
                        <a href="{{url('reports')}}">
                            <li>Ver Constancias Generadas</li>
                        </a>
                    </ul>
                </div>
                </li>
                <a id="encabezado" style="cursor:pointer">
                    <li class="list-item" id="normal-menu">Proyectos
                </a>
                <div class="mini-menu">
                    <ul>
                        <a href="{{url('projects')}}">
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
        <hr id="subtitle">
        @yield('content')
    </div>
    <script src="js/base.js" defer></script>
    <script src="{{ asset('js/profile.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>