<!DOCTYPE html>
<html>
<head>
  <title>Registro de Usuario</title>
  <!-- Incluir los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Registro de Usuario</h1>
    <form method="POST" action="{{route('validar-registro')}}">
    @csrf
      <div class="form-group">
        <label for="emailInput" class="form-label">Email:</label>
        <input type="email" class="form-control" id="emailInput" name="email" placeholder="Ingresa tu email" required>
      </div>
      <div class="form-group">
        <label for="passwordInput" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Ingresa tu contraseña" required>
      </div>
      <div class="form-group">
        <label for="userInput" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="userInput" name="name" placeholder="Ingresa tu nombre">
      </div>
      <button type="submit" class="btn btn-primary">Registrar</button>
      <a href="{{route('login')}}"><button type="button" class="btn btn-danger">Volver al Login</button></a>
    </form>
  </div>

  <!-- Incluir los archivos JavaScript de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
