<!DOCTYPE html>
<html>
<head>
  <title>Página de registro</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- Formulario de registro -->
        <form action="php/registro.php" method="POST">
          <h2 class="mt-5 mb-4">Regístrate</h2>
          <!-- Campo de entrada para el nombre de usuario -->
          <div class="form-group">
            <input type="text" class="form-control" name="Nombre_completo" placeholder="Nombre_completo" required>
          </div>
          <!-- Campo de entrada para la contraseña -->
          <div class="form-group">
            <input type="password" class="form-control" name="Clave" placeholder="Clave" required>
          </div>
		  <!-- Campo de entrada para el correo -->
          <div class="form-group">
            <input type="text" class="form-control" name="Usuario" placeholder="Usuario" required>
          </div>
          <!-- Botón para enviar el formulario de registro -->
          <button type="submit" class="btn btn-primary" name="registro"><a href="inicio.php">Registrarse</button>
        </form></a>
        <!-- Enlace para redirigir al formulario de inicio de sesión -->
        <p class="mt-3">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</script>
</body>
</html>