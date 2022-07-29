<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="STATIC/css/styles1.css">
</head>
<body>

  <main class="contenedor">
    <h1>Login</h1>

    <form action="./controlador/control_ingreso.php" method="post">
      <input type="text" placeholder="Username" name="username" pattern="[A-Za-z0-9]{1,100}" title="¡No se admiten caracteres especiales!" required>
      <input type="password" placeholder="Contraseña" name="password" minlength="6" required>
      
      <input type="submit" name="ingresar" value="Ingresar">
    </form>
    
    <p>¿Olvidaste tu contraseña? <a href="vista/restaurar.php">Restáurala aquí</a>.</p>
    <p>Si aún no tiene una cuenta, por favor <a href="vista/registro.php">Regístrese aquí</a>.</p>
    
  </main>

</body>
</html>