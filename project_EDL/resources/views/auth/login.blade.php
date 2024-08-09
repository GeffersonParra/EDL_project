<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>EDL  |  Iniciar Sesión</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid" id="navbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#" id="titulonav"><p>EDL</p></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="Login" id="Login">
    <div id="Text1">
        <p>Ingresa a tu cuenta</p>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-box">
            <input id="input1" type="text" name="id" required autofocus autocomplete="username" />
            <label for="input1" id="usr"># Documento</label>
            <i class='bx bx-id-card' id="i1"></i>
        </div>

        <div class="input-box">
            <input id="input2" type="password" name="password" required autocomplete="current-password"/>
            <label for="input2" id="psw">Contraseña</label>
            <i class='bx bxs-key' id="i2"></i>
        </div>

        <div id="linkpw">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>
        <button id="btnlogin">
            {{ __('Iniciar Sesión') }}
        </button>
        <x-input-error :messages="$errors->get('id')" id="error"/>
    </form>
  </div>
</body>
</html>
