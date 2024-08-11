<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylelogin.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>EDL | Iniciar Sesión</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-expand-xl bg-dark navbar-dark">
    <div class="container d-flex justify-content-center">
      <ul class="navbar-nav">
        <li class="nav-item">
          <h1 class="mt-1 text-light">EDL</h1>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container" style="height: 25rem">
    <div class="Login d-flex col-12 justify-content-center h-100">
      <div class="col-4 mt-3 text-center">
        <h3>Ingresa a tu cuenta</h3>
        <hr>
      </div>
      <form method="POST" action="{{ route('login') }}" class="form col-12">
        @csrf
        <div class="input-box">
          <input type="text" name="id" id="input1" required autofocus autocomplete="username" />
          <label for="input1" id="usr"># Documento</label>
          <i class='bx bx-id-card' id="i1"></i>
        </div>

        <div class="input-box">
          <input id="input2" type="password" name="password" required autocomplete="current-password" />
          <label for="input2" id="psw">Contraseña</label>
          <i class='bx bxs-key' id="i2"></i>
        </div>

        <div class="linkpw fw-bolder">
          @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}">
            {{ ('¿Olvidaste tu contraseña?') }}
          </a>
          @endif
        </div>
        <button class="btnlogin w-50">
          {{ __('Iniciar Sesión') }}
        </button>
        <x-input-error :messages="$errors->get('id')" class="error mt-4"/>
      </form>
    </div>
  </div>
</body>

</html>