<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compromiso</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../STATIC/css/styles2.css">
</head>

<body class="min-vh-100">
  <?php include '../modelo/acta-buscar.php' ?>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-10">

        <div class="card my-5">
          <div class="card-header d-flex justify-content-between align-items-center">
            Acta: <?php echo $consulta[0] ?>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#rusuario">Nuevo Compromiso</button>
          </div>

          <div class="card-body text-break">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">ID</div>
                  <?php echo $_GET['id'] ?>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Asunto</div>
                  <?php echo $consulta[0] ?>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Fecha</div>
                  <?php echo $consulta[1] ?>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Descripción</div>
                  <?php echo $consulta[2] ?>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Responsable</div>
                  <?php echo $consulta[3] ?>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Programa</div>
                  <?php echo $consulta[4] ?>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="modal fade" id="rusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Compromiso</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form action="../controlador/compromiso-add-post.php" method="POST" class="px-3">
            <label>Descripción</label><br>
            <textarea name="descripcion" rows="5" cols="50" placeholder="Escriba algo aquí..." required></textarea>

            <label>Fecha Inicio</label><br>
            <input type="date" id="fecha_ini" name="fecha_ini" required><br>
            
            <label>Fecha Final</label><br>
            <input type="date" id="fecha_fin" name="fecha_fin" required><br>

            <label>Responsable</label><br>
            <input type="text" id="responsable" name="responsable" required><br>

            <input type="hidden" name="id_acta" value="<?php echo $_GET['id'] ?>"><br>
            <br>
            <button type="submit" name="add-compromiso" class="btn btn-success">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>