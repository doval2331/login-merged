<?php
include '../modelo/compromiso-buscar.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- cdn icnonos-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../STATIC/css/styles2.css">
</head>

<body class="min-vh-100">

  <div class="border rounded w-50 my-5 mx-auto p-4" style="background-color: #e3f2fd;">
    <h1 class="text-center mb-3">Modificar Compromiso</h1>

    <form action="../controlador/compromiso-edit-post.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">

      <label>Descripción </label><br>
      <input type="text" id="descripcion" name="descripcion" value="<?php echo $consulta[0] ?>"><br>
      
      <label>Fecha Inicio</label><br>
      <input type="text" id="fecha_ini" name="fecha_ini" value="<?php echo $consulta[1] ?>"><br>
      
      <label>Fecha Final</label><br>
      <input type="text" id="fecha_fin" name="fecha_fin" value="<?php echo $consulta[2] ?>"><br>

      <label>Responsable</label><br>
      <input type="text" id="responsable" name="responsable" value="<?php echo $consulta[3] ?>"><br>

      <br>
      <button type="submit" name="editar-compromiso" class="btn btn-success">Guardar</button>
    </form>

  </div>

  <script src="../STATIC/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>