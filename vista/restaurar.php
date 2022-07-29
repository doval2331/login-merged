<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar Contraseña</title>

  <link rel="stylesheet" href="../STATIC/css/styles1.css">
</head>
<body>
  <main class="contenedor">
    <h1>Recuperar Contraseña</h1>

    <form action="../controlador/control_restaurar.php" method="post">
      <p>Por favor. Ingrese el Email registrado para iniciar el proceso de recuperación de la cuenta.</p>
      <input type="email" placeholder="Email" name="correo">
      <i>ó</i>
      <input type="text" placeholder="Usuario" name="usuario">
      <div class="radio-tipo">
        <div class="radio1">
          <input type="radio" name="modo" id="correo" value="correo">
          <label for="correo">Restaurar por medio del Correo.</label>
        </div>
        <div class="radio2">
          <input type="radio" name="modo" id="usuario" value="usuario">
          <label for="usuario">Restaurar por medio del Usuario.</label>
        </div>
      </div>
      
      <input type="submit" name="restaurar" value="Restaurar">
    </form>
  </main>
</body>
</html>