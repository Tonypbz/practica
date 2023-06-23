<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!-- Incluir los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form method="POST" action="{{route('inicia-sesion')}}">
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
        <input type="checkbox" class="form-check-input" id="remeberCheck" name="remember">
        <label class="form-check-label" for="rememberCheck">
            Mantener sesion iniciada</label>
      </div>
      <p> ¿No tienes cuenta? <a href="{{route('registro')}}"> 
        Registrate</a></p>
      <button type="submit" class="btn btn-primary">Iniciar sesion</button>
      @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    </form>
  </div>

  <!-- Incluir los archivos JavaScript de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
