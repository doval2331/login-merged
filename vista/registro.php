<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>

  <link rel="stylesheet" href="../STATIC/css/styles1.css">
</head>

<body>

  <main class="contenedor">
    <h1>Registro</h1>

    <form action="../controlador/control_registro.php" method="post">
      <input type="number" placeholder="Identificación" name="id" required>
      <input type="text" placeholder="Nombres" name="nombres" pattern="[A-Za-z0-9]{1,100}" title="¡No se admiten caracteres especiales!" required>
      <input type="text" placeholder="Apellidos" name="apellidos" pattern="[A-Za-z0-9]{1,100}" title="¡No se admiten caracteres especiales!" required>
      <input type="email" placeholder="Email" name="email" required>
      <div class="radio-tipo">
        <div class="radio1">
          <input type="radio" name="tipo" id="profesor" value="1">
          <label for="profesor">Profesor</label>
        </div>
        <div class="radio2">
          <input type="radio" name="tipo" id="administrativo" value="2">
          <label for="administrativo">Administrativo</label>
        </div>
      </div>
      <input type="text" placeholder="Username" name="username" pattern="[A-Za-z0-9]{1,20}" maxlength="20" title="¡No se admiten caracteres especiales!" required>
      <input type="password" placeholder="Contraseña" name="password" minlength="6" maxlength="20" required>

      <div class="select-dependencia">
        <label for="dependencia">Seleccione un Programa: </label><br>
        <select name="dependencia" id="dependencia">
          <option value="1">Medicina Veterinaria y Zootecnia</option>
          <option value="2">Acuicultura</option>
          <option value="3">Ingeniería Agronómica</option>
          <option value="4">Estadística</option>
          <option value="5">Matemáticas</option>
          <option value="6">Geografía</option>
          <option value="7">Física</option>
          <option value="8">Química</option>
          <option value="9">Biología</option>
          <option value="10">Bacteriología</option>
          <option value="11">Tecnología en Regencia y Farmacia</option>
          <option value="12">Administración en Salud</option>
          <option value="13">Enfermería</option>
          <option value="14">Licenciatura en Ciencias Sociales</option>
          <option value="15">Licenciatura Educación Física, Recreación y Deporte</option>
          <option value="16">Licenciatura en Literatura  y Lengua Castellana</option>
          <option value="17">Licenciatura en Informática</option>
          <option value="18">Licenciatura en Lengua Extranjera con Énfasis en Inglés</option>
          <option value="19">Licenciatura en Ciencias Naturales y Educación Ambiental</option>
          <option value="20">Licenciatura en Educación Infantil</option>
          <option value="21">Ingeniería Mecánica</option>
          <option value="22">Ingeniería Ambiental</option>
          <option value="23">Ingeniería Industrial</option>
          <option value="24">Ingeniería de Alimentos</option>
          <option value="25">Ingeniería de Sistemas</option>
          <option value="26">Derecho</option>
          <option value="27">Administración en Finanzas y Negocios Internacionales</option>
        </select>
      </div>

      <input type="submit" name="Registrar" value="Registrar">
    </form>
  </main>

</body>

</html>