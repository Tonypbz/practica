<!DOCTYPE html>
<html>
<head>
  <title>Página Secreta</title>
  <!-- Incluir los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Bienvenido a la Página Secreta</h1>
    <p> @auth de {{Auth::user()->name}} @endauth
        ¡Has iniciado sesión exitosamente!</p>
    <a href="{{route('logout')}}"><button type="button" class="btn btn-danger">Salir</button></a>
  </div>

  <!-- Incluir los archivos JavaScript de Bootstrap y el script para el logout -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
