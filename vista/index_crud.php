<?php
include_once "../modelo/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Actas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- cdn icnonos-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../STATIC/css/styles2.css">
</head>

<body class="min-vh-100 d-flex flex-column">
  <?php include 'header.php' ?>

  <div class="collapse" id="a" style="display: block;">
    <?php include 'acta-vista.php' ?>
  </div>

  <div class="collapse" id="b">
    <?php include 'compromiso-vista.php' ?>
  </div>

  <?php include 'footer.php' ?>

  <!-- Bootstrap JavaScript Libraries -->
  <!-- <script src="js/main.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>