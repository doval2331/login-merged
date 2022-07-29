<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambiar Contraseña</title>

  <link rel="stylesheet" href="../STATIC/css/styles1.css">
</head>
<body>
  <main class="contenedor">
    <h1>Cambiar Contraseña</h1>

    <form action="../controlador/control_cambiar.php" method="post">
      <p>Por favor. Ingrese su Nueva Contraseña.</p>
      <input type="password" placeholder="Contraseña" name="pass" minlength="6" required>
      
      <input type="submit" name="cambiar" value="Cambiar">
    </form>
  </main>
</body>
</html>